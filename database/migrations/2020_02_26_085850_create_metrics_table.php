<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMetricsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('metrics', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('metricgtmhubid');
            $table->foreign('metricgtmhubid')->references('gtmhubid')->on('users');
            $table->string('goalid');
            $table->string('sessionid');
            $table->double('attainment');
            $table->integer('severity')->default('0');
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
        Schema::dropIfExists('metrics');
    }
}
