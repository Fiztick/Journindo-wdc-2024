<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;

    public function island()
    {
        return $this->belongsTo(Island::class);
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }
}
