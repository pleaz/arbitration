<?php

use Illuminate\Database\Seeder;
use App\Organization;
use App\EventType;
use App\Events;
use App\Cases;

class EventsTableSeeder extends Seeder
{
    public function run()
    {
        EventType::create([
            'name' => 'Технадзор'
        ]);
        EventType::create([
            'name' => 'Супервайзинг'
        ]);

        $event = new Events;

        $case = Cases::find(1);
        $organization = Organization::find(2);
        $event_type = EventType::find(2);

        $event->open = 0;

        $event->cases()->associate($case);
        $event->organization()->associate($organization);
        $event->event_type()->associate($event_type);

        $event->save();

    }
}
