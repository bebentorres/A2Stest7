<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobseekerProfile;
use Auth;
class JobseekerProfileController extends Controller
{
    public function index (){
        return view('users.jobseeker.dashboard');
    }

    public function edit(){
        return view('users.jobseeker.editprofile');
    }


    public function editprofile (Request $request){
        $this->validate($request,[
            'fname' => 'required',
            'lname' => 'required',
            'address' => 'required',
            'bday' => 'required',
            'number' => 'required',
        ]);
        JobseekerProfile::create([
            'user_id' =>Auth::user()->id,
            'fname' => request('fname'),
            'lname' => request('lname'),
            'address' => request('address'),
            'bday' => request('bday'),
            'number' => request('number'),
        ]);
        return redirect()->back()->with('message', 'Updated Successfully');
    }
}
