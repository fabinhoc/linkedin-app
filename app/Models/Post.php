<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'filter_history_id',
        'title',
        'content',
        'image',
        'linkedin_post_id',
        'published_at',
    ];

    public function filterHistory(): BelongsTo
    {
        return $this->belongsTo(FilterHistory::class);
    }
}
