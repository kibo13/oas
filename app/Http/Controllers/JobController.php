<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Street;
use App\Models\Address;
use App\Models\Organization;
use Illuminate\Http\Request;
use Carbon\Carbon;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // date_now 
        $today = Carbon::now()->addHour(5)->format('Y-m-d');

        // streets 
        $streets = Street::get();

        // getBranch - custom fn from Helpers
        $branch = getBranch();

        if ($branch >= 1 || $branch <= 5) {
            $jobs = Job::where('slug', 'LIKE', '%' . $branch . '%')->orderBy('date_on', 'DESC')->get();
        }

        if ($branch > 5) {
            $jobs = Job::orderBy('date_on', 'DESC')->get();
        }

        // counters 
        $count = $jobs->where('date_on', $today)->count(); 
        
        return view(
            'pages.jobs.index', 
            compact('jobs', 'streets', 'count', 'today')
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $type_job = config('constants.type_job');
        $type_off = config('constants.type_off');
        $organizations = Organization::get();
        $addresses = Address::get();
         return view(
            'pages.jobs.form',
            compact('addresses', 'organizations', 'type_job', 'type_off')
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $job = Job::create($request->all());

        // addresses 
        if ($request->input('addresses')) :
            $job->addresses()->attach($request->input('addresses'));
        endif;

        return redirect()->route('jobs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function show(Job $job)
    {
        $streets = Street::get();
        return view('pages.jobs.show', compact('job', 'streets'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function edit(Job $job)
    {
        $type_job = config('constants.type_job');
        $type_off = config('constants.type_off');
        $organizations = Organization::get();
        $addresses = Address::get();
        return view(
            'pages.jobs.form',
            compact('addresses', 'organizations', 'job', 'type_job', 'type_off')
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Job $job)
    {
        $job->update($request->all());

        // addresses 
        $job->addresses()->detach();
        if ($request->input('addresses')) :
            $job->addresses()->attach($request->input('addresses'));
        endif;

        $job->save();

        return redirect()->route('jobs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function destroy(Job $job)
    {
        // addresses 
        $job->addresses()->detach();
        $job->delete();

        return redirect()->route('jobs.index');
    }
}
