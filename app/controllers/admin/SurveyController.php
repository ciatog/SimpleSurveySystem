<?php
namespace App\Controllers\Admin;

use Controller;
use Exception;
use Input;
use Response;
use App\Libraries\SurveyQuestionService;

class SurveyController extends Controller
{
    public function update()
    {
        try {
            $questions = Input::all();
            (new SurveyQuestionService())->performMassUpdate($questions);
        } catch (Exception $e) {
            return Response::json($e->getMessage(), 400);
        }
    }
}
