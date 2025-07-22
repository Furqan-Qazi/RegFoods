<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $table = 'blogs';

    protected $primaryKey = 'blog_id';


     protected $fillable = [
        'user_id',
        'item_id',
        'title',
        'slug',
        'content',
        'image',

    ];

  public function user()
{
    return $this->belongsTo(User::class, 'user_id');
}


  public function item()
    {   
        return $this->belongsTo(Item::class, 'item_id');
    }

}
