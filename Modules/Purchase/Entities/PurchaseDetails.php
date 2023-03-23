<?php

namespace Modules\Purchase\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Product\Entities\Producto;

class PurchaseDetails extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function purchase(){
        return $this->belongsTo(Purchase::class);
    }
    public function producto(){
        return $this->belongsTo(Producto::class);
    }

    protected static function newFactory()
    {
        return \Modules\Purchase\Database\factories\PuchaseDetailsFactory::new();
    }
}
