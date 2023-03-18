<?php

namespace Modules\Client\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',     
        'phone',      
        'email',     
        'city',   
        'country', 
        'rut',
        'company',   
        'turn',    
    ];
    
    protected static function newFactory()
    {
        return \Modules\Client\Database\factories\ClienteFactory::new();
    }
}
