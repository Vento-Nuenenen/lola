<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('billings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->boolean('is_refunded');
            $table->double('billing_amount');
            $table->dateTime('billing_time');
            $table->string('billing_image');
            $table->string('reason');
            $table->bigInteger('FK_CURRENCY')->unsigned()->index();
            $table->bigInteger('FK_BUDGET')->unsigned()->index();
            $table->bigInteger('FK_DETAIL_BUDGET')->unsigned()->index()->nullable();
            $table->bigInteger('FK_USER')->unsigned()->index()->nullable();
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
        Schema::dropIfExists('billings');
    }
}
