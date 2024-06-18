<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookGenreTable extends Migration
{
    public function up(){
        Schema::create('book_genre', function (Blueprint $table) {
        $table->id();
        $table->foreignId('book_id')->constrained()->onDelete('cascade');
        $table->foreignId('genre_id')->constrained()->onDelete('cascade');
        $table->timestamps();
    });
    }
    public function down(){
        Schema::dropIfExists('book_genre');
    }
}
