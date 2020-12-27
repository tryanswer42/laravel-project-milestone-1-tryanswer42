<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

 protected $fillable =['titel', 'description','img','viewable'];
    //protected $garded = []; laravel don't protect for multiple creat
    public function view(){
        $this->viewable =true;
        $this->save();
    }

    public function getPartialText(){
       $partialString = Str::of($this->description)->limit(20);
       return $partialString;
    }

    public function tags(){
        return $this->belongsToMany(Tag::class)->withTimestamps();
    }
}
