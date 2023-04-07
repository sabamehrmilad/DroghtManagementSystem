<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ilceler extends Model
{
    use HasFactory;
    public function Ilceler()
    {
        return $this->hasMany(Ilceler::class,'il_id')
    }
}
