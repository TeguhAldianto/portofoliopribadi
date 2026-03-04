<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * @property Carbon|null $start_date
 * @property Carbon|null $end_date
 */
class Experience extends Model
{
    protected $fillable = [
        'title',
        'company',
        'location',
        'start_date',
        'end_date',
        'description',
        'achievements',
        'type',
        'order',
    ];

    /**
     * Tentukan cast untuk atribut (Standar Laravel 11/12)
     */
    protected function casts(): array
    {
        return [
            'achievements' => 'array',
            'start_date' => 'date',
            'end_date' => 'date',
        ];
    }

    /**
     * Scope for ordering by date (newest first)
     */
    public function scopeOrdered($query)
    {
        return $query->orderBy('order')->orderByDesc('start_date');
    }

    /**
     * Scope for filtering by type
     */
    public function scopeByType($query, $type)
    {
        return $query->where('type', $type);
    }

    /**
     * Check if this is a current/ongoing experience
     */
    public function getIsCurrentAttribute(): bool
    {
        return $this->end_date === null;
    }

    /**
     * Menangani eror baris 50 & 51 (format tanggal)
     */
    public function getDateRangeAttribute(): string
    {
        // Gunakan Optional Chaining (?->) untuk keamanan jika data null
        $start = $this->start_date?->format('M Y') ?? 'N/A';

        if ($this->end_date === null) {
            return "{$start} - Present";
        }

        return "{$start} - " . $this->end_date->format('M Y');
    }

    /**
     * Menangani eror baris 71/72 (diffInMonths)
     */
    public function getDurationAttribute(): int
    {
        // Pastikan IDE tahu ini Carbon menggunakan type hinting lokal
        /** @var Carbon|null $start */
        $start = $this->start_date;

        /** @var Carbon $end */
        $end = $this->end_date ?? now();

        if (!$start)
            return 0;

        return (int) $start->diffInMonths($end);
    }
}