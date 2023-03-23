<?php

namespace Modules\Product\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Category\Entities\Category;
use Modules\Proveedor\Entities\Provider;

class Producto extends Model
{
    use HasFactory;
    protected $guarded =[];
    public function category(){
        return $this->belongsTo(Category::class);

    }
    public function provider(){
        return $this->belongsTo(Provider::class);
    }

    /*protected $fillable = [

         'code',
        'name',
        'stock',
        'image',
        'sell_price', 
        'buy_price',
        'status',
        'category_id',
        'provider_id' ,
    ];
*/
    public function category(){
        return $this->belongsTo(Category::class);

    }
    public function provider(){
        return $this->belongsTo(Provider::class);
    }

    

    protected static function newFactory()
    {
        return \Modules\Product\Database\factories\ProductoFactory::new();
    }
}
