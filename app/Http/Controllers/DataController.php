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
}
