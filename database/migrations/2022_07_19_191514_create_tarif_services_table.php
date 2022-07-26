<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTarifServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tarif_services', function (Blueprint $table) {
            $table->id();
            $table->integer('group_id');
            $table->string('name_tarif');
            $table->text('description');
            $table->string('hosting_host');
            $table->string('hosting_login');
            $table->string('hosting_password');
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
        Schema::dropIfExists('tarif_services');
    }
}
