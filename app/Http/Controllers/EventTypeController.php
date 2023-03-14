<?php

namespace App\Http\Controllers;

use App\Models\EventType;

class EventTypeController extends Controller
{
    public function getJoiningInstructions(EventType $eventtype)
    {
        return $eventtype->only(['joining_instructions', 'registration_url']);
    }
}
