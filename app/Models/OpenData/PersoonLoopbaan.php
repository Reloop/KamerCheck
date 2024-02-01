<?php

namespace App\Models\OpenData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersoonLoopbaan extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'persoon_loopbanen';
}
