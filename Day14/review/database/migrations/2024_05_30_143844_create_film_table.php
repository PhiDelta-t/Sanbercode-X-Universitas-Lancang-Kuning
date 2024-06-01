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
        Schema::create('film', function (Blueprint $table) {
            $table->id();
            $table->string('judul', 45)->notNull();
            $table->text('ringkasan')->nullable();
            $table->integer('tahun')->notNull();
            $table->string('poster', 255)->nullable();
            $table->unsignedBigInteger('genre_id')->notNull();
            $table->foreign('genre_id')->references('id')->on('genre')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('film');
    }
};
