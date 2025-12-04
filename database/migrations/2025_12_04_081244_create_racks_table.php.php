<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('racks', function (Blueprint $table) {
            $table->id();
            $table->string('kode_rak')->unique();
            $table->string('lokasi')->nullable();
            $table->integer('kapasitas')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('racks');
    }
};
