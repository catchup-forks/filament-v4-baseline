<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    public function up(): void
    {
        Schema::create('expenses', static function (Blueprint $table) {
            $table->id();
            $table->foreignId('franchise_id')
                ->constrained()
                ->cascadeOnDelete();
            $table->foreignId('creditor_id')
                ->constrained()
                ->cascadeOnDelete();
            $table->foreignId('expense_category_id')
                ->constrained()
                ->cascadeOnDelete();
            $table->string('number');
            $table->date('expensed_at');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('expenses');
    }
};
