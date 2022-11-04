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
        Schema::create('job_posts', function (Blueprint $table) {
            $table->id('job_id');
            $table->integer('cnum');
            $table->string('job_title');
            $table->longText('job_description');
            $table->string('job_salary');
            $table->string('job_location');
            $table->string('job_setup');
            $table->date('job_post_date');
            $table->string('job_type');
            $table->string('exp_level');
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
        Schema::dropIfExists('job_posts');
    }
};
