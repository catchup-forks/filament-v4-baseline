<?php

use App\Models\Franchise;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    public function up(): void
    {
        Schema::create('franchise_user', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Franchise::class);
            $table->foreignIdFor(User::class);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('team_user');
    }
};
