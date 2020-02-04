<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title', 150)->unique();
            $table->string('slug', 150)->unique();
            $table->text('sub_title')->nullable();
            $table->text('short_desc')->nullable();
            $table->text('description')->nullable();
            $table->string('logo_path', 500)->nullable();
            $table->string('thumb_path', 500)->nullable();
            $table->integer('rating')->nullable();
            $table->string('ref_link');
            $table->text('pros')->nullable();
            $table->text('cons')->nullable();
            $table->text('key_features')->nullable();
            $table->integer('order')->nullable();
            $table->text('meta_keyword')->nullable();
            $table->text('meta_desc')->nullable();
            $table->bigInteger('views')->default('0');
            $table->integer('status')->default('1');
            $table->bigInteger('created_by')->nullable();
            $table->bigInteger('updated_by')->nullable();
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
        Schema::dropIfExists('reviews');
    }
}
