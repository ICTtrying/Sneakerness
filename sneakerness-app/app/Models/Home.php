<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model as Models;
use Illuminate\Validation\Rules\In;

class Home extends Models
{
    // If your table is not 'homes', uncomment and set:
    // protected $table = 'homepage_content';

    // Define fillable fields if using mass assignment
    protected $fillable = [
        'title', 'subtitle', 'banner_image', 'description'
    ];

    // Example: Fetch homepage content
    public static function getHomepageData()
    {
    return self::first();
    }
}
