<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitiesTable extends Migration
{
    public function up()
    {
        Schema::create('cities', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('district_id');
            $table->string('name_en', 45)->nullable();
            $table->string('name_si', 45)->nullable();
            $table->string('name_ta', 45)->nullable();
            $table->string('sub_name_en', 45)->nullable();
            $table->string('sub_name_si', 45)->nullable();
            $table->string('sub_name_ta', 45)->nullable();
            $table->string('postcode', 15)->nullable();
            $table->double('latitude')->nullable();
            $table->double('longitude')->nullable();
            $table->timestamps();

            $table->foreign('district_id')->references('id')->on('districts')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('cities');
    }
}
