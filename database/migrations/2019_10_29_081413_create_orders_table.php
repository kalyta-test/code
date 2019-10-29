<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('number');
            $table->bigInteger('user_id');
            $table->bigInteger('company_id');
            $table->double('cost');
            $table->bigInteger('payment_type_id');
            $table->text('address');
            $table->smallInteger('confirmed'); //boolean?
            $table->bigInteger('order_receipt_type_id');
            $table->timestamps();

            $table->unique(['number', 'company_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
