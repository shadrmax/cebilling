<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFreeKassasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('free_kassa', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->decimal('amount', '5');
            $table->decimal('comission', '5');
            $table->integer('created_time');
            $table->integer('pay_time');
            $table->string('status');
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
        Schema::dropIfExists('free_kassa');
    }
}
