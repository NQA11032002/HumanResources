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
        Schema::create("infor_personally", function (Blueprint $table) {
            $table->increments("id")->unsigned();
            $table->integer("id_account")->unsigned();
            $table->integer("id_nationality")->unsigned();
            $table->string("id_city");
            $table->string("id_district");
            $table->integer("id_software_skill")->unsigned();
            $table->string("firstname");
            $table->string("lastname");
            $table->date("birthday");
            $table->integer("gender");
            $table->string("phone", 12);
            $table->text("address");
            $table->string("profession");
            $table->string("image");
            $table->integer("status_profile");

            $table->foreign("id_account")->references("id")->on("account")->onDelete('cascade');
            $table->foreign("id_nationality")->references("id")->on("nationality");
            $table->foreign("id_software_skill")->references("id")->on("software_skill_personally");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("infor_personally");
    }
};