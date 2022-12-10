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
        // Schema::create("certificate_personally", function (Blueprint $table) {
        //     $table->increments("id")->unsigned();
        //     $table->integer("id_education_perrsonally")->unsigned();
        //     $table->text("name");
        //     $table->text("certifycate_by");
        //     $table->date("date_from");
        //     $table->date("date_to");
        //     $table->boolean("date_forever");


        //     $table->foreign("id_education_perrsonally")->references("id")->on("education_personally");
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("certificate_personally");
    }
};