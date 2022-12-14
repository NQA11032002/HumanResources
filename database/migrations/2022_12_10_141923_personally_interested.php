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
        Schema::create("personally_interested", function ($table) {
            $table->increments("id")->unsigned();
            $table->integer('id_account')->unsigned();
            $table->integer('id_article')->unsigned();
            $table->timestamps();

            $table->foreign("id_account")->references("id")->on("account");
            $table->foreign("id_article")->references("id")->on("article_company");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
