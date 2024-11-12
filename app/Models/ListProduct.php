<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ListProduct extends Model
{
    protected $table = 'list_products';
    protected $fillable = [
        'title',
        'description',
        'image',
    ];
}
