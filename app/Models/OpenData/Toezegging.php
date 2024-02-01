<?php

namespace App\Models\OpenData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Toezegging extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'toezeggingen';
}
