<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Job;
use App\Models\Street;

class HomeController extends Controller
{
    public function index()
    {
        $streets = Street::get();
        $jobs = Job::orderBy('date_on', 'DESC')
            ->orderBy('time_on', 'DESC')
            ->paginate(5);
            
        return view('home.index', compact('jobs', 'streets'));
    }
}
