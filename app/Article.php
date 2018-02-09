<?php

namespace App;
use App\Comments;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public function comments()
    {
        return $this->hasMany(Comments::class);
    }
}
