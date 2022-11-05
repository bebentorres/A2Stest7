<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmployerProfile;
use Illuminate\Support\Facades\Auth;

class EmployerProfileController extends Controller
{
    public function index (){
        return view('users.employer.dashboard');
    }

    public function edit(){
        return view('users.employer.editprofile');
    }


    public function editprofile (Request $request){
        $this->validate($request,[
            'cname' => 'required',
            'location' => 'required',
            'cnum' => 'required',
            'description' => 'required',
            'benefits' => 'required',
            'workhours' => 'required',
            'comsize' => 'required',
            'worksetup' => 'required',
            'dcode' => 'required',
        ]);
        EmployerProfile::create([
            'user_id' =>Auth::user()->id,
            'cname' => request('cname'),
            'location' => request('location'),
            'cnum' => request('cnum'),
            'description' => request('description'),
            'benefits' => request('benefits'),
            'workhours' => request('workhours'),
            'comsize' => request('comsize'),
            'worksetup' => request('worksetup'),
            'dcode' => request('dcode'),
        ]);
        return redirect()->back()->with('message', 'Updated Successfully');
    }

    public function update(Request $request){
        $this->validate($request,[
            'cname' => 'required',
            'location' => 'required',
            'cnum' => 'required',
        ]);
        $user_id = auth()->user()->id;
        EmployerProfile::where('user_id', $user_id)->update([
            'cname' => request('cname'),
            'location' => request('location'),
            'cnum' => request('cnum'),
            'description' => request('description'),
            'benefits' => request('benefits'),
            'workhours' => request('workhours'),
            'comsize' => request('comsize'),
            'worksetup' => request('worksetup'),
            'dcode' => request('dcode'),
        ]);

        return redirect()->back()->with('message', 'Updated Successfully');

        
    }

    public function up(){
        return view('users.employer.update');
    }
}
