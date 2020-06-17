<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

// models 
use App\Models\Address;
use App\Models\Branch;
use App\Models\Defect;
use App\Models\Statement;
use App\Models\Type;

class StatementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // constant 
        $today = config('constants.date_now');

        // getBranch - custom fn from Helpers
        $branch = getBranch();

        if ($branch >= 1 || $branch <= 5) {
            $stats      = Statement::where('branch_id', $branch)->get();
            $statements = Statement::where('branch_id', $branch)->orderBy('date_in', 'DESC')->paginate(10);     
        }

        if ($branch == 9) {
            $stats      = Statement::get();
            $statements = Statement::orderBy('date_in', 'DESC')->paginate(10);
        }

        // counters 
        $total = $stats->where('state', '!=', 2)->count();
        $take  = $stats->where('state', 0)->count();
        $temp  = $stats->where('state', 1)->count();
        $done  = $stats->where('state', 2)->count();      

        return view(
            'pages.statements.index', 
            compact('statements', 'today', 'total', 'take', 'temp', 'done')
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types = Type::get();
        $plots = Branch::where('slug', 1)->get();
        $user = Auth::user()->name;
        $branch_id = getBranch();
        $branch = Branch::where('id', $branch_id)->first();
        $streets = Address::whereHas('plots', function ($q) use ($branch_id) {
            $q->where('branch_id', '=', $branch_id);
        })->get();

        return view(
            'pages.statements.form',
            compact('streets', 'types', 'user', 'branch', 'plots')
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
        Statement::create($request->all());
        return redirect()->route('statements.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Statement  $statement
     * @return \Illuminate\Http\Response
     */
    public function show(Statement $statement)
    {
        $actions = config('constants.actions');
        $user = Auth::user()->name;
        $branch_id = getBranch();
        $branch = Branch::where('id', $branch_id)->first();
        $defects = Defect::where('type_id', $statement->type->id)->get();
        return view(
            'pages.statements.show',
            compact('statement', 'actions', 'defects', 'user', 'branch')
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Statement  $statement
     * @return \Illuminate\Http\Response
     */
    public function edit(Statement $statement)
    {
        $types = Type::get();
        $plots = Branch::where('slug', 1)->get();
        $user = Auth::user()->name;
        $branch_id = getBranch();
        $branch = Branch::where('id', $branch_id)->first();
        $streets = Address::whereHas('plots', function ($q) use ($branch_id) {
            $q->where('branch_id', '=', $branch_id);
        })->get();

        $current_id = $statement->branch_id;
        $stedit = Address::whereHas('plots', function ($q) use ($current_id) {
            $q->where('branch_id', '=', $current_id);
        })->get();

        return view(
            'pages.statements.form',
            compact('streets', 'types', 'user', 'branch', 'plots', 'statement', 'stedit')
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Statement  $statement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Statement $statement)
    {
        $statement->update($request->all());
        return redirect()->route('statements.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Statement  $statement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Statement $statement)
    {
        $statement->delete();
        return redirect()->route('statements.index');
    }
}
