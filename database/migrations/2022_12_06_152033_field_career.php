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
        Schema::create("field_career", function (Blueprint $table) {
            $table->increments("id")->unsigned();
            $table->integer("id_career")->unsigned();
            $table->string("name");

            $table->foreign("id_career")->references("id")->on("categories_career");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("field_career");
    }
};
