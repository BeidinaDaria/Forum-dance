<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;

class article extends Model
{
    protected $fillable=[
        'title',
        'text',
        'image',
        'date of publishing'
    ];
    public function getSlugOptions():SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }
    public static function add(array $input){
        $article=new static;
        $article->fill($input);
        $article->save();
        return $article;
    }
    public function getPublishStatus(){
        if ($this->is_published){
            return '<p style="color:red;">Yes</p>';
        }
        return '<p style="color:red;">No</p>';
    }
}
