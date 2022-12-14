<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'code_pr',
        'name_pr',
        'description_pr',
        'image',
        'price',
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

}