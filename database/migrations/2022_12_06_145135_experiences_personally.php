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
        // Schema::create("experiences_personally", function (Blueprint $table) {
        //     $table->increments("id")->unsigned();
        //     $table->integer("id_worktype")->unsigned();
        //     $table->integer("id_position")->unsigned();
        //     $table->string("company");
        //     $table->date("date_from");
        //     $table->date("date_to");
        //     $table->date("date_now");
        //     $table->text("description");

        //     $table->foreign("id_worktype")->references("id")->on("worktype_personally");
        //     $table->foreign("id_position")->references("id")->on("position");
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("experiences_personally");
    }
};