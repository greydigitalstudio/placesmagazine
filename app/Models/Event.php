<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'description',
        'content',
        'recomended',
        'main_photo',
        'popular',
        'event_datetime',
        'endtime',
        'occasion',
        'min_guests',
        'max_guests',
        'transfer',
        'place',
        'checked',
        'pg',
        'address',
        'organizer_logo',
        'organizer_name',
    ];



    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'tag_event');
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_event');
    }
}
