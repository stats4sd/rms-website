<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class EventResource extends Model
{
    use CrudTrait;

    protected $guarded = [];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
