<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    protected $table = 'subcategory';

    protected $fillable = [
       'name', 'category_id'
    ];
}
