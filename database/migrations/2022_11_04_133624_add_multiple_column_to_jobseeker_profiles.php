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
        Schema::table('jobseeker_profiles', function (Blueprint $table) {
            $table->text('bio');
            $table->text('emphistory');
            $table->text('educ');
            $table->text('addinfo');
            $table->string('cert');
            $table->string('language');
            $table->string('skills');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('jobseeker_profiles', function (Blueprint $table) {
            $table->dropColumn('bio');
            $table->dropColumn('emphistory');
            $table->dropColumn('educ');
            $table->dropColumn('addinfo');
            $table->dropColumn('cert');
            $table->dropColumn('language');
            $table->dropColumn('skills');
        });
    }
};
