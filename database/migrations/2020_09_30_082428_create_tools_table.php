<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateToolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tools', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('name')->nullable();
            $table->string('code')->nullable();
            $table->string('serial')->nullable();
            $table->string('image')->nullable();
            $table->string('category')->nullable();
            $table->string('unit')->nullable();
            $table->string('state')->nullable();
            $table->string('brand')->nullable();
            $table->decimal('cost')->nullable();
            $table->decimal('price')->nullable();
            $table->string('purchase_details')->nullable();
            $table->text('description')->nullable();
            $table->date('callibration')->nullable();
            $table->date('warranty')->nullable();

            $table->string('category_id')->nullable();
            $table->string('auth')->nullable();
            $table->string('brand_id')->nullable();
            $table->string('unit_id')->nullable();
            $table->string('comment')->nullable();
            $table->string('expected')->nullable();
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
        Schema::dropIfExists('tools');
    }
}
