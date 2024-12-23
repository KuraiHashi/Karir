<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('karir', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('kota', ['Jakarta', 'Bandung', 'Pekanbaru', 'Aceh']);
            $table->enum('bidang', ['IT', 'Marketing', 'Management', 'Mekanik']);
            $table->string('skill');
            $table->string('pengalaman');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('karir');
    }
};
