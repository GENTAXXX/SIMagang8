<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lowongan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama', 'deskripsi', 'tgl_mulai', 'tgl_selesai', 'lokasi', 'telepon', 'jumlah_mhs'
        // ,'id_skill', 'id_provinsi', 'id_kabupaten', 'id_mitra', 'id_kategori'
    ];
}
