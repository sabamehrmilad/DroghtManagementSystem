<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ay extends Model
{
    use HasFactory;
    protected $table='ay';

    public function ay()
    {
        return $this->hasMany(main_table::class);
    }
}
