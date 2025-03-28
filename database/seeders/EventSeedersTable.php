<?php

namespace Database\Seeders;
use App\Models\Event;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventSeedersTable extends Seeder
{
    public function run(): void
    {
        Event::create([
            'title' => 'Event 1',
            'descriptions' => 'Event 1 Description',
            'start_time' =>now()->addDays(7),
            'end_time' => now()->addDays(7)->addHours(2),
           
        ]);
        Event::create([
            'title' => 'Event 2',
            'descriptions' => 'Event 2 Description',
            'start_time' => now()->addDays(7),
            'end_time' => now()->addDays(9)->addHours(2),

        ]);
        Event::create([
            'title' => 'Event 3',
            'descriptions' => 'Event 3 Description',
            'start_time' => now()->addDays(7),
            'end_time' => now()->addDays(8)->addHours(5),

        ]);
    }
}
