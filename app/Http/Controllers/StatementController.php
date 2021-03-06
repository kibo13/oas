<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

// models 
use App\Models\Address;
use App\Models\Branch;
use App\Models\Defect;
use App\Models\Statement;
use App\Models\Log;
use App\Models\Type;
use Carbon\Carbon;

class StatementController extends Controller
{
    /**
     * Display a listing of the logs.
     */
    public function logs(Statement $statement)
    {
        $logs = Log::where('statement_id', $statement->id)->get();
        
        return view(
            'pages.statements.logs.index', 
            compact('logs', 'statement')
        );
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // constant 
        $today = Carbon::now()->addHour(5)->format('Y-m-d');

        // getBranch - custom fn from Helpers
        $branch = getBranch();

        if ($branch >= 1 || $branch <= 5) {
            $statements = Statement::where('branch_id', $branch)->get();
        }

        if ($branch > 5) {
            $statements = Statement::get();
        }

        // counters 
        $total = $statements->where('state', '!=', 2)->count();
        $take  = $statements->where('state', 0)->count();
        $temp  = $statements->where('state', 1)->count();
        $done  = $statements->where('state', 2)->count();      

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
        // date and time register 
        $date_now = Carbon::now()->addHour(5)->format('Y-m-d');
        $time_now = Carbon::now()->addHour(5)->format('H:i');

        // types 
        $types = Type::get();

        // receiver 
        $user = Auth::user()->name;

        // branch_id for addresses
        $branch_id = getBranch();

        // why plot coming
        $branch = Branch::where('id', $branch_id)->first();

        // addresses
        $addresses = Address::whereHas('plots', function ($q) use ($branch_id) {
            $q->where('branch_id', '=', $branch_id);
        })->get();

        return view(
            'pages.statements.form',
            compact(
                'addresses', 
                'types', 
                'user', 
                'branch', 
                'date_now',
                'time_now'
            )
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
        // temp or done 
        $actions = config('constants.actions');

        // receiver for logs 
        $user = Auth::user()->name;

        // plot for logs 
        $branch_id = getBranch();
        $branch = Branch::where('id', $branch_id)->first();

        // defects 
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
        // types 
        $types = Type::get();

        // branch_id for addresses
        $branch_id = getBranch();

        // addresses
        $addresses = Address::whereHas('plots', function ($q) use ($branch_id) {
            $q->where('branch_id', '=', $branch_id);
        })->get();

        return view(
            'pages.statements.form',
            compact(
                'addresses', 
                'types', 
                'statement'
            )
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
