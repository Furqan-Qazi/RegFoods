<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $table = 'contacts';

    protected $primaryKey = 'coontact_id';


     protected $fillable = [
        'user_id',
        'name',
        'email',
        'comment',
        'phone',
        'subject',
        'message',
    ];


}
