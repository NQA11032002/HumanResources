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
        // Schema::create("histories_used", function (Blueprint $table) {
        //     $table->increments("id")->unsigned();
        //     $table->integer("id_company")->unsigned();
        //     $table->integer("id_categories_used")->unsigned();
        //     $table->date("date_used");
        //     $table->string("role_used");

        //     $table->foreign("id_company")->references("id")->on("infor_company");
        //     $table->foreign("id_categories_used")->references("id")->on("categories_used");
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("histories_used");
    }
};