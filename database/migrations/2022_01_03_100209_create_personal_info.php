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
            $table->string('name', 64);
            $table->string('father_name', 64);
            $table->string('father_occupation', 64);
            $table->string('mother_name', 64);
            $table->string('mother_occupation', 64);
            $table->string('permanent_address', 255);
            $table->date('date_of_birth');
            $table->integer('height_ft');
            $table->integer('height_inch');
            $table->integer('weight');
            $table->String('complexion', 64);
            $table->enum('blood_group', ['A+', 'A-', 'O+', 'O-', 'B+', 'B-', 'AB+', 'AB-']);
            $table->enum('majhab', ['Hanafi', 'Shafeyi', 'Maleki', 'Hamboli', 'Others']);
            $table->text('educational_qualification');
            $table->String('occupation');
            $table->enum('maritual_status', ['Single', 'Widowed', 'Separated', 'Divorced', 'Married']);
            $table->text('political_view');
            $table->longText('about_yourself');
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
