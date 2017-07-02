<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    
    public function up()
    {
          Schema::create('students', function (Blueprint $table) {
            $table->uuid('id');
            $table->string('firstname');
            $table->string('lastname');
            $table->bigInteger('personalID')->unique();
            $table->enum('gender', ['male', 'female']);
            $table->string('email');
            $table->date('dateOfBirth');
            $table->timestamps();
        });
    }

      public function down()
    {
        Schema::drop('students');
    }
}
