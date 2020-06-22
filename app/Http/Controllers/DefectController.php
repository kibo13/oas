<?php

namespace App\Http\Controllers;

use App\Models\Defect;
use App\Models\Type;
use Illuminate\Http\Request;

class DefectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $defects = Defect::get();
        return view('pages.defects.index', compact('defects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $attachments = config('constants.attachments');
        $types = Type::get();
        return view(
            'pages.defects.form',
            compact('attachments', 'types')
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
        Defect::create($request->all());
        return redirect()->route('defects.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Defect  $defect
     * @return \Illuminate\Http\Response
     */
    public function edit(Defect $defect)
    {
        $attachments = config('constants.attachments');
        $types = Type::get();
        return view(
            'pages.defects.form',
            compact('attachments', 'types', 'defect')
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Defect  $defect
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Defect $defect)
    {
        $defect->update($request->all());
        return redirect()->route('defects.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Defect  $defect
     * @return \Illuminate\Http\Response
     */
    public function destroy(Defect $defect)
    {
        $defect->delete();
        return redirect()->route('defects.index');
    }
}
