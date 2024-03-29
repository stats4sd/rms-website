<?php

namespace Database\Seeders;

use App\Models\Event;
use App\Models\EventResource;
use Illuminate\Database\Seeder;

class EventsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('event_types')->delete();

        \DB::table('event_types')->insert([
            [
                'name' => 'Seminar',
                'joining_instructions' => 'Our seminars are open to everyone. To receive the invitation link, please register for our events mailing list.',
                'registration_url' => 'https://this-is-our-joining-url',
            ],
            [
                'name' => 'Open Online Course',
                'joining_instructions' => 'This online course is run through our Moodle site and is open to anyone to register. Please use the link below to enroll.',
                'registration_url' => 'https://this-is-our-joining-url',
            ]
        ]);


        \DB::table('events')->delete();

        \DB::table('events')->insert(array(
            0 =>
                array(
                    'all_day' => 0,
                    'event_type_id' => 1,
                    'body' => 'This is our Monday morning exciting meeting / event / thing.',
                    'created_at' => '2023-01-24 09:35:16',
                    'end' => '2023-02-06 10:50:00',
                    'start' => '2023-02-06 10:00:00',
                    'title' => 'Recurring Test Event',
                    'updated_at' => '2023-01-24 09:35:16',
                    'registration_url' => NULL,
                ),
            1 =>
                array(
                    'all_day' => 0,
                    'event_type_id' => 1,
                    'body' => 'This is a description of the event. It\'s going to be fun.',
                    'created_at' => '2023-01-24 09:35:16',
                    'end' => '2023-02-01 11:50:00',
                    'start' => '2023-02-01 09:30:00',
                    'title' => 'Test Event 3',
                    'updated_at' => '2023-01-24 09:35:16',
                    'registration_url' => NULL,
                ),
            2 =>
                array(
                    'all_day' => 0,
                    'event_type_id' => 1,
                    'body' => 'Test Of the future!',
                    'created_at' => '2023-01-24 09:35:16',
                    'end' => '2023-03-24 10:55:00',
                        'start' => '2023-03-24 10:30:00',
                    'title' => 'Test Event',
                    'updated_at' => '2023-01-24 09:35:16',
                    'registration_url' => NULL,
                ),
        ));


        foreach (Event::all() as $event) {
            $event->eventResources()
                ->createMany([
                    [
                        'title' => 'Resource 1, maybe a Stats4SD Trove',
                        'url' => 'https://stats4sd.org/resources/403',
                    ],
                    [
                        'title' => 'Resource 2, maybe a public Dropbox link',
                        'url' => 'https://www.dropbox.com/sh/n66z620p5jmnegl/AADCow9GNykw8_2i6nEOdAWGa?dl=0'
                    ]
                ]);
        }


    }
}
