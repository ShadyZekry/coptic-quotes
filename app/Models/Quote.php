<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    use HasFactory;

    protected $fillable = ['quote', 'author_id', 'source_id'];

    function author()
    {
        return $this->belongsTo(Author::class);
    }

    function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    function source()
    {
        return $this->belongsTo(Source::class);
    }
}
