<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('houses', function (Blueprint $table) {
            $table->id();
            $table->string('name', 60);
            $table->text('description');
            $table->string('address', 60)->nullable();
            $table->string('city', 100);
            $table->tinyInteger('rooms');
            $table->integer('mq');
            $table->tinyInteger('level');
            $table->string('photo')->nullable();
            $table->boolean('is_rent')->default(true);
            $table->boolean('is_sale')->default(false);
            $table->decimal('price');
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
        Schema::dropIfExists('houses');
    }
}
