<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ModelMaker extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'menu_maker_id', 'icon'];

    /**
     * Get the menuMaker that owns the ModelMaker
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function menuMaker(): BelongsTo
    {
        return $this->belongsTo(menuMaker::class);
    }

}
