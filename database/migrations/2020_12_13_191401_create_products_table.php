<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255)->nullable();
            $table->string('code', 100)->nullable();
            $table->double('unitBuyingCost', 15, 2)->nullable();
            $table->double('unitSellingCost', 15, 2)->nullable();
            $table->integer('quantity')->nullable();
            $table->double('taxRate', 5, 2)->nullable();
            $table->boolean('soldOutFlag')->nullable()->default(false);
            $table->integer('user_id')->unsigned()->nullable();
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
        Schema::dropIfExists('products');
    }
}
