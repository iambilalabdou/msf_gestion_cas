<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parrainage extends Model
{
  use HasFactory;
  protected $fillable = [
    'idDonateur',
    'idOrphelin',
    'dateDebut',
    'dateFin',
    'banque',
    'cash',
    'observations',
  ];

  public function donateur()
  {
    return $this->belongsTo(Donateur::class, 'idDonateur');
  }

  public function orphelin()
  {
    return $this->belongsTo(Orphelin::class, 'idOrphelin');
  }

  public function suiviParrainage()
  {
    return $this->hasOne(SuiviParrainage::class, 'idParrainage');
  }
}