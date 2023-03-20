<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuiviParrainage extends Model
{
  use HasFactory;
  protected $fillable = [
    'idParrainage',
    'mois1',
    'mois2',
    'mois3',
    'mois4',
    'mois5',
    'mois6',
    'mois8',
    'mois9',
    'mois10',
    'mois11',
    'mois12',
  ];

  public function parrainage()
  {
    return $this->belongsTo(Parrainage::class, 'idParrainage');
  }
}