<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEyeImgReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eye_img_reports', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('report_number');
            $table->string('EyeUrl_1',255)->nullable();
            $table->string('EyeUrl_2',255)->nullable();
            $table->integer('check1')->nullable();
            $table->integer('check2')->nullable();
            $table->integer('check3')->nullable();
            $table->integer('check4')->nullable();
            $table->integer('check5')->nullable();
            $table->integer('check6')->nullable();
            $table->integer('check7')->nullable();
            $table->integer('check8')->nullable();
            $table->integer('check9')->nullable();
            $table->integer('check10')->nullable();
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
        Schema::dropIfExists('eye_img_reports');
    }
}
