<?php

namespace App\Models;

use App\Casts\Point;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class MarkerData extends Model
{
    use HasFactory, SoftDeletes;

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
        'geom' => Point::class,
    ];

    public function files(): MorphMany
    {
        return $this->morphMany(File::class, 'model');
    }
}
