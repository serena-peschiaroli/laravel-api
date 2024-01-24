<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Project extends Model
{
    use HasFactory;
    protected $fillable= ['title', 'description', 'slug', 'repository_url' ];
    //mutaator
    public function setTitleAttribute($title){
        $this->attribute('title')->$title;
        $this->attribute('slug')->Str::slug($title, '-');
    }
}
