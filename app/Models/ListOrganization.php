<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ListOrganization extends Model
{
    protected $table = 'list_organizations';
    protected $fillable = [
        'title',
        'description',
        'image',
    ];
}
