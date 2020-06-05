<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Defect;
use App\Models\Address;

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
        // $id = $request->input('id');
        // $rez['rez'] = 0;
        // if($id)
        
        // SELECT
        // addresses.num_home,
        // streets.`name`,
        // address_plot.plot_id
        // FROM
        // addresses
        // INNER JOIN address_plot ON address_plot.address_id = addresses.id
        // INNER JOIN streets ON streets.id = addresses.street_id

    }
}
