<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountSecTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('account_sec', function (Blueprint $table) {
            
            $table->bigIncrements('amount_id');
            $table->string('date');
            $table->unsignedBigInteger('user_id');
            $table->integer('current_amount');
            $table->integer('toll_amount');
            $table->integer('due_amount');
            $table->integer('total_amount');
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
        Schema::dropIfExists('account_sec');
    }
}
