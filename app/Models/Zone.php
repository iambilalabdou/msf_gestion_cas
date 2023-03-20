<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zone extends Model
{
  use HasFactory;
  protected $fillable = ['idZone'];

  public function familles()
  {
    return $this->hasMany(Famille::class, 'idZone');
  }

  public function orphelins()
  {
    return $this->hasMany(Orphelin::class, 'idZone');
  }
}