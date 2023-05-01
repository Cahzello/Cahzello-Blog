<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Symfony\Component\CssSelector\Node\FunctionNode;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    // protected $fillable = ['title', 'excerpt', 'body', 'code'];
    protected $guarded = ['id'];
    protected $with = ['category', 'author'];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function author(){
        return $this->belongsTo(User::class, 'user_id');
    }

}
