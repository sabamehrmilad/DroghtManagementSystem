<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cikisdurumu extends Model
{
    use HasFactory;

    protected $table='cikisdurumu';

    public function main_table()
    {
        return $this->hasMany(main_table::class);
    }
}
