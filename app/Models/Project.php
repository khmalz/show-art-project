<?php

namespace App\Models;

use Maize\Markable\Markable;
use Maize\Markable\Models\Bookmark;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use RyanChandler\Comments\Concerns\HasComments;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Project extends Model
{
    use HasFactory, Markable, HasComments, Sluggable;

    protected static $marks = [
        Bookmark::class,
    ];

    protected $fillable = [
        "user_id",
        "title",
        "description",
    ];

    public function developer(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function images(): HasMany
    {
        return $this->hasMany(Image::class, 'project_id');
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class, "project_tag");
    }

    public function getRouteKeyName(): string
    {
        return "slug";
    }

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
