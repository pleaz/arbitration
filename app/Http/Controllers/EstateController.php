<?php
/**
 * Created by PhpStorm.
 * User: pleaz
 * Date: 04/10/2017
 * Time: 12:59
 */
namespace App\Http\Controllers;

use App\EstateType;
use App\Estate;
use App\Cases;
use Illuminate\Http\Request;
use Response;


class EstateController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function estate($id)
    {
        $user = Cases::find($id);
        $estates = $user->estate;
        return view('estate.main', compact('estates', 'user'));
    }

    public function estateAddForm(Request $request)
    {
        $estate_types_src = EstateType::all();
        $estate_types=[];
        foreach ($estate_types_src as $estate_type) {
            $estate_types[$estate_type->id] = $estate_type->name;
        }

        $cases = $request->id;

        return Response::json(['success' => true, 'html' => view('estate.modal.add', compact('estate_types', 'cases'))->render()]);
    }

    public function estateAdd(Request $request)
    {
        $case = Cases::find($request->case_id);
        $estate_type = EstateType::find($request->estate_type_id);

        $estate = new Estate([
            'name' => $request->name,
            'since' => $request->since,
            'quantity' => $request->quantity,
            'price' => $request->price
        ]);

        $estate->cases()->associate($case);
        $estate->estate_type()->associate($estate_type);

        $estate->save();

        return redirect()->route('estate', ['id' => $request->case_id]);
    }

    public function estateEditForm(Request $request)
    {
        $estate_types_src = EstateType::all();
        $estate_types=[];
        foreach ($estate_types_src as $estate_type) {
            $estate_types[$estate_type->id] = $estate_type->name;
        }

        $estate = Estate::find($request->id);

        return Response::json(['success' => true, 'html' => view('estate.modal.edit', compact('estate_types', 'estate'))->render()]);
    }

    public function estateEdit(Request $request)
    {
        $estate = Estate::find($request->estate_id);
        $event_type = EstateType::find($request->estate_type_id);

        $estate->name = $request->name;
        $estate->since = $request->since;
        $estate->quantity = $request->quantity;
        $estate->price = $request->price;
        $estate->date = $request->date ? date("Y-m-d", strtotime($request->date)) : null;
        $estate->sell_price = $request->sell_price;
        $estate->offer = $request->offer;

        $estate->estate_type()->associate($event_type);

        $estate->update();

        return redirect()->route('estate', ['id' => $estate->case_id]);
    }

    public function estateDeleteForm(Request $request)
    {
        $estate = $request->id;
        return Response::json(['success' => true, 'html' => view('estate.modal.delete', compact('estate'))->render()]);
    }

    public function estateDelete(Request $request)
    {
        $estate = Estate::find($request->estate_id);
        $case_id = $estate->case_id;
        $estate->delete();

        return redirect()->route('estate', ['id' => $case_id]);
    }
}
