<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Book;
use Carbon\Carbon;

class Book extends Model
{
    use HasFactory;

    protected $table = "boooks";
    protected $fillable = [
        'title',
        'author',
        'description',
        'isbn',
        'published',

    ];

    
    protected $appends = ['title', 'published', ];

    public function getTitleAttribute()
    {
        return $this->title;
    }

    public function getPublishedAttribute()
     {
         $published = $this->attributes['published'];
         if($published){
             return Carbon::parse($published)->format('Y');
         }
         return ' ';
     }

}
