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
        Schema::create('professional_experiences', function (Blueprint $table) {
            $table->id();
            $table->string('name_position');
            $table->string('company');
            $table->date('date_of_entry');
            $table->date('out_date');
            $table->string('title_1',500);
            $table->string('title_2',500);
            $table->string('title_3',500);
            $table->string('title_4',500);
            $table->string('title_5',500);
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
        Schema::dropIfExists('professional_experiences');
    }
};
