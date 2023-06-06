<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Propuesta extends Model
{
    use HasFactory;
    protected $table = 'propuestas';
    protected $fillable = ['documento'];
    public $timestamps = false;


    public function Estudiante(){
        return $this->belongsTo('App\Models\Estudiante');
    }
}
