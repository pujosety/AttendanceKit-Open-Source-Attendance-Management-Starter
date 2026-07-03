<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Attendance extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'type',
        'latitude',
        'longitude',
        'address',
        'photo_url',
        'device_info',
        'status',
        'note',
        'ip_address',
    ];

    protected $casts = [
        'latitude' => 'float',
        'longitude' => 'float',
        'device_info' => 'array',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
