<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImmovablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('immovables', function (Blueprint $table) {
            $table->id();
            $table->string("number");
            $table->integer("quarter_id");
            $table->integer("category_id")->nullable();
            $table->integer("client_id");
            $table->integer("status_id")->default(0);
            $table->string("title");
            $table->integer("surface")->default(0);
            $table->bigInteger("price")->default(0);
            $table->json("pictures")->nullable();
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
        Schema::dropIfExists('immovables');
    }
}
