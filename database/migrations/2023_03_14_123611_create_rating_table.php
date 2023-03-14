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
        Schema::create('ratings', function (Blueprint $table) {
            $table->uuid()->primary();
            $table->uuid("user_uuid");
            $table->uuid("psycologist_uuid");
            $table->smallInteger("rating");
            $table->string("comment");
            $table->foreign("user_uuid")->references("uuid")->on("users");
            $table->foreign("psycologist_uuid")->references("uuid")->on("psycologists");
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
        Schema::dropIfExists('rating');
    }
};
