<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Street;
use App\Models\Organization;
use Illuminate\Http\Request;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs = Job::paginate(10);
        return view('pages.jobs.index', compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $type_job = array(
            '1' => array(
                'name' => 'Плановая'
            ),
            '2' => array(
                'name' => 'Аварийная'
            )
        );

        $type_off = array(
            '1' => array(
                'name' => 'Горячая вода'
            ),
            '2' => array(
                'name' => 'Холодная вода'
            ),
            '3' => array(
                'name' => 'Отопление'
            )
        );

        $streets = Street::get();
        $organizations = Organization::get();
         return view(
            'pages.jobs.create',
            compact('streets', 'organizations', 'type_job', 'type_off')
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
        Job::create($request->all());
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
        $jobs = Job::paginate(10);
        return view('pages.jobs.show', compact('jobs', 'job'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function edit(Job $job)
    {
        $type_job = array(
            '1' => array(
                'name' => 'Плановая'
            ),
            '2' => array(
                'name' => 'Аварийная'
            )
        );

        $type_off = array(
            '1' => array(
                'name' => 'Горячая вода'
            ),
            '2' => array(
                'name' => 'Холодная вода'
            ),
            '3' => array(
                'name' => 'Отопление'
            )
        );

        $streets = Street::get();
        $organizations = Organization::get();
        return view(
            'pages.jobs.edit',
            compact('job', 'streets', 'organizations', 'type_job', 'type_off')
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
        $job->delete();
        return redirect()->route('jobs.index');
    }
}
