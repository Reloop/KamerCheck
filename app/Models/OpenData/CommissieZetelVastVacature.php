<?php

namespace App\Models\OpenData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommissieZetelVastVacature extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'commissie_zetel_vaste_vacatures';
}
