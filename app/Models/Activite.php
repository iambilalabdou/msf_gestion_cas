<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activite extends Model
{
  use HasFactory;
  protected $fillable = [
    'chefProjet',
    'dateActivite',
    'location',
    'observations',
  ];

  public function membres()
  {
    return $this->belongsToMany(Membre::class, 'activite_presences', 'idActivite', 'idMembre')->withPivot('membrePts');
  }
}