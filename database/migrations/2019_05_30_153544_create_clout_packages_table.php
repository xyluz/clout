<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCloutPackagesTable extends Migration
{    
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    { 
        Schema::create('clout_packages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('package_name');
            $table->text('package_description')->nullable();
            $table->string('package_price');
            $table->string('package_sales_price')->nullable();
            $table->string('package_catch_phrase')->nullable();
            $table->string('package_location')->nullable();
            $table->string('package_duration')->nullable();
            $table->string('package_autorenew')->nullable();
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
        Schema::dropIfExists('clout_packages');
    }
}
