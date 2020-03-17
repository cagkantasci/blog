<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function articleCount() {
        return $this->hasMany('app\Models\Article','category_id','id')->count();
    }
}
