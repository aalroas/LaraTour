<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class contact extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
   Schema::create('contacts', function (Blueprint $table) {
            $table->integer('id');
            $table->string('contact_image')->nullable();
            $table->string('contact_name_en')->nullable();
            $table->string('contact_name_ar')->nullable();
            $table->string('contact_name_tr')->nullable();
            $table->text('contact_text_ar')->nullable();
            $table->text('contact_text_tr')->nullable();
            $table->text('contact_text_en')->nullable();
            $table->string('lat')->nullable();
            $table->string('long')->nullable();
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
         Schema::dropIfExists('contacts');
    }
}
