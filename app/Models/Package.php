<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravolt\Indonesia\Models\City;
use Laravolt\Indonesia\Models\Province;

class Package extends Model
{
    use HasFactory;

    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }

    public function photographer()
    {
        return $this->belongsTo(Photographer::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function province()
    {
        return $this->belongsTo(Province::class);
    }
}
