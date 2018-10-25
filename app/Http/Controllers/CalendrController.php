<?php
/**
 * Created by PhpStorm.
 * User: pleaz
 * Date: 14/11/2017
 * Time: 16:35
 */
namespace App\Http\Controllers;

use App\Events;

class CalendrController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $events = [];

        $events_src = Events::all();

        foreach ($events_src as $event){
            $events[] = \Calendar::event(
                $event->cases->surname.' '.
                $event->cases->name.' '.
                $event->cases->patron.' - '.
                $event->event_type->name.'('.$event->organization->name.')',
                true,
                $event->date,
                false,
                false,
                [
                    'url' => route('event', $event->id),
                    'color' => $event->open == 1 ? '#636c72' : '#5cb85c'
                ]
            );
        }

        $calendar = \Calendar::addEvents($events)
        ->setOptions([
            'locale' => 'ru',
            'firstDay' => 1
        ]);

        return view('calendar.main', compact('calendar'));
    }

    public function open(){
        $events = [];

        $events_src = Events::where('open', 0)->get();

        foreach ($events_src as $event){
            $events[] = \Calendar::event(
                $event->cases->surname.' '.
                $event->cases->name.' '.
                $event->cases->patron.' - '.
                $event->event_type->name.'('.$event->organization->name.')',
                true,
                $event->date,
                false,
                false,
                [
                    'url' => route('event', $event->id),
                    'color' => $event->open == 1 ? '#636c72' : '#5cb85c'
                ]
            );
        }

        $calendar = \Calendar::addEvents($events)
            ->setOptions([
                'locale' => 'ru',
                'firstDay' => 1
            ]);

        return view('calendar.open', compact('calendar'));
    }

}