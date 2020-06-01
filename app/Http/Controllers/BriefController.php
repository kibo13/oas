<?php

namespace App\Http\Controllers;

use App\Models\Brief;
use Illuminate\Http\Request;
use App\Charts\PressureTempChart; 

class BriefController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $briefsQuery = Brief::query();

        if ($request->filled('date_from')) {
            $briefsQuery->where('date_brief', '>=', $request->date_from);
        }

        if ($request->filled('date_to')) {
            $briefsQuery->where('date_brief', '<=', $request->date_to);
        }

        $briefs = $briefsQuery
            ->paginate(10)
            ->withPath("?".$request->getQueryString());

        $chart = new PressureTempChart;
        $chart->labels(['One', 'Two', 'Three', 'Four']);
        $chart->dataset('My dataset', 'line', [1, 2, 3, 4]);
        $chart->dataset('My dataset 2', 'line', [4, 3, 2, 1]);
      
        return view('pages.briefs.index', compact('briefs', 'chart'));
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
