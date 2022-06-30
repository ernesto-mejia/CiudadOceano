<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SectionImage extends Model
{
    protected $dates = ['deleted_at'];
    protected $tables = 'section_images';
    protected $hidden = ['create_at', 'updated_at'];
}
