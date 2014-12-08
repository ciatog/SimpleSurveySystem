<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompletedSurveysTable extends Migration
{
	public function up()
	{
		Schema::create("completed_surveys", function($table)
		{
			$table->increments("id");
			$table->string("name", 100);
			$table->string("email", 255);
			$table->string("zip_code");
			$table->string("lat");
			$table->string("lng");
			$table->text("question_1_answer");
			$table->string("question_2_answer");
			$table->string("question_3_answer");
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop("completed_surveys");
	}
}
