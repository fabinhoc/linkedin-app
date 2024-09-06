<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class BrowserHistory extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'url',
        'visit_date',
        'visit_count',
    ];

    public function filterHistories(): HasMany
    {
        return $this->hasMany(FilterHistory::class);
    }
}
