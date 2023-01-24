<?php

namespace App\Http\Controllers;

use App\Models\Event;

class EventController
{

    public function index()
    {
        return view('calendar', ['events' => Event::all()]);
    }


    public function update()
    {
        $token = cache()->get('azure_token');
        $endpoint = config('services.msgraph.endpoint');

        $response = \Illuminate\Support\Facades\Http::withToken($token)
            ->get( "{$endpoint}/groups")->json();


        $group = collect($response['value'])->filter(fn($item) => $item['mail'] === 'caltest@stats4sd.org');

        $rmsId = $group->first()['id'];

        $calendar = \Illuminate\Support\Facades\Http::withToken($token)
            ->get("{$endpoint}/groups/{$rmsId}/calendar")
            ->json();

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

        return count($eventsFromApi['value']);
    }

}
