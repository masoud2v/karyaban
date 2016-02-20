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

class JobsController extends Controller
{
    public function __construct()
    {
//        $this->middleware('auth');
    }

    public function show($id) {
        $authUser = Auth::user();

        $job = Jobs::findOrFail($id);
        if ($authUser) {
            if($authUser->id == $job->user){
                $delete = true;
            }else {
                $delete = false;
            }
        }else {
            $delete = false;
        }
        return view('show')
            ->with('job', $job)
            ->with('delete', $delete);
    }

    public function city($city) {
        $jobs = Jobs::where('city', '=', $city)->get();
        dd($jobs);
//        return view('show')
//            ->with('job', $jobs);
    }

    public function delete($id) {
        $job = Jobs::find($id);
//        dd($job);
		Jobs::destroy($id);
        return Redirect::to('/');
    }
}
