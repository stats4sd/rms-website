<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class EventResource extends Model
{
    use CrudTrait;

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
