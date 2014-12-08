<?php
namespace App\Models;

class CompletedSurvey extends \Eloquent
{
    protected $fillable = array("name", "email", "zip_code", "lat", "lng", "question_1_answer", "question_2_answer", "question_3_answer");
}
