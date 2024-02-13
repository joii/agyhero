<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('news_category_id')->nullable();
            $table->string('news_title_en')->nullable();
            $table->string('news_title_th')->nullable();
            $table->string('news_description_en')->nullable();
            $table->string('news_description_th')->nullable();
            $table->string('news_thumbnail')->nullable();
            $table->string('news_image')->nullable();
            $table->text('news_detail_en')->nullable(); 
            $table->text('news_detail_th')->nullable(); 
            $table->date('news_date')->nullable();
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
        Schema::dropIfExists('news');
    }
};
