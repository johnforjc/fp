<?php

namespace TestCentreGym;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    public function user(){
        return $this->belongsTo('TestCentreGym\User');
    }
    public function soal(){
        return $this->belongsTo('TestCentreGym\Soal');
    }
}
