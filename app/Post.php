<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'content',
        'published_at',
    ];

    public static function getUniqueSlug($title) {

        $slug = Str::slug($title);

        $slug_first = $slug;

        $i = 1;

        $duplicate_post = Post::where('slug',$slug)->first();

        while($duplicate_post) {

            $slug = $slug_first . '-' . $i;
            $i++;
            $duplicate_post = Post::where('slug',$slug)->first();

        }

        return $slug;
    }
}
