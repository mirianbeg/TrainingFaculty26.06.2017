<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeachersTable extends Migration
{
    public function up()
    {
          Schema::create('teachers', function (Blueprint $table) {
            $table->uuid('id');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email')->unique();;
            $table->date('dateOfBirth');
            $table->timestamps();
        });
    }

      public function down()
    {
        Schema::drop('teachers');
    }
}
