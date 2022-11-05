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
        Schema::table('employer_profiles', function (Blueprint $table) {
            $table->text('description');
            $table->text('benefits');
            $table->string('workhours');
            $table->string('comsize');
            $table->string('dcode');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('employer_profiles', function (Blueprint $table) {
            $table->dropColumn('description');
            $table->dropColumn('benefits');
            $table->dropColumn('workhours');
            $table->dropColumn('comsize');
            $table->dropColumn('dcode');
            
        });
    }
};
