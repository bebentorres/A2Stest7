<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobPosts;
use App\Models\EmployerProfile;


class JobPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobPosts = JobPosts::all();
        $jobPosts = JobPosts::orderBy('job_id', 'asc')->simplePaginate(1);
        return view('jobPost.index')->with('jobPosts', $jobPosts);
        // return view('jobPost.index')->with('jobPosts', $jobPosts);
        
        // $jobPosts = JobPosts::orderBy('id', 'desc');
        // return view('jobPost.index')->with('jobPosts', $jobPosts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jobPost.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        JobPosts::create($input);
        return redirect('jobPosts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($job_id)
    {
        $singleJobPost = JobPosts::find($job_id);
        return view('jobPost.show')->with('jobPost', $singleJobPost);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($job_id)
    {
        $updateJobPost = JobPosts::find($job_id);
        return view('jobPost.edit')->with('jobPost', $updateJobPost);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $job_id)
    {
        $updateJobPost = JobPosts::find($job_id);
        $input = $request->all();
        $updateJobPost->update($input);

        return redirect('jobPosts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($job_id)
    {
        JobPosts::destroy($job_id);
        return redirect('jobPosts');
    }
}
