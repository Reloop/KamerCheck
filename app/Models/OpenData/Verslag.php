<?php

namespace App\Models\OpenData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Verslag extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'verslagen';
}
