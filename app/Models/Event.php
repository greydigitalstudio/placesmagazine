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
    ];



    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'tag_event');
    }
}
