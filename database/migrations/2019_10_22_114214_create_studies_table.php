<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('patient_id');
            $table->unsignedInteger('area_id');
            $table->unsignedInteger('subarea_id');
            $table->unsignedInteger('locale_id');
            $table->unsignedInteger('center_id');
            $table->unsignedInteger('team_id');
            $table->string('visit_type');
            $table->date('examination_date');
            $table->string('examination');
            $table->text('radiological_form');
            $table->text('previous_studies');
            $table->text('technical_description');
            $table->string('image');
            $table->enum('priority', ['emergency', 'urgent', 'normal', 'deferred']);
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
        Schema::dropIfExists('studies');
    }
}
