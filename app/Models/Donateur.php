<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donateur extends Model
{
  use HasFactory;
  protected $fillable = [
    'nomDonateur',
    'date',
    'telephone',
    'aPart',
    'nbOrphelins',
    'observations',
  ];

  public function parrainages()
  {
    return $this->hasMany(Parrainage::class, 'idDonateur');
  }
}