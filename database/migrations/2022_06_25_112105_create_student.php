<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->integer("studID");
            $table->string('email')->unique();
            $table->string("firstName");
            $table->string("lastName");
            $table->string("MI");
            $table->string("course");
            $table->integer("yearLevel");
            $table->string("userLevel");
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('students');
    }
};