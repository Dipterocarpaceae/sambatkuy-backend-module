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
        Schema::create('consult', function (Blueprint $table) {
            $table->uuid()->primary();
            $table->uuid("user_uuid");
            $table->uuid("schedule_uuid");
            $table->enum("status", ["proses", "setuju", "batal", "tunda"]);
            $table->foreign("user_uuid")->references("uuid")->on("users_credentials");
            $table->foreign("schedule_uuid")->references("uuid")->on("schedule");
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
        Schema::dropIfExists('consult');
    }
};
