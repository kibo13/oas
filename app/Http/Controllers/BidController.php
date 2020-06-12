<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Branch;
use App\Models\Defect;
use App\Models\Type;
use App\Models\Bid;
use Auth;
use Illuminate\Http\Request;

class BidController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // getBranch - custom fn from Helpers
        $branch = getBranch();

        if ($branch >= 1 || $branch <= 5) {
            $bids = Bid::where('branch_id', $branch)->paginate(10);
        } 

        if ($branch == 9) {
            $bids = Bid::paginate(10);
        }
        
        return view('pages.bids.index', compact('bids'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $types = Type::get();

        // getBranch - custom fn from Helpers
        $user_id = getBranch();
        $branch = Branch::where('id', $user_id)->first();
        $streets = Address::whereHas('plots', function($q) use($user_id) {
            $q->where('branch_id', '=', $user_id);
        })->get();

        return view(
            'pages.bids.form',
            compact('streets', 'types', 'user_id', 'branch')
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
        Bid::create($request->all());
        return redirect()->route('bids.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bid  $bid
     * @return \Illuminate\Http\Response
     */
    public function show(Bid $bid)
    {
        $type_log = config('constants.type_log');
        $user_sign = Auth::user()->name;
        $defects = Defect::where('type_id', $bid->type->id)->get();
        return view(
            'pages.bids.show', 
            compact('bid', 'type_log', 'defects', 'user_sign')
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bid  $bid
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Bid $bid)
    {
        $types = Type::get();
        // getBranch - custom fn from Helpers
        $user_id = getBranch();
        $branch = Branch::where('id', $user_id)->first();
        $streets = Address::whereHas('plots', function ($q) use ($user_id) {
            $q->where('branch_id', '=', $user_id);
        })->get();

        return view(
            'pages.bids.form',
            compact('streets', 'types', 'user_id', 'branch', 'bid')
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bid  $bid
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bid $bid)
    {
        $bid->update($request->all());
        return redirect()->route('bids.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bid  $bid
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bid $bid)
    {
        $bid->delete();
        return redirect()->route('bids.index');
    }
}
