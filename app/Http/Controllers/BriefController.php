<?php

namespace App\Http\Controllers;

use App\Models\Brief;
use Illuminate\Http\Request;

class BriefController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $briefs = Brief::paginate(10);
        return view('pages.briefs.index', compact('briefs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $now = config('constants.date_now');
        return view('pages.briefs.form', compact('now'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Brief::create($request->all());
        return redirect()->route('briefs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Brief  $brief
     * @return \Illuminate\Http\Response
     */
    public function show(Brief $brief)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Brief  $brief
     * @return \Illuminate\Http\Response
     */
    public function edit(Brief $brief)
    {
        return view('pages.briefs.form', compact('brief'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Brief  $brief
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Brief $brief)
    {
        $brief->update($request->all());
        return redirect()->route('briefs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Brief  $brief
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brief $brief)
    {
        $brief->delete();
        return redirect()->route('briefs.index');
    }
}
