<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    public function getTanggalFormatedAttribute($value)
    {
        $date = explode("-", $value);
        return $date[2] . '/' . $date[1] . '/' . $date[0];
    }

    public function selections()
    {
        return $this->belongsToMany(SurveySelection::class, 'survey_selections');
    }
}
