<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $fillable=['nama','deskripsi','harga','image','category_id'];

    public function category()
    {
        $this->belongsTo(Category::class);
    }
}
