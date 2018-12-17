<?php

namespace TestCentreGym;

use Illuminate\Database\Eloquent\Model;

class Soal extends Model
{
    protected $table = 'soals';
    public $primaryKey = 'id';
    public $timestamps = true;

    public function soal(){
        return $this->belongsTo('TestCentreGym\Soal');
    }

    public function log(){
        return $this->hasMany('TestCentreGym\Log');
    }
}
