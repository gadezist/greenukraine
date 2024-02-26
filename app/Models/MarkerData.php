<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class MarkerData extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'id',
        'name',
        'address',
        'land_area',
        'soil',
        'crops',
        'damage',
        'geom',
        'expert_report',
        'level_of_damage',
    ];

    protected $casts = [
        'geo_json' => 'json',
    ];

    public function files(): MorphMany
    {
        return $this->morphMany(File::class, 'model');
    }
}
