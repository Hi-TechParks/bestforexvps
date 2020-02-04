<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePricingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pricings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('provider_id')->unsigned();
            $table->string('package');
            $table->string('pri_price')->nullable();
            $table->string('disc_price')->nullable();
            $table->string('cpu')->nullable();
            $table->string('storage')->nullable();
            $table->string('ram')->nullable();
            $table->string('bandwidth')->nullable();
            $table->string('ip_address')->nullable();
            $table->string('transfer')->nullable();
            $table->string('domain')->nullable();
            $table->string('email')->nullable();
            $table->string('ssl')->nullable();
            $table->integer('order')->nullable();
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
        Schema::dropIfExists('pricings');
    }
}
