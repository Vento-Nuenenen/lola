<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function(Blueprint $table){
            $table->foreign('FK_ROLE')->references('id')->on('roles')->onDelete('cascade');
            $table->foreign('FK_GROUP')->references('id')->on('groups')->onDelete('cascade');
        });

        Schema::table('budgets', function(Blueprint $table){
            $table->foreign('FK_GROUP')->references('id')->on('groups')->onDelete('cascade');
        });

        Schema::table('detail_budgets', function(Blueprint $table){
            $table->foreign('FK_GROUP')->references('id')->on('groups')->onDelete('cascade');
        });

        Schema::table('billings', function(Blueprint $table){
            $table->foreign('FK_CURRENCY')->references('id')->on('currencies')->onDelete('cascade');
            $table->foreign('FK_BUDGET')->references('id')->on('budgets')->onDelete('cascade');
            $table->foreign('FK_DETAIL_BUDGET')->references('id')->on('detail_budgets')->onDelete('cascade');
            $table->foreign('FK_USER')->references('id')->on('users')->onDelete('cascade');
        });
    }
}
