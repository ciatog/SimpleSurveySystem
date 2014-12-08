<?php
namespace App\Models;

class SurveyQuestion extends \Eloquent
{
    const FREE_FORM_TYPE = "Free Form";
    const MULTIPLE_CHOICE_TYPE = "Multiple Choice";
    const YES_NO_TYPE = "Yes/No";

    protected $fillable = array("title", "choices");

    public function isFreeForm()
    {
        return $this->type === self::FREE_FORM_TYPE;
    }

    public function isMultipleChoice()
    {
        return $this->type === self::MULTIPLE_CHOICE_TYPE;
    }

    public function isYesNo()
    {
        return $this->type === self::YES_NO_TYPE;
    }

    public function parseChoices()
    {
        $temp = [];
        $choices = explode(",", $this->choices);
        foreach ($choices as $choice) {
            $temp[$choice] = $choice;
        }

        return $temp;
    }
}
