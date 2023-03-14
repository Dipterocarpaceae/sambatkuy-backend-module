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
        Schema::create('psycologist', function (Blueprint $table) {
            $table->uuid();
            $table->string("front_title", 50);
            $table->string("name");
            $table->string("back_title", 50);
            $table->json("education");
            $table->string("specialist");
            $table->string("address");
            $table->char("no_str", 16);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('psycologist');
    }
};
