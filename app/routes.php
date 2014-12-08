<?php

Route::get(
	"/survey",
	"App\\Controllers\SurveyController@showNew"
);

Route::match(
	["POST"],
	"/survey",
	"App\\Controllers\\SurveyController@create"
);

Route::get(
	"/admin",
	[
		"before" => "auth.basic",
		"uses" => "App\\Controllers\\Admin\\MainController@index"
	]
);

Route::match(
	["POST"],
	"/admin/survey",
	[
		"before" => "auth.basic",
		"uses" => "App\\Controllers\\Admin\\SurveyController@update"
	]
);
