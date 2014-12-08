<?php
namespace App\Controllers\Admin;

use Controller;
use View;
use App\Models\SurveyQuestion;
use App\Models\CompletedSurvey;
use App\Libraries\ModelJsonEncoder;

class MainController extends Controller
{
    public function index()
    {
        $encoder = new ModelJsonEncoder();

        return View::make(
            "Admin.MainIndex",
            [
                "surveyQuestions" => $encoder->encode(SurveyQuestion::all()),
                "completedSurveys" => $encoder->encode(CompletedSurvey::all())
            ]
        );
    }
}
