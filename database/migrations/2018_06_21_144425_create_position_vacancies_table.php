<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePositionVacanciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('position_vacancies', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('position_title');
            $table->char('acronym', 20)->nullable();
            $table->char('salary_grade', 3)->nullable();
            $table->integer('slot_available')->default(1);
            $table->boolean('_isVacant')->default(true);
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
        Schema::dropIfExists('position_vacancies');
    }
}
