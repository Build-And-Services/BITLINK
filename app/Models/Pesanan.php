<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;

    protected $table = 'pesanan';
    protected $guarded = ['id'];

    public function pembeli()
    {
        return $this->belongsTo(DataAkunProdusen::class, 'id_user', 'id');
    }
    public function benih()
    {
        return $this->belongsTo(BenihData::class, 'id_benih', 'id_benih');
    }
}
