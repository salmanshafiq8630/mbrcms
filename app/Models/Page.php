<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    protected $fillable = ['parent_id', 'slug', 'title', 'content'];

    public function childs() {
        return $this->hasMany('App\Models\Page','parent_id','id') ;
    }

}
