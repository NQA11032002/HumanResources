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
        Schema::create("infor_company", function (Blueprint $table) {
            $table->increments("id")->unsigned();
            $table->integer("id_account")->unsigned();
            $table->integer("id_worktype")->unsigned();
            $table->integer("amount_staff");
            $table->string("name");
            $table->text("website");
            $table->string("taxid");
            $table->text("logo");
            $table->text("description");
            $table->text("link_video");
            $table->text("image_1");
            $table->text("image_2");
            $table->text("image_3");
            $table->integer("status");


            $table->foreign("id_account")->references("id")->on("account")->onDelete('cascade');
            $table->foreign("id_worktype")->references("id")->on("worktype_personally");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("infor_company");
    }
};
