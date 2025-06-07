<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    public function up(): void
    {
        Schema::create('invoice_items', static function (Blueprint $table) {
            $table->id();
            $table->foreignId('franchise_id')
                ->constrained()
                ->cascadeOnDelete();
            $table->foreignId('invoice_id')->constrained()->cascadeOnDelete();
            $table->foreignId('item_id')->constrained()->cascadeOnDelete();
            $table->integer('quantity');
            $table->decimal('price', 20, 4);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('invoice_items');
    }
};
