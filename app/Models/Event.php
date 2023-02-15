<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Event extends Model
{
    use HasFactory, CrudTrait;

    protected $primaryKey = 'id';
    protected $keyType = 'string';
    protected $guarded = [];

    protected $casts = [
        'all_day' => 'boolean',
        'start' => 'datetime',
        'end' => 'datetime',
    ];

    public function eventType(): BelongsTo
    {
        return $this->belongsTo(EventType::class);
    }

    public function eventResources(): HasMany
    {
        return $this->hasMany(EventResource::class);
    }
}
