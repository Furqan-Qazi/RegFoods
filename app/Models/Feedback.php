<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;


            protected $table = 'feedbacks';

    protected $primaryKey = 'feedback_id';


     protected $fillable = [
        'user_id',
        'name',
        'email',
        'feedback',
    ];

     public function user()
    {
        return $this->belongsTo(User::class);
    }

}
