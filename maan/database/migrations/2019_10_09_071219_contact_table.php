<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ContactTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('contact_forms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('subject')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->text('message')->nullable();

            $table->string('check_in')->nullable();
            $table->string('check_out')->nullable();
            $table->string('children')->nullable();
            $table->string('adults')->nullable();
            $table->string('rooms')->nullable();
            $table->string('flight_type')->nullable();

            $table->string('f_from')->nullable();

            $table->string('f_to')->nullable();

            $table->string('p_up_location')->nullable();
            $table->string('p_up_date')->nullable();

            $table->string('d_off_date')->nullable();

            $table->string('tour_name')->nullable();

            $table->string('tour_date')->nullable();

            $table->string('guests')->nullable();
            $table->string('destination')->nullable();
            $table->string('days_count')->nullable();
            $table->string('speak')->nullable();

            $table->string('form_type')->nullable();



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
       Schema::dropIfExists('contact_forms');
    }
}
