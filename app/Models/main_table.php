<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class main_table extends Model
{
    use HasFactory;

    protected $table = 'main_table';

    public function urun()
{
    return $this->belongsTo(Urun::class, 'Urun_id');
}

public function ay()
{
    return $this->belongsTo(ay::class,'Ay_id');
}

public function cikisdurumu()
{
    return $this->belongsTo(cikisdurumu::class,'cikisdurumu_id');
}

public function gelismebakim()
{
    return $this->belongsTo(gelismebakim::class,'gelismebakim_id');
}

public function iller()
{
    return $this->belongsTo(iller::class,'il_id');
}

public function ilceler()
{
    return $this->belongsTo(ilceler::class,'ilceler_id');
}

}
