<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubjectjoinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subjectjoins', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('subject_jd');
            $table->unsignedBigInteger('teacher_id');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            $table->foreign('subject_jd')
                  ->references('id')
                  ->on('subjects')
                  ->onDelete('cascade');

            $table->foreign('teacher_id')
                  ->references('id')
                  ->on('teachers')
                  ->onDelete('cascade');

            $table->foreign('user_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade');

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subjectjoins');
    }
}
