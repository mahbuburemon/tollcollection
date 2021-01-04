<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAmountTblTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('amount_tbl', function (Blueprint $table) {
           $table->bigIncrements('amount_id');
            
            $table->string('current_amount');
            $table->string('due');
            $table->string('deposit_amount');
            $table->string('total_amount');
            $table->string('refill');
            


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
        Schema::dropIfExists('amount_tbl');
    }
}
