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
        Schema::create("infor_contact", function (Blueprint $table) {
            $table->increments("id")->unsigned();
            $table->integer("id_company")->unsigned();
            $table->integer("id_nationality")->unsigned();
            $table->string("id_city");
            $table->string("phone",12);
            $table->string("name");
            $table->string("position");
            $table->string("address");

            $table->foreign("id_company")->references("id")->on("infor_company");
            $table->foreign("id_nationality")->references("id")->on("nationality");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("infor_contact");
    }
};