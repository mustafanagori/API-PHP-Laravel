<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student', function (Blueprint $table) {
            $table->id('student_id'); //student Id
            $table->String('student_name', 60);
            $table->String('student_address',60)->nullable;
            $table->boolean('student_status')->default(false);
            $table->date("dateOfBirth")->NULL;
            $table->integer('rating')->default(2);

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
        Schema::dropIfExists('student');
    }
};
