<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'description', 'price', 'stock', 'picture'];

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }

    // Metode untuk mengurangi stok
    public function reduceStock($quantity)
    {
        $this->stock -= $quantity;
        $this->save();
    }
}

