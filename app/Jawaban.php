<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jawaban extends Model
{
    protected $table = 'jawaban';
    protected $fillable = ['answer','pertanyaan_id'];
    
    public function pertanyaan(){
        return $this->belongsTo(Pertanyaan::class);
    }
}
