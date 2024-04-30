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
        Schema::create('class', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->date('date_class');
            $table->string('link_class');

            $table->unsignedBigInteger('id_users');
            $table->foreign('id_users')->references('id')->on('users')->OnDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('id_course');
            $table->foreign('id_course')->references('id')->on('course')->OnDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('class');
    }
};
