<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teammember extends Model
{
    use HasFactory;

       protected $table = 'team_members';

    protected $primaryKey = 'team_member__id';

    protected $fillable = [
        'name',
        'designation',
        'image',
    ];
}
