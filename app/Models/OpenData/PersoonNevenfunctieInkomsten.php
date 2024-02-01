<?php

namespace App\Models\OpenData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersoonNevenfunctieInkomsten extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'persoon_nevenfunctie_inkomsten';
}
