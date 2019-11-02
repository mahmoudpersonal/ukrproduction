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
            $table->unsignedInteger('area_id')->nullable();
            $table->unsignedInteger('subarea_id')->nullable();
            $table->unsignedInteger('locale_id')->nullable();
            $table->unsignedInteger('center_id')->nullable();
            $table->unsignedInteger('user_id')->nullable();
            $table->string('visit_type')->nullable();
            $table->date('examination_date')->nullable();
            $table->string('examination')->nullable();
            $table->text('radiological_form')->nullable();
            $table->text('previous_studies')->nullable();
            $table->text('technical_description')->nullable();
            $table->string('image')->nullable();
            $table->enum('priority', ['emergency', 'urgent', 'normal', 'deferred'])->nullable();
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
