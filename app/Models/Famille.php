<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Famille extends Model
{
  use HasFactory;
  protected $fillable = [
    'idTypeCas',
    'idZone',
    'nomFamille',
    'adresse',
    'telephone',
    'situation',
    'CINPere',
    'CINMere',
    'ramed',
    'nbPersonne',
    'nbEnfants',
    'dateDistribution',
    'points',
    'observations'
  ];

  protected $primaryKey = 'idFamille';

  public function typeCas()
  {
    return $this->belongsTo(TypeCas::class, 'idTypeCas', 'idTypeCas');
  }

  public function zone()
  {
    return $this->belongsTo(Zone::class, 'idZone');
  }

  public function images()
  {
    return $this->belongsToMany(Image::class, 'famille_images', 'idFamille', 'idImage');
  }

  public function blacklist()
  {
    return $this->hasOne(Blacklist::class, 'idCas');
  }
}