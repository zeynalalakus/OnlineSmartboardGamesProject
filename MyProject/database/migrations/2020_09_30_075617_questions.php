<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Questions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('SetName');
            $table->string('c1n');
            $table->string('c2n');
            $table->string('c3n');
            $table->string('c4n');
            $table->string('c5n');
            $table->string('c6n');
            $table->string('c1q1');
            $table->string('c1q2');
            $table->string('c1q3');
            $table->string('c1q4');
            $table->string('c1q5');
            $table->string('c2q1');
            $table->string('c2q2');
            $table->string('c2q3');
            $table->string('c2q4');
            $table->string('c2q5');
            $table->string('c3q1');
            $table->string('c3q2');
            $table->string('c3q3');
            $table->string('c3q4');
            $table->string('c3q5');
            $table->string('c4q1');
            $table->string('c4q2');
            $table->string('c4q3');
            $table->string('c4q4');
            $table->string('c4q5');
            $table->string('c5q1');
            $table->string('c5q2');
            $table->string('c5q3');
            $table->string('c5q4');
            $table->string('c5q5');
            $table->string('c6q1');
            $table->string('c6q2');
            $table->string('c6q3');
            $table->string('c6q4');
            $table->string('c6q5');
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
        Schema::dropIfExists('questions');
    }
}
