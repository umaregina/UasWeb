<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    protected $fillable = ['nama', 'alamat', 'matakuliah', 'telp'];
    protected $primaryKey = 'id_dosen';
    protected $table = 'dosen';
}
