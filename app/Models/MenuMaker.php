<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MenuMaker extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    /**
     * Get all of the modelMaker for the MenuMaker
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function modelMaker(): HasMany
    {
        return $this->hasMany(modelMaker::class);
    }
}
