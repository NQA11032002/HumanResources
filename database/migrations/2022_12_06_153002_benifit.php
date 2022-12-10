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
        // Schema::create("benifit", function (Blueprint $table) {
        //     $table->increments("id")->unsigned();
        //     $table->integer("id_company")->unsigned();
        //     $table->string("name");

        //     $table->foreign("id_company")->references("id")->on("infor_company");
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("benifit");
    }
};