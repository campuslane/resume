<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResumeSections extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resume_sections', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('resume_id');
            $table->integer('sort')->default(0);
            $table->string('type');
            $table->string('title');
            $table->softDeletes();
            $table->timestamps();

            $table->index('resume_id');
            $table->index('sort');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('resume_sections');
    }
}
