<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Exercise extends Model
{
    use HasFactory;

    public function sets(): HasMany
    {
        return $this->hasMany(Set::class);
    }

    public function bodyparts(): HasMany
    {
        return $this->hasMany(Bodypart::class);
    }
}
