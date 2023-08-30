<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('review_articles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('article_id')->nullable();
            $table->string('user_name')->nullable();
            $table->string('user_email')->nullable();
            $table->string('fecha_visita')->nullable();
            $table->string('rank')->nullable();
            $table->string('comentarios')->nullable();
            $table->string('link')->nullable();
            $table->string('extra')->nullable();
            $table->string('slug')->nullable();
            $table->string('file_path')->nullable();
            $table->string('file')->nullable();
            $table->string('mobile')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('review_articles');
    }
}
