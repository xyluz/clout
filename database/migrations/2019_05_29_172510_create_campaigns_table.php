<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCampaignsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {  
        Schema::create('campaigns', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('campaign_name');
            $table->integer('user_id');
            $table->integer('clout_package_id')->nullable();           
            $table->integer('account_id')->nullable();           
            $table->integer('total_played')->nullable();
            $table->string('start_date')->nullable();
            $table->string('media')->nullable();
            $table->text('campaign_description')->nullable();
            $table->string('campaign_package')->nullable();
            $table->string('campaign_status')->nullable();
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
        Schema::dropIfExists('campaigns');
    }
}
