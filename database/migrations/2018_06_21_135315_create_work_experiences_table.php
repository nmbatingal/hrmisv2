<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicant_work_experiences', function (Blueprint $table) {
            $table->increments('id');
            $table->string('position');
            $table->string('agency');
            $table->char('salary_grade', 3)->nullable();
            $table->date('from_date')->nullable();
            $table->date('to_date')->nullable();
            $table->char('applicant_id', 36)->index();
            // $table->timestamps();

            $table->foreign('applicant_id')
                ->references('id')
                ->on('users')
                ->onUpdate('cascade')
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
        Schema::dropIfExists('applicant_work_experiences');
    }
}
