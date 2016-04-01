<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResumeJobs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resume_jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('itemable_id');
            $table->string('itemable_type');
            $table->integer('sort')->default(0);
            $table->string('company');
            $table->string('role')->nullable();
            $table->date('start_date');
            $table->date('end_date');
            $table->text('content');
            $table->text('content_after');
            $table->softDeletes();
            $table->timestamps();

            $table->index('itemable_id');
            $table->index('itemable_type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('resume_jobs');
    }
}
