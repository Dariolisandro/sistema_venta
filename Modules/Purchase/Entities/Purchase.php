<?php

namespace Modules\Purchase\Entities;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Proveedor\Entities\Provider;
use Modules\Purchase\Entities\PurchaseDetails;

class Purchase extends Model
{
    use HasFactory;
    protected $guarded [];
    

    /*protected $fillable = [
        'num_puchase',
        'provider_id',
        'user_id',
        'date',
        'tax',
        'total',
        'status',
        'picture',

    ];*/
    public function user(){
        return $this->belengsTo(User::class);
    }
    public function provider(){
        return $this->belengsTo(Provider::class);
    }
    public function purchaseDetails(){
        return $this->belengsTo(PurchaseDetails::class);
    }

    protected static function newFactory()
    {
        return \Modules\Purchase\Database\factories\PuchaseFactory::new();
    }
}
