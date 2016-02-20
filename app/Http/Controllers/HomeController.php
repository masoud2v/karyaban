<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Jobs;
use Illuminate\Http\Request;
// to use DB class in queries
use DB;
use Auth;
use Validator;
use Input;
use Redirect;
use jDateTime;
use DateTime;
use App\User;
use App\Cities;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs = Jobs::all();
        $cities = Cities::all();
        return view('home')
            ->with('jobs', $jobs)
            ->with('cities', $cities);
    }

    public function show($id)
    {
        $job = Jobs::where('id', '=', $id)->firstOrFail();
        return view('show')
            ->with('job', $job);
    }

    public function insertform()
    {
        $this->middleware('auth');
        $authUser = Auth::user();
        $cities = Cities::lists('name', 'name');
        return view('insert')
            ->with('cities', $cities);
    }

    public function insert()
    {
        $authUser = Auth::user();
        $rules = array(
            'title' => 'required',
            'text' => 'required|min:10'
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return Redirect::to('/insert')
                ->withErrors($validator)
                ->withInput(Input::all());
        } else {
            $jobs = new Jobs;

            $jobs->title = Input::get('title');
            $jobs->text = Input::get('text');
            $jobs->user = $authUser->id;
            $jobs->email = Input::get('email');
            $jobs->tel = Input::get('tel');
            $jobs->city = Input::get('city');
            $jobs->type = '1';

            $jobs->save();

            return Redirect::to('/insert');
        }

    }

    public function cityinsert()
    {
        return view('city');
    }

    public function cityinsertpost()
    {
        $city = new Cities;

        $city->name = Input::get('name');

        $city->save();

        return Redirect::to('/cityinsert');
    }
}
