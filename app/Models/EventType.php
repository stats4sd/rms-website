<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Backpack\CRUD\app\Models\Traits\SpatieTranslatable\HasTranslations;

class EventType extends Model
{
    use CrudTrait, HasTranslations;

    protected $table = 'event_types';
    protected $guarded = ['id'];
    protected $translatable = ['name', 'joining_instructions', 'registration_url'];

    public function events(): HasMany
    {
        return $this->hasMany(Event::class);
    }
}
