<?php

namespace App\Models;

use Maize\Markable\Markable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Maize\Markable\Models\Bookmark;

class Project extends Model
{
    use HasFactory, Markable;

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
}
