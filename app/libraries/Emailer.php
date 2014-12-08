<?php
namespace App\Libraries;

use Auth;
use Mail;

class Emailer
{
    const EMAIL_TO_ADDRESS = "EMAIL_TO_ADDRESS";
    const EMAIL_TO_NAME = "EMAIL_TO_NAME";

    public function sendCompletedSurveyEmail($completedSurvey)
    {
        Mail::send(
            "Emails.SurveySubmitted",
            ["completedSurvey" => $completedSurvey],
            function($message) {
                $message->to($_ENV[self::EMAIL_TO_ADDRESS], $_ENV[self::EMAIL_TO_NAME])->subject("Survey Submitted!");
            }
        );
    }
}
