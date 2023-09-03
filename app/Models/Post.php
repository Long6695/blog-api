<?php

namespace App\Models;

use App\Concerns\Likes;
use App\Contracts\Likeable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Post extends Model implements Likeable
{
    use HasFactory, Likes;

    public const ADMIN_TYPE = 1;
    public const USER_TYPE = 2;

    protected $fillable = ['title', 'content', 'slug', 'type', 'image', 'userId', 'categoryId'];

    public function user()
    {
        return $this->belongsTo(User::class, 'useId');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'categoryId');
    }

    public static function getPostTypes()
    {
        return [
            Post::ADMIN_TYPE,
            Post::USER_TYPE
        ];
    }
}
