<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stocks', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('transferer')->nullable();
            $table->integer('user_id')->nullable();
            $table->string('toolkit_id')->nullable();
            $table->string('warehouse')->nullable();
            $table->string('job_card')->nullable();
            $table->text('description')->nullable();
            $table->string('start_mileage')->nullable();
            $table->string('stop_mileage')->nullable();
            $table->string('vehicle')->nullable();
            $table->string('supplier')->nullable();
            $table->string('invoice')->nullable();
            $table->string('lpo')->nullable();
            $table->string('tools')->nullable();
            $table->decimal('quantities')->nullable();
            $table->string('status')->nullable();


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
        Schema::dropIfExists('stocks');
    }
}
