<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Island extends Model
{
    use HasFactory;

    public function regions(): HasMany
    {
        return $this->hasMany(Region::class);
    }
    
    public function images()
    {
        return $this->hasManyThrough(Image::class, Region::class);
    }
}
