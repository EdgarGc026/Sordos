<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionsTable extends Migration{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){

        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('exam_id')->unsigned();

            $table->text('description');
            $table->text('iframe');
            $table->text('image')->nullable();
            
            $table->timestamps(); 

            $table->foreign('exam_id')->references('id')->on('exams');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::dropIfExists('questions');
    }
}
