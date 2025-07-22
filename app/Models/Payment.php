<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $table = 'payment_details';

    protected $primaryKey = 'payment__id';


protected $fillable = [
    'payment_id',
    'order_id',
    'card_holder_name',
    'card_number',
    'country',
    'payment_method',
    'payment_status',
];

}
