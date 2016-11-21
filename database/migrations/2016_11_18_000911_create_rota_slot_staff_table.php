<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRotaSlotStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rota_slot_staff', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('rotaid', 11)->unsigned();
            $table->tinyInteger('daynumber', 4);
            $table->integer('staffid', 11)->unsigned()->nullable();
            $table->string('slottype', 20);
            $table->time('starttime')->nullable();
            $table->time('endtime')->nullable();
            $table->float('workhours', 4, 2);
            $table->integer('premiumminutes', 4)->nullable();
            $table->integer('roletypeid', 11)->unsigned()->nullable();
            $table->integer('freeminutes', 4)->nullable();
            $table->integer('seniorcashierminutes', 4)->nullable();
            $table->string('splitshifttimes', 11)->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rota_slot_staff');
    }
}
