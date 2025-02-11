<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Laravel\Prompts\table;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('slug')->unique()->constrained(
                    table: 'posts',
                    column: 'slug',
                    indexName: 'posts_slug_unique',
            );
            $table->foreignId('author_id')->constrained(
                    table: 'users',
                    indexName: 'posts_author_id',
                );           
            $table->foreignId('category_id')->constrained(
                    table: 'categories',
                    indexName: 'posts_category_id',
                ); 
            $table->text('isi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
