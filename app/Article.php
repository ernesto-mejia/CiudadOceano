<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Description;

class Article extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $tables = 'articles';
    protected $hidden = ['create_at', 'updated_at'];

    public function descriptions() {
        return $this->hasMany(Description::class);
    }

}
