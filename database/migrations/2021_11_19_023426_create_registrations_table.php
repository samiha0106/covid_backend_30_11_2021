<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrations', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name',30);
            $table->string('slug',30)->unique();
            $table->integer('age');
            $table->string('gender',10);
            $table->string('occupation',20);
            $table->string('marital status',10);
            $table->integer('date of birth');
            $table->integer('phone no');
            $table->string('address',60);
            $table->string('zone',20);
            // $table->bigInteger('hospital_id')->unsigned();
            $table->uuid('hospital_id')->nullable(false);
            $table->string('vaccine_center',50);
            $table->integer('date of vaccine');
            $table->integer('time of vaccine');
            $table->foreign('hospital_id')->references('id')->on('hospitals')->onDelete("cascade");
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
        Schema::dropIfExists('registrations');
    }
}
