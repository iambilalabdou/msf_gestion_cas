<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
  use HasFactory;
  protected $fillable = ['imageFile'];

  public function familles()
  {
    return $this->belongsToMany(Famille::class, 'famille_images', 'idImage', 'idFamille');
  }
}