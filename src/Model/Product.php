<?php


namespace App\Model;


use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}