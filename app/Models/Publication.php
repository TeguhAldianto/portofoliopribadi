<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    protected $fillable = [
        'title',
        'type',
        'issuer',
        'date',
        'url',
        'description',
    ];

    protected $casts = [
        'date' => 'date',
    ];

    /**
     * Scope for ordering by date (newest first)
     */
    public function scopeOrdered($query)
    {
        return $query->orderByDesc('date');
    }

    /**
     * Scope for filtering by type
     */
    public function scopeByType($query, $type)
    {
        return $query->where('type', $type);
    }

    /**
     * Get formatted date
     * 
     * @return string
     */
    public function getFormattedDateAttribute(): string
    {
        /** @var \Carbon\Carbon|null $date */
        $date = $this->date;

        return $date?->format('M Y') ?? 'N/A';
    }
}
