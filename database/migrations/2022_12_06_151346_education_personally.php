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
        // Schema::create("education_personally", function (Blueprint $table) {
        //     $table->increments("id")->unsigned();
        //     $table->integer("id_personally")->unsigned();
        //     $table->text("school");
        //     $table->string("graduate_month");
        //     $table->string("graduate_year");
        //     $table->text("description");


        //     $table->foreign("id_personally")->references("id")->on("infor_personally");
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("education_personally");
    }
};