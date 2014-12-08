<?php
namespace App\Controllers;

use Controller;
use Input;
use View;
use App\Models\SurveyQuestion;
use App\Models\CompletedSurvey;
use App\Libraries\Emailer;
use App\Libraries\GoogleLocationService;

class SurveyController extends Controller
{
	public function showNew()
	{
		return View::make(
			"Survey",
			[
				"questions" => SurveyQuestion::all(),
			]
		);
	}

	public function create()
	{
		$params = Input::all();

		$location = (new GoogleLocationService())->getLatLngForZipCode($params["zip_code"]);
		if (!empty($location)) {
			$params["lat"] = $location->lat;
			$params["lng"] = $location->lng;
		}

		$completedSurvey = CompletedSurvey::create($params);

		(new Emailer())->sendCompletedSurveyEmail($completedSurvey);

		return View::make("SurveySubmitted");
	}
}
