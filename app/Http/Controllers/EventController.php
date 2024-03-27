<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Services\MSGraphService;
use Carbon\Carbon;

class EventController
{

    public function index()
    {
        return view('events', [
            'events' => Event::where('start', '>', (new Carbon)->toDateString())->get(),
            'pastEvents' => Event::where('start', '<', (new Carbon)->toDateString())->orderByDesc('start')->get(),
        ]);
    }

    public function authorise()
    {
        return MSGraphService::authorise();
    }

    public function updateAllFromApi()
    {
        $token = MSGraphService::getToken();

        $endpoint = config('services.msgraph.endpoint');

        $response = \Illuminate\Support\Facades\Http::withToken($token)
            ->get("{$endpoint}/groups")->json();


        $group = collect($response['value'])->filter(fn($item) => $item['mail'] === 'caltest@stats4sd.org');

        $rmsId = $group->first()['id'];

        $eventsFromApi = \Illuminate\Support\Facades\Http::withToken($token)
            ->get("{$endpoint}/groups/{$rmsId}/calendar/events")
            ->
            json();

        foreach ($eventsFromApi['value'] as $event) {

            $event = Event::updateOrCreate([
                'id' => $event['id']
            ], [
                'all_day' => $event['isAllDay'] ?? false,
                'start' => $event['start']['dateTime'],
                'end' => $event['end']['dateTime'],
                'title' => $event['subject'],
                'body' => $event['bodyPreview'],
            ]);

        }

        return redirect('admin/event');
    }

}
