<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orphelin extends Model
{
  use HasFactory;
  protected $fillable = [
    'idTypeCas',
    'idZone',
    'nom',
    'nomMere',
    'adresse',
    'CINMere',
    'telephone',
    'dateNaissance',
    'dateDecesPere',
    'niveauScolaire',
    'tailleChemise',
    'pointure',
    'observations',
    'idImage',
  ];

  public function zone()
  {
    return $this->belongsTo(Zone::class, 'idZone');
  }

  public function typeCas()
  {
    return $this->belongsTo(TypeCas::class, 'idTypeCas');
  }

  public function parrainages()
  {
    return $this->hasMany(Parrainage::class, 'idOrphelin');
  }

  public function image()
  {
    return $this->belongsTo(Image::class, 'idImage');
  }
}