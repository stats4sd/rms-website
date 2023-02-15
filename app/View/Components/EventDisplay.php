<?php

namespace App\View\Components;

use App\Models\Event;
use Illuminate\View\Component;

class EventDisplay extends Component
{

    public function __construct(
        public Event $event,
        public ?bool $isPast = false
    ){}





    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.event-display');
    }
}
