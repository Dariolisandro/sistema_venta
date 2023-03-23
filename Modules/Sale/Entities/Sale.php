<?php

namespace Modules\Sale\Entities;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Client\Entities\Cliente;

class Sale extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function client(){
        return $this->belongsTo(Cliente::class);
    }
    public function saledetails(){
        return $this->belongsTo(Sale_details::class);
    }

    /*protected $fillable = [
        'num_sale',
        'client_id',
        'user_id',
        'date',
        'tax',
        'total',
        'status',
    ];*/

    protected static function newFactory()
    {
        return \Modules\Sale\Database\factories\SaleFactory::new();
    }
}
