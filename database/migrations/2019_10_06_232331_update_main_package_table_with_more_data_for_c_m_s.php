<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateMainPackageTableWithMoreDataForCMS extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() 
    {
        Schema::table('clout_packages', function (Blueprint $table) {
            $table->text('single_page_content');
            $table->string('large_icon');
            $table->string('small_icon');
            $table->string('position');
            $table->string('homepage_main');
            $table->string('special_package')->default('0');
            $table->string('color')->default('000000');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
