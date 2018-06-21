<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEligibilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicant_eligibilities', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('license_number')->nullable();
            $table->decimal('rating', 5, 2)->nullable();
            $table->date('exam_date')->nullable();
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
        Schema::dropIfExists('applicant_eligibilities');
    }
}
