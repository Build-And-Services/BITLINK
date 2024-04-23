<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DinasLuarDaerah extends Model // Consider a more descriptive name
{
    use HasFactory;

    protected $table = 'akundinasnonnganjuk'; // Match the table name from the migration
    protected $primaryKey = 'id_akunm'; // Match the primary key from the migration
    protected $fillable = [
        'nama_instansi',
        'alamat_lengkap',
        'email',
        'telepon',
        'username',
        'password',
    ];
}
