<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    public function up(): void
    {
        Schema::create('payments', static function (Blueprint $table) {
            $table->id();
            $table->foreignId('franchise_id')
                ->constrained()
                ->cascadeOnDelete();
            $table->foreignId('invoice_id')->constrained()->cascadeOnDelete();
            $table->date('paid_at');
            $table->decimal('amount', 20, 4);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
