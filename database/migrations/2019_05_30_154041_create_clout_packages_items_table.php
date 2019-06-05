<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCloutPackagesItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    { //package items
        Schema::create('clout_packages_items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('clout_package_id');
            $table->string('package_item_name');
            $table->text('package_item_description');
            $table->string('package_item_unitprice')->nullable();
            $table->string('package_item_salesprice')->nullable();
            $table->string('package_item_available_count')->nullable();
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
        Schema::dropIfExists('clout_packages_items');
    }
}
