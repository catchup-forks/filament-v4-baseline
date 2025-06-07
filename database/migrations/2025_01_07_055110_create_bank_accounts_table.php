<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    public function up(): void
    {
        Schema::create('bank_accounts', static function (Blueprint $table) {
            $table->id();
            $table->foreignId('franchise_id')
                ->constrained()
                ->cascadeOnDelete();
            $table->foreignId('bank_id')
                ->constrained()
                ->cascadeOnDelete();
            $table->string('account_number');
            $table->string('account_name');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('bank_accounts');
    }
};
