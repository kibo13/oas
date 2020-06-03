<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Defect;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function defects()
    {
        return Defect::get();
    }
}
