<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

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

    public function getTanggalIndoAttribute()
    {
        $date = Carbon::parse($this->tanggal);
        return to_indo_day($date->copy()->format('N')) .', '. to_indo_date($this->tanggal, 1);
    }
}
