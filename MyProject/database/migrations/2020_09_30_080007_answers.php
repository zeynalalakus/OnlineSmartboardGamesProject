<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Answers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('SetName');
            $table->string('c1a1');
            $table->string('c1a2');
            $table->string('c1a3');
            $table->string('c1a4');
            $table->string('c1a5');
            $table->string('c2a1');
            $table->string('c2a2');
            $table->string('c2a3');
            $table->string('c2a4');
            $table->string('c2a5');
            $table->string('c3a1');
            $table->string('c3a2');
            $table->string('c3a3');
            $table->string('c3a4');
            $table->string('c3a5');
            $table->string('c4a1');
            $table->string('c4a2');
            $table->string('c4a3');
            $table->string('c4a4');
            $table->string('c4a5');
            $table->string('c5a1');
            $table->string('c5a2');
            $table->string('c5a3');
            $table->string('c5a4');
            $table->string('c5a5');
            $table->string('c6a1');
            $table->string('c6a2');
            $table->string('c6a3');
            $table->string('c6a4');
            $table->string('c6a5');
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('answers');
    }
}
