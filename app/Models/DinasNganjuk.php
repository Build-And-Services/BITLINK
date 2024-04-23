<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DinasNganjuk extends Model
{
    use HasFactory;

    protected $table = 'akundinasnganjuk'; // Match the table name from the migration
    protected $primaryKey = 'id_akun'; // Match the primary key from the migration
    protected $fillable = [
        'nama_instansi',
        'alamat_lengkap',
        'email',
        'telepon',
        'username',
        'password',
    ];
}
