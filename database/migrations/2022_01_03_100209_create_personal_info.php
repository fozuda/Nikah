<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_info', function (Blueprint $table) {
            $table->id();
            $table->String('name', 64);
            $table->String('father_name', 64);
            $table->String('father_occupation', 64);
            $table->String('mother_name', 64);
            $table->String('mother_occupation', 64);
            $table->String('permanent_address', 256);
            $table->String('present_address', 256);
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
        Schema::dropIfExists('personal_info');
    }
}
