<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    //
    protected $table = 'pertanyaan';
    protected $fillable = ['title','description'];
}
