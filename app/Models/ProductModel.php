<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    use HasFactory;

    protected $table = 'product';
    protected $fillable = ['code', 'name', 'brand', 'uom', 'purchase_price', 'selling_price'];

    public function stock()
    {
        return $this->hasOne(ProductStockModel::class, 'product_code', 'code');
    }
}
