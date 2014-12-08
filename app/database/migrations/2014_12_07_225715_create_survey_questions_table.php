<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSurveyQuestionsTable extends Migration
{
	public function up()
	{
		Schema::create("survey_questions", function($table)
		{
			$table->increments("id");
			$table->string("title", 250);
			$table->string("type");
			$table->text("choices");
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop("survey_questions");
	}
}
