<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $fillable = ['id_dosen', 'nama_mahasiswa', 'no_telpon', 'smester', 'prodi' ,'alamat'];
    protected $primaryKey = 'id_mahasiswa';
    protected $table = 'mahasiswa';
    public function dosen()
    {
        return $this->belongsTo(Dosen::class, 'id_dosen');
    }
}
