<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blacklist extends Model
{
    use HasFactory;
    protected $fillable = [
        'idCas',
        'raison',
        'imageId'
    ];

    protected $primaryKey = 'idCas';

    public function famille()
    {
        return $this->belongsTo(Famille::class, 'idCas');
    }
}