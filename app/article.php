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
    public function uploadImage($file){
        if ($file == null) return false;
        $filename=$file->getClientOriginalName();
        $path='articles/article_'.$this->id.'/';
        $this->removeImage();
        $file->storeAs($path,$filename,'uploads');
        $this->image=$path.$filename;
        $this->save();
    }
    public function getImage(){
        $image=$this->image;
        return $image ? asset('uploads/'.$image):asset("assets/images/no_image.png");
    }
    public function removeImage(){
        if($this->image){
            Storage::disk("uploads")->delete($this->image);
            $this->image=null;
            $this->save();
        }
    }
}
