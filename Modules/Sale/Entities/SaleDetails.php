<?php

namespace Modules\Sale\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Product\Entities\Producto;

class Sale_details extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function product(){
        return $this->belongsTo(Producto::class);
    }

    /*protected $fillable = [
        'sale_id',
        'product_id',
        'quantity',
        'discount',
        'price',
    ];*/
    protected static function newFactory()
    {
        return \Modules\Sale\Database\factories\SaleDetailsFactory::new();
    }
}
