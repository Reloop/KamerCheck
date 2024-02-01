<?php

namespace App\Models\OpenData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agendapunt extends Model
{
    use HasFactory;

    protected $table = 'Agendapunten';
    public $timestamps = false;
}
