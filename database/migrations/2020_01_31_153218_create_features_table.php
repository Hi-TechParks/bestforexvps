<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('features', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('provider_id')->unsigned();
            $table->string('uptime')->nullable();
            $table->string('speed')->nullable();
            $table->string('support')->nullable();
            $table->string('data_center')->nullable();
            $table->string('cpanel')->nullable();
            $table->string('database')->nullable();
            $table->string('backup')->nullable();
            $table->string('migration')->nullable();
            $table->string('site_transfer')->nullable();
            $table->string('security')->nullable();
            $table->string('guarantee')->nullable();
            $table->string('pay_method')->nullable();
            $table->integer('status')->default('1');
            $table->bigInteger('created_by')->nullable();
            $table->bigInteger('updated_by')->nullable();
            $table->foreign('provider_id')
                  ->references('id')->on('reviews')
                  ->onDelete('cascade');
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
        Schema::dropIfExists('features');
    }
}
