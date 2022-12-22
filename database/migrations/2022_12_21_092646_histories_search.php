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
        Schema::create('histories_search', function (Blueprint $table) {
            $table->increments("id")->unsigned();
            $table->integer('id_account')->unsigned();
            $table->string('content');
            $table->timestamps();
            $table->foreign('id_account')->references('id')->on('account');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        schema::dropIfExists("histories_search");
    }
};