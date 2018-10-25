<?php
/**
 * Created by PhpStorm.
 * User: pleaz
 * Date: 04/10/2017
 * Time: 12:59
 */
namespace App\Http\Controllers;

use App\EventType;
use App\Organization;
use App\Events;
use App\Cases;
use Illuminate\Http\Request;
use Response;


class EventController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function events($id)
    {
        $user = Cases::find($id);
        $events = $user->events;
        return view('events.main', compact('events', 'user'));
    }

    public function eventAddForm(Request $request)
    {
        $organizations_src = Organization::all();
        $organizations=[];
        foreach ($organizations_src as $organization) {
            $organizations[$organization->id] = $organization->name;
        }

        $event_types_src = EventType::all();
        $event_types=[];
        foreach ($event_types_src as $event_type) {
            $event_types[$event_type->id] = $event_type->name;
        }

        $cases = $request->id;

        return Response::json(['success' => true, 'html' => view('events.modal.add', compact('organizations', 'event_types', 'cases'))->render()]);
    }

    public function eventAdd(Request $request)
    {
        $case = Cases::find($request->case_id);
        $organization = Organization::find($request->organization_id);
        $event_type = EventType::find($request->event_type_id);

        $event = new Events([
            'date' => $request->date ? date("Y-m-d", strtotime($request->date)) : null,
            'comment' => $request->comment,
            'open' => $request->open
        ]);

        $event->organization()->associate($organization);
        $event->cases()->associate($case);
        $event->event_type()->associate($event_type);

        $event->save();

        return redirect()->route('events', ['id' => $request->case_id]);
    }

    public function eventEditForm(Request $request)
    {
        $organizations_src = Organization::all();
        $organizations=[];
        foreach ($organizations_src as $organization) {
            $organizations[$organization->id] = $organization->name;
        }

        $event_types_src = EventType::all();
        $event_types=[];
        foreach ($event_types_src as $event_type) {
            $event_types[$event_type->id] = $event_type->name;
        }

        $event = Events::find($request->id);

        return Response::json(['success' => true, 'html' => view('events.modal.edit', compact('organizations', 'event_types', 'event'))->render()]);
    }

    public function eventEdit(Request $request)
    {
        $event = Events::find($request->event_id);
        $organization = Organization::find($request->organization_id);
        $event_type = EventType::find($request->event_type_id);

        $event->date = $request->date ? date("Y-m-d", strtotime($request->date)) : null;
        $event->open = $request->open;
        $event->comment = $request->comment;
        $event->organization()->associate($organization);
        $event->event_type()->associate($event_type);

        $event->update();

        return redirect()->route('events', ['id' => $event->case_id]);
    }

    public function eventDeleteForm(Request $request)
    {
        $event = $request->id;
        return Response::json(['success' => true, 'html' => view('events.modal.delete', compact('event'))->render()]);
    }

    public function eventDelete(Request $request)
    {
        $event = Events::find($request->event_id);
        $case_id = $event->case_id;
        $event->delete();

        return redirect()->route('events', ['id' => $case_id]);
    }

    public function event($id){
        $event = Events::find($id);
        $user = $event->cases;

        return view('event.main', compact('event', 'user'));
    }

    public function eventEditDateForm(Request $request)
    {
        $event = Events::find($request->id);

        return Response::json(['success' => true, 'html' => view('event.modal.edit-date', compact('event'))->render()]);
    }

    public function eventEditDate(Request $request)
    {
        $event = Events::find($request->event_id);

        $event->date = $request->date ? date("Y-m-d", strtotime($request->date)) : null;

        $event->update();

        return redirect()->route('event', ['id' => $event->id]);
    }

    public function eventApproveForm(Request $request)
    {
        $event = $request->id;
        return Response::json(['success' => true, 'html' => view('event.modal.approve', compact('event'))->render()]);
    }

    public function eventApprove(Request $request)
    {
        $event = Events::find($request->event_id);
        $event->open = 1;
        $event->update();

        return redirect()->route('event', ['id' => $event->id]);
    }
}
