<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobseekerProfile;
use Auth;
use DB;
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
            'bio' => request('bio'),
            'emphistory' => request('emphistory'),
            'educ' => request('educ'),
            'addinfo' => request('addinfo'),
            'cert' => request('cert'),
            'language' => request('language'),
            'skills' => request('skills'),
            
        ]);
        return redirect()->back()->with('message', 'Updated Successfully');

        
    }

    public function update (Request $request)
    {
        $this->validate($request,[
            'fname' => 'required',
            'lname' => 'required',
            'address' => 'required',
            'bday' => 'required',
            'number' => 'required',
            
        ]);
        $user_id = auth()->user()->id;
        JobseekerProfile::where('user_id', $user_id)->update([
            'fname' => request('fname'),
            'lname' => request('lname'),
            'address' => request('address'),
            'bday' => request('bday'),
            'number' => request('number'),
            'bio' => request('bio'),
            'emphistory' => request('emphistory'),
            'educ' => request('educ'),
            'addinfo' => request('addinfo'),
            'cert' => request('cert'),
            'language' => request('language'),
            'skills' => request('skills'),
        ]);

        return redirect()->back()->with('message', 'Updated Successfully');

    }

    public function up(){
        return view('users.jobseeker.update');
    }


}
