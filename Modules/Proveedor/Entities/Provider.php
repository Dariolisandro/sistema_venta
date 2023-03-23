<?php

namespace Modules\Proveedor\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Provider extends Model
{
    use HasFactory;
    protected $guarded [];

    /*protected $fillable = [
        'name','email','rut','address','phone','giro','razonSocial'
    ];*/
    public function products(){
        return $this->hasMany(Producto::class);

    }
    
    protected static function newFactory()
    {
        return \Modules\Proveedor\Database\factories\ProviderFactory::new();
    }
}
