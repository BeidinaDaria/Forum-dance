<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\SlugOptions;

class Sportsmen extends Model
{
    use HasFactory,HasSlug;
    protected $fillable=[
        'name','age','class of masterpiece','sports category','exp date of category','exp date of med',
        'roleid','image',
    ];
    public function groups(){
        return $this->belongsTo(Groups::class);
    }
    public function getSlugOptions():SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }
}
