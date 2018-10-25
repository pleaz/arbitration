<?php
/**
 * Created by PhpStorm.
 * User: pleaz
 * Date: 04/10/2017
 * Time: 12:59
 */
namespace App\Http\Controllers;

use App\Cases;
use Illuminate\Http\Request;


class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function userForm()
    {
        return view('user.create');
    }

    public function userAdd(Request $request)
    {
        $company = new Cases([
            'surname' => $request['surname'],
            'name' => $request['name'],
            'patron' => $request['patron'],
            'snils' => $request['snils'],
            'inn' => $request['inn'],
            'p_serial' => $request['p_serial'],
            'p_number' => $request['p_number'],
            'p_issuer' => $request['p_issuer'],
            'p_date' => $request['p_date'],
            'date_birth' => $request['date_birth'],
            'place_birth' => $request['place_birth'],
            'index' => $request['index'],
            'region' => $request['region'],
            'area' => $request['area'],
            'city' => $request['city'],
            'community' => $request['community'],
            'street' => $request['street'],
            'house' => $request['house'],
            'build' => $request['build'],
            'home' => $request['home'],
            'channel' => $request['channel'],
            'contract' => $request['contract']
        ]);
        $company->save();

        return view('user.create', ['result' => 'Сохранено']);
    }

    public function usersList()
    {
        $list = Cases::all();

        return view('user.list', compact('list'));
    }

    public function userInfo($id)
    {
        $user = Cases::find($id);

        return view('user.edit', compact('user'));
    }

    public function userUpdate($id, Request $request)
    {
        $user = Cases::find($id)->fill($request->toArray());
        $user = ($user->update()) ? $user : false;
        $result = 'Сохранено';

        return view('user.edit', compact('user', 'result'));
    }
}
