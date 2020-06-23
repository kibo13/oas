<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class DataController extends Controller
{
    /**
     * Display a listing of the addresses.
     */
    public function plots()
    {
        $plots = DB::table('plots')
            ->join(
                'address_plot',
                'address_plot.plot_id',
                '=',
                'plots.id'
            )
            ->join(
                'branches',
                'branches.id',
                '=',
                'plots.branch_id'
            )
            ->select(
                'branches.name',
                'plots.branch_id',
                'address_plot.address_id',
            )
            ->where(
                'branch_id',
                '!=',
                9
            )
            ->get();

        return $plots;
    }
}
