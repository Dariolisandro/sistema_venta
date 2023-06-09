<?php

namespace Modules\Client\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Sale\Entities\Sale;

class Cliente extends Model
{
    use HasFactory;
    protected $guarded =[];
    
    public function sales(){
        return $this->hasMany(Sale::class);
    }

    /*protected $fillable = [
        'name',     
        'phone',      
        'email',     
        'city',   
        'country', 
        'rut',
        'company',   
        'turn',    
    ];
    */
    
    protected static function newFactory()
    {
        return \Modules\Client\Database\factories\ClienteFactory::new();
    }
}
