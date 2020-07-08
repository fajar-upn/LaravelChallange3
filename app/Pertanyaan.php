<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    //
    protected $table = 'pertanyaan';
    protected $fillable = ['theme','description'];
    
    public function jawaban(){
        return $this->hasMany(Jawaban::class);
    }
}

