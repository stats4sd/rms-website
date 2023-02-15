<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class EventType extends Model
{
    use CrudTrait;

    protected $table = 'event_types';
    protected $guarded = ['id'];

    public function events(): HasMany
    {
        return $this->hasMany(Event::class);
    }
}
