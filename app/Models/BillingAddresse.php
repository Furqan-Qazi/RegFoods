<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BillingAddresse extends Model
{
    use HasFactory;

    protected $table = 'billing_addresses';

    protected $primaryKey = 'billing_addresse_id';


     protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'company_name',
        'street_address',
        'apartment_suite',
        'city',
        'state',
        'zip',
        'phone',
        'email',
        'additional_info',
    ];

      public function user()
    {
        return $this->belongsTo(User::class);
    }

}
