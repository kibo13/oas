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
        // filters 
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

        // parametrs for chart of temp 
        $temp = $briefs->pluck('temp', 'date_brief');
        $hw_tst = $briefs->pluck('hw_tst', 'date_brief');
        $hw_tbk = $briefs->pluck('hw_tbk', 'date_brief');

        // chart of temp 
        $chart_t = new PressureTempChart;
        $chart_t->labels($temp->keys());
        $chart_t
            ->dataset('Tнаружная', 'line', $temp->values())
            ->options([
                'borderColor' => '#ffbb33',
                'backgroundColor' => 'transparent'
            ]);
        $chart_t
            ->dataset('Тпр', 'line', $hw_tst->values())
            ->options([
                'borderColor' => '#4285F4',
                'backgroundColor' => 'transparent'
            ]);
        $chart_t
            ->dataset('Тобр', 'line', $hw_tbk->values())
            ->options([
                'borderColor' => '#aa66cc',
                'backgroundColor' => 'transparent'
            ]);

        // parametrs for chart of pressure 
        $hw_pst = $briefs->pluck('hw_pst', 'date_brief');
        $hw_pbk = $briefs->pluck('hw_pbk', 'date_brief');
        $cw_r = $briefs->pluck('cw_r', 'date_brief');
        $cw_ot = $briefs->pluck('cw_ot', 'date_brief');
        $cw_tf = $briefs->pluck('cw_tf', 'date_brief');
        $cw_fs = $briefs->pluck('cw_fs', 'date_brief');
        $cw_s = $briefs->pluck('cw_s', 'date_brief');

        // chart of pressure 
        $chart_p = new PressureTempChart;
        $chart_p->labels($hw_pst->keys());
        $chart_p
            ->dataset('Рпр', 'line', $hw_pst->values())
            ->options([
                'borderColor' => '#ffbb33',
                'backgroundColor' => 'transparent'
            ]);
        $chart_p
            ->dataset('Робр', 'line', $hw_pbk->values())
            ->options([
                'borderColor' => '#4285F4',
                'backgroundColor' => 'transparent'
            ]);
        $chart_p
            ->dataset('Речная', 'line', $cw_r->values())
            ->options([
                'borderColor' => '#aa66cc',
                'backgroundColor' => 'transparent'
            ]);
        $chart_p
            ->dataset('1,2', 'line', $cw_ot->values())
            ->options([
                'borderColor' => '#8bc34a',
                'backgroundColor' => 'transparent'
            ]);
        $chart_p
            ->dataset('3,4', 'line', $cw_tf->values())
            ->options([
                'borderColor' => '#ffc107',
                'backgroundColor' => 'transparent'
            ]);
        $chart_p
            ->dataset('5,6', 'line', $cw_fs->values())
            ->options([
                'borderColor' => '#9e9e9e',
                'backgroundColor' => 'transparent'
            ]);
        $chart_p
            ->dataset('7', 'line', $cw_s->values())
            ->options([
                'borderColor' => '#795548',
                'backgroundColor' => 'transparent'
            ]);
        return view('pages.briefs.index', compact('briefs', 'chart_t', 'chart_p'));
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
