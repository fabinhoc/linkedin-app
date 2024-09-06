<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class FilterContent extends Model
{
    use HasFactory;

    protected $fillable = [
        'filter_history_id',
        'browser_history_id',
    ];

    public function filterHistory(): BelongsTo
    {
        return $this->belongsTo(FilterHistory::class);
    }

    public function browserHistories(): BelongsTo
    {
        return $this->belongsTo(BrowserHistory::class);
    }
}
