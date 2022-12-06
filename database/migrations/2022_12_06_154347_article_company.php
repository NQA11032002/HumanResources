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
        Schema::create("article_company", function (Blueprint $table) {
            $table->increments("id")->unsigned();
            $table->integer("id_fields_career")->unsigned();
            $table->integer("id_worktype")->unsigned();
            $table->integer("id_benefit")->unsigned();
            $table->integer("id_level")->unsigned();
            $table->integer("id_address_work")->unsigned();
            $table->string("id_city");
            $table->text("title");
            $table->text("request");
            $table->integer("status_address");
            $table->double("salary_from");
            $table->double("salary_to");
            $table->integer("status_salary");
            $table->date("date_accept_profile");
            $table->integer("gender");
            $table->integer("age_from");
            $table->integer("age_to");
            $table->integer("experience");
            $table->text("description_work");
            $table->text("description_other");
            $table->integer("status");

            $table->foreign("id_fields_career")->references("id")->on("field_career");
            $table->foreign("id_worktype")->references("id")->on("worktype_personally");
            $table->foreign("id_benefit")->references("id")->on("benifit");
            $table->foreign("id_level")->references("id")->on("level_personally");
            $table->foreign("id_address_work")->references("id")->on("address_work");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("article_company");
    }
};