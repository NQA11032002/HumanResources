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
        Schema::create("article_personally", function (Blueprint $table) {
            $table->increments("id")->unsigned();
            $table->integer("id_personally")->unsigned();
            $table->integer("id_level")->unsigned();
            $table->string("id_city");
            $table->string("id_district");
            $table->string("experiences");
            $table->text("title");
            $table->double("salary_from");
            $table->double("salary_to");
            $table->string("salary_status");
            $table->text("form_working");
            $table->text("description");
            $table->integer("status")->unsigned();

            $table->foreign("id_personally")->references("id")->on("infor_personally");
            $table->foreign("id_level")->references("id")->on("level_personally");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("article_personally");
    }
};