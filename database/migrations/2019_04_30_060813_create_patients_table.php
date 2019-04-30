<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->string('id',11);
            $table->integer('user_id');
            $table->string('firstName',100);
            $table->string('middleName',100)->nullable();
            $table->string('lastName',100);
            $table->string('phone',15);
            $table->integer('height')->nullable();
            $table->integer('weight')->nullable();
            $table->text('address');
            $table->text('additional')->nullable();
            $table->integer('state')->default('1');
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
        Schema::dropIfExists('patients');
    }
}
