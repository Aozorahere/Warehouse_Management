<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('incoming_items', function (Blueprint $table) {
            $table->id();

            $table->foreignId('product_id')->constrained('products')->onDelete('cascade');
            $table->foreignId('rak_id')->nullable()->constrained('racks')->nullOnDelete();
            
            $table->integer('jumlah');
            $table->date('tanggal');

            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('incoming_items');
    }
};
