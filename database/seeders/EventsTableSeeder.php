<?php

namespace Database\Seeders;

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
        

        \DB::table('events')->delete();
        
        \DB::table('events')->insert(array (
            0 => 
            array (
                'all_day' => 0,
                'body' => 'This is our Monday morning exciting meeting / event / thing.',
                'created_at' => '2023-01-24 09:35:16',
                'end' => '2023-02-06 10:50:00',
                'id' => 'AQMkAGE1NGMwOTZjLWM4Y2UtNGE0OC1hZGU2LWNkMzViMjRkZmIyZgBGAAADIdvR4KNFzE6Nmqh0T9YiFwcAu7VYT1jJQkasO3tDsHnJaAAAAgENAAAAu7VYT1jJQkasO3tDsHnJaAAAAWK8IQAAAA==',
                'start' => '2023-02-06 10:00:00',
                'title' => 'Recurring Test Event',
                'updated_at' => '2023-01-24 09:35:16',
                'url' => NULL,
            ),
            1 => 
            array (
                'all_day' => 0,
                'body' => 'This is a description of the event. It\'s going to be fun.',
                'created_at' => '2023-01-24 09:35:16',
                'end' => '2023-02-01 11:50:00',
                'id' => 'AQMkAGE1NGMwOTZjLWM4Y2UtNGE0OC1hZGU2LWNkMzViMjRkZmIyZgBGAAADIdvR4KNFzE6Nmqh0T9YiFwcAu7VYT1jJQkasO3tDsHnJaAAAAgENAAAAu7VYT1jJQkasO3tDsHnJaAAAAWK8IAAAAA==',
                'start' => '2023-02-01 09:30:00',
                'title' => 'Test Event 3',
                'updated_at' => '2023-01-24 09:35:16',
                'url' => NULL,
            ),
            2 => 
            array (
                'all_day' => 0,
                'body' => 'Test',
                'created_at' => '2023-01-24 09:35:16',
                'end' => '2023-01-24 10:55:00',
                'id' => 'AQMkAGE1NGMwOTZjLWM4Y2UtNGE0OC1hZGU2LWNkMzViMjRkZmIyZgBGAAADIdvR4KNFzE6Nmqh0T9YiFwcAu7VYT1jJQkasO3tDsHnJaAAAAgENAAAAu7VYT1jJQkasO3tDsHnJaAAAAWK8HwAAAA==',
                'start' => '2023-01-24 10:30:00',
                'title' => 'Test Event',
                'updated_at' => '2023-01-24 09:35:16',
                'url' => NULL,
            ),
        ));
        
        
    }
}