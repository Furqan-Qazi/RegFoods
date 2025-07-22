<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';

    protected $primaryKey = 'order_id'; // ✅ FIXED

    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'user_id',
        'total_amount',
        'status',
    ];

    public function orderItems()
{
    return $this->hasMany(OrderItem::class, 'order_id');
}

public function billingAddress()
{
    return $this->hasOne(BillingAddresse::class, 'user_id', 'user_id')
                ->latest('billing_addresse_id'); // 👈 specify primary key
}

public function user()
{
    return $this->belongsTo(User::class, 'user_id');
}


}
