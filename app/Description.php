<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Article;

class Description extends Model
{
    protected $fillable = ['article_id', 'section', 'body', 'video'];
    protected $tables = 'descriptions';
    protected $hidden = ['create_at', 'updated_at'];

    public function article() {
        return $this->belongsTo(Article::class);
    }

}
