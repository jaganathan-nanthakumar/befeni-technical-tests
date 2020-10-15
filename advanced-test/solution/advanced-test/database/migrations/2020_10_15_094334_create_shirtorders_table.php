<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShirtordersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shirt_orders', function (Blueprint $table) {
            $table->id();
            $table->integer('customerId');
            $table->integer('fabricId');
            $table->integer('collarSize');
            $table->integer('chestSize');
            $table->integer('waistSize');
            $table->integer('wristSize');
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
        Schema::dropIfExists('shirt_orders');
    }
}
