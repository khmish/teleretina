<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('patient_id');
            $table->integer('doctor_id');
            $table->integer('staff_id');
            $table->integer('clinic_id');
            $table->date('appointment_date');
            $table->time('appointment_time')->default('00:00');
            $table->text('appointment_detail')->nullable();
            $table->integer('state')->default('1');;
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
        Schema::dropIfExists('appointments');
    }
}
