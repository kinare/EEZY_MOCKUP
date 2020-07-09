<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemBuffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_buffers', function (Blueprint $table) {
            $table->id();
            $table->string('Entry_No');
            $table->string('Item_No');
            $table->string('Item_Description');
            $table->string('Serial_No');
            $table->string('Lot_No');
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
        Schema::dropIfExists('item_buffers');
    }
}
