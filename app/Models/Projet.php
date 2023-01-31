<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        "nom_projet",
        "description",
        "date_debut",
        "date_fin"
    ];
    public function phases()
    {
        return $this->hasMany(Phase::class);
    }
}
