<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class about extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
   Schema::create('abouts', function (Blueprint $table) {
            $table->integer('id');
            $table->string('about_image')->nullable();
            $table->string('page_image')->nullable();
            $table->string('page_name_en')->nullable();
            $table->string('page_name_ar')->nullable();
            $table->string('page_name_tr')->nullable();
            $table->text('page_text_ar')->nullable();
            $table->text('page_text_tr')->nullable();
            $table->text('page_text_en')->nullable();
            $table->string('about_tilte_ar')->nullable();
            $table->string('about_tilte_en')->nullable();
            $table->string('about_tilte_tr')->nullable();
            $table->text('about_text_ar')->nullable();
            $table->text('about_text_en')->nullable();
            $table->text('about_text_tr')->nullable();
            $table->string('url')->nullable();
            $table->string('award_tilte_ar')->nullable();
            $table->string('award_tilte_en')->nullable();
            $table->string('award_tilte_tr')->nullable();
            $table->text('award_text_ar')->nullable();
            $table->text('award_text_en')->nullable();
            $table->text('award_text_tr')->nullable();
            $table->string('projects')->nullable();
            $table->string('customers')->nullable();
            $table->string('hours')->nullable();
            $table->string('awards')->nullable();
            $table->string('team_tilte_ar')->nullable();
            $table->string('team_tilte_en')->nullable();
            $table->string('team_tilte_tr')->nullable();
            $table->text('team_text_ar')->nullable();
            $table->text('team_text_en')->nullable();
            $table->text('team_text_tr')->nullable();
            $table->string('testimonials_tilte_ar')->nullable();
            $table->string('testimonials_tilte_en')->nullable();
            $table->string('testimonials_tilte_tr')->nullable();
            $table->text('testimonials_text_ar')->nullable();
            $table->text('testimonials_text_en')->nullable();
            $table->text('testimonials_text_tr')->nullable();
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
         Schema::dropIfExists('abouts');
    }
}
