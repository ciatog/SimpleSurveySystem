<?php

use App\Models\SurveyQuestion;

class DatabaseSeeder extends Seeder
{
	public function run()
	{
		Eloquent::unguard();

		DB::table("users")->delete();

		User::create(["email" => "keith.webster@gmail.com", "name" => "Keith Webster", "password" => '$2y$10$welFDbfxGd1C3zTca0RV6.EUDQotLCPIqKs7g8MoeNU0IRSpIN52m']);

		DB::table("survey_questions")->delete();

		SurveyQuestion::create(["id" => 1, "title" => "", "type" => "Free Form", "choices" => ""]);
		SurveyQuestion::create(["id" => 2, "title" => "", "type" => "Multiple Choice", "choices" => ""]);
		SurveyQuestion::create(["id" => 3, "title" => "", "type" => "Yes/No", "choices" => ""]);

		DB::table("completed_surveys")->delete();
	}
}
