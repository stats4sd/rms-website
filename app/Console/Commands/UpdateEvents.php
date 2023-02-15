<?php

namespace App\Console\Commands;

use App\Http\Controllers\EventController;
use App\Models\Event;
use Illuminate\Console\Command;

class UpdateEvents extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'event:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Queries the MS Graph API to get all events from the rms@stats4sd.org calendar';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        (new EventController())->updateAllFromApi();


        return Command::SUCCESS;
    }
}
