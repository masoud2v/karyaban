<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $job) {
            $job->increments('id');
            $job->string('title');
            $job->string('text');
            $job->string('user');
            $job->string('email');
            $job->string('tel');
            $job->string('city');
            $job->string('type');
            $job->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('jobs');
    }
}
