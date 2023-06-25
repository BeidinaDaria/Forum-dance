<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\SlugOptions;

class Groups extends Model
{
    use HasFactory,HasSlug;
    protected $fillable=[
        'group'
    ];
    public function sportsmen(){
        return $this->belongsTo(Sportsmen::class);
    }
    public function getSlugOptions():SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('group')
            ->saveSlugsTo('slug');
    }
}
