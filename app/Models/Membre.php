<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membre extends Model
{
  use HasFactory;
  protected $fillable = [
    'nomPrenomMembre',
    'CIN',
    'dateNaissance',
    'adresse',
    'telephone',
    'profession',
    'dateEntree',
    'dateSortir',
    'idImage',
  ];

  public function activites()
  {
    return $this->belongsToMany(Activite::class, 'activite_presences', 'idMembre', 'idActivite')->withPivot('membrePts');
  }

  public function image()
  {
    return $this->belongsTo(Image::class, 'idImage');
  }
}