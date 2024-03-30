<?php

namespace App\Models;

use App\Events\PostRetrived;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'title',
        'content',
        'author',
        'status',
        'image',
        'custom_date',
        'descr_image',
    ];

    /**
     * The attributes that should be cast.
     */
    protected $casts = [
        'status' => 'boolean',
        'custom_date' => 'datetime',
    ];

    protected $dispatchesEvents = [
        'retrieved' => PostRetrived::class,
    ];

//    protected static function booted(): void
//    {
//        static::retrieved(function ($post) {
//            if (!$post->status) {
//                abort(404);
//            }
//        });
//    }
}
