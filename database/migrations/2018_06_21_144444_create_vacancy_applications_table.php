<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVacancyApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('position_vacancy_applications', function (Blueprint $table) {
            $table->increments('id');
            $table->char('position_id', 36)->index();
            $table->char('applicant_id', 36)->index();
            $table->timestamp('interview_on')->nullable();
            $table->timestamp('interviewed_at')->nullable();
            $table->timestamps();

            $table->foreign('position_id')
                ->references('id')
                ->on('position_vacancies')
                ->onUpdate('cascade')
                ->onDelete('cascade');

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
        Schema::dropIfExists('position_vacancy_applications');
    }
}
