<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    function getCategory() {
        return $this->hasOne('app\Models\Category','id','category_id');
    }
}
