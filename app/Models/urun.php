<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class urun extends Model
{
    use HasFactory;
    protected $table = 'urun';

    public function main_table()
    {
        return $this->hasMany(main_table::class);
    }
}
