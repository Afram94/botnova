<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('stocks', function (Blueprint $table) {
            $table->unsignedInteger('product_id');
            $table->foreign('product_id', 'product_fk_1230965')->references('id')->on('products')->onDelete("cascade");
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    /* public function down()
    {
        Schema::table('stocks', function (Blueprint $table) {
            //
        });
    } */
}
