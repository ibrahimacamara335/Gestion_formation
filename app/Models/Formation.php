<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    use HasFactory;
    public function apprenants()
    {
        return $this->belongsToMany(Apprenant::class, 'apprenants_formations','formations_id', 'apprenants_id');
    }

    protected $fillable = [  'nom',  'code',  'duree', ];
}
