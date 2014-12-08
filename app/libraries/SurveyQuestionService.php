<?php
namespace App\Libraries;

use App\Models\SurveyQuestion;

class SurveyQuestionService
{
    public function performMassUpdate($questions)
    {
        foreach ($questions as $question) {
            $temp = SurveyQuestion::find($question["id"]);
            $temp->fill($question);
            $temp->save();
        }
    }
}
