<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company', 50);
            $table->string('departure_station', 30);
            $table->date('departure_date', 30);
            $table->time('departure_time');
            $table->string('arrival_station');
            $table->date('arrival_date');
            $table->time('arrival_time');
            $table->string('train_code',20);
            $table->tinyInteger('carriages_number')->unsigned;;
            $table->float('ticket_price', 5,2);
            $table->boolean('in_time')->default(true);
            $table->boolean('canceled')->default(0);
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
        Schema::dropIfExists('trains');
    }
}
