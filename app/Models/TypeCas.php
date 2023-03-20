<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeCas extends Model
{
  use HasFactory;
  protected $fillable = ['nomTypeCas'];

  public function familles()
  {
    return $this->hasMany(Famille::class, 'idTypeCas');
  }

  public function orphelins()
  {
    return $this->hasMany(Orphelin::class, 'idTypeCas');
  }
}