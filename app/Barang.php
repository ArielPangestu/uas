<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $fillable = ['code', 'nama_barang', 'harga', 'stok', 'keterangan'];
}
