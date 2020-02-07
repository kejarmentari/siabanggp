<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SurveySelection extends Model
{
    public function selection()
    {
        return $this->belongsTo('App\Selection');
    }
}
