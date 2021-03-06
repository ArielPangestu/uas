<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $fillable= ['name','deskripsi','price','category_id','image'];

    public function category()
    {
        $this->belongsTo(Category::class);
    }
}
