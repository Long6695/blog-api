<?php

namespace App\Models;

use App\Concerns\Likes;
use App\Contracts\Likeable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model implements Likeable
{
    use HasFactory, Likes;

    protected $fillable = ['name'];
}
