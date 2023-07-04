<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\SlugOptions;

class User extends Authenticatable
{
    use Notifiable,HasFactory,HasSlug;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','image'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getSlugOptions():SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }

    public function uploadImage($file){
        if ($file == null) return false;
        $filename=$file->getClientOriginalName();
        $path='users/user_'.$this->id.'/';
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
            File::deleteDirectory(public_path('uploads/user_'.$this->id));
            $this->image=null;
            $this->save();
        }
    }
}
