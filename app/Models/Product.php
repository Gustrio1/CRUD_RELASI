<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    protected $table = 'product';
    protected $fillable = ['nama_product', 'harga_product', 'stok_product', 'deskripsi_product', 'gambar_product'];
}
