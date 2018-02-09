<?php

namespace App;
use App\Article;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    public function article()
    {
        return $this->belongsTo(Article::class);
    }
}
