<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apprenant extends Model
{
    use HasFactory;
    public function formations()
    {
        return $this->belongsToMany(Formation::class, 'apprenants_formations', 'apprenants_id', 'formations_id');
    }

    protected $fillable = [
        'matricule',
        'nom',
        'prenom',
        'niveau',
    ];
}
