<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Defect;
use App\Models\Address;
use Illuminate\Support\Facades\DB;

class DataController extends Controller
{
    /**
     * Display a listing of the defects.
     */
    public function defects()
    {
        return Defect::get();
    }

    /**
     * Display a listing of the addresses.
     */
    public function addresses()
    {
        return Address::get();
    }

    /**
     * Display a listing of the addresses.
     */
    public function plots(Request $request)
    {
        $plots = DB::table('addresses')
            ->join(
                'address_plot', 
                'address_plot.address_id', 
                '=', 
                'addresses.id'
            )

            ->join(
                'plots',
                'address_plot.plot_id',
                '=',
                'plots.id'
            )

            ->join(
                'streets',
                'streets.id',
                '=',
                'addresses.street_id'
            )

            ->select(
                'streets.name',
                'addresses.street_id', 
                'addresses.num_home', 
                'plots.branch_id'
            )

            ->get();

        return $plots;
    }
}
