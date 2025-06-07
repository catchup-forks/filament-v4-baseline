<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    public function up(): void
    {
        Schema::create('addresses', static function (Blueprint $table) {
            $table->id();
            $table->string('address_1');
            $table->string('address_2')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('city')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('addresses');
    }
};
