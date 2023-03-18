<?php

namespace Modules\Category\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Product\Entities\Producto;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name','description',
    ];
    public function products(){
        return $this->hasMany(Producto::class);

    }
    
    protected static function newFactory()
    {
        return \Modules\Category\Database\factories\CategoryFactory::new();
    }
}
