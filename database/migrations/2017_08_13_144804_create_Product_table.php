<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_en')->nullable();
            $table->string('name_ar')->nullable();
            $table->text('fullcontent_en')->nullable();
            $table->text('fullcontent_ar')->nullable();
            $table->string('shortcontent_en')->nullable();
            $table->string('shortcontent_ar')->nullable();
            $table->string('video')->nullable();
            $table->string('price')->nullable();
            $table->string('model_en')->nullable();
            $table->string('model_ar')->nullable();
	        $table->string('img')->nullable();

            $table->integer('manufacturer_id')->unsigned();
            $table->foreign('manufacturer_id')->references('id')->on('manufacture')->onDelete('cascade')->onUpdate('cascade');

            $table->integer('currency_id')->unsigned();
            $table->foreign('currency_id')->references('id')->on('currency')->onDelete('cascade')->onUpdate('cascade');


            $table->integer('catproduct_id')->unsigned();
            $table->foreign('catproduct_id')->references('id')->on('product_category')->onDelete('cascade')->onUpdate('cascade');

            $table->softDeletes();
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
        Schema::dropIfExists('product');
    }
}
