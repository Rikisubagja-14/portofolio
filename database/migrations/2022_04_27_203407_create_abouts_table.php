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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('name_about');
            $table->string('desc_about',10000);
            $table->date('birthday');
            $table->string('website');
            $table->string('phone');
            $table->string('city');
            $table->integer('age');
            $table->string('deagree');
            $table->string('email');
            $table->string('caregory_freelance');
            $table->string('title',10000);
            $table->string('skill');
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
        Schema::dropIfExists('abouts');
    }
};
