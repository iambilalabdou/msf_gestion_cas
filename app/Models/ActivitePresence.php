<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActivitePresence extends Model
{
  use HasFactory;
  protected $fillable = ['membrePts'];

  public function membre()
  {
    return $this->belongsTo(Membre::class, 'idMembre');
  }

  public function activite()
  {
    return $this->belongsTo(Activite::class, 'idActivite');
  }
}