<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailBudgetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_budgets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('budget_name');
            $table->double('total_amount');
            $table->double('total_reserve');
            $table->bigInteger('FK_GROUP');
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
        Schema::dropIfExists('detail_budgets');
    }
}
