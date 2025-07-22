<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $table = 'items';

    protected $primaryKey = 'item_id';

    protected $fillable = [
        'name',
        'price',
        'description',
        'image',
        'category_id',
    ];

       public function category()
    {
        return $this->belongsTo(Categorie::class, 'category_id', 'category_id');
    }
}
