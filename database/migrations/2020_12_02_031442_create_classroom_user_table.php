<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassroomUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classroom_user', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('classroom_id');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            $table->foreign('classroom_id')->references('id')->on('classrooms')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('classroom_user');
    }
}
