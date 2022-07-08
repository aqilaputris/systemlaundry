<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersLaundryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders_laundry', function (Blueprint $table) {
            $table->id();
            $table->string('code_order');
            $table->unsignedBigInteger('package_id');
            $table->string('total_price');
            $table->string('user_name');
            $table->string('user_phone');
            $table->string('user_address');
            $table->date('date_drop_laundry')->nullable();
            $table->date('date_take_laundry')->nullable();
            $table->date('date_finish_laundry')->nullable();
            $table->string('status');
            $table->timestamps();

            $table->foreign('package_id')
            ->references('id')->on('package');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders_laundry');
    }
}
