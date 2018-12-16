<?php

namespace TestCentreGym;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table='Posts';

    public $primaryKey='id';

    public $timestamps=true;
}
