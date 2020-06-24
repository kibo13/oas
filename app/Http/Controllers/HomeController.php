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

        // streets 
        $streets = Street::get();

        // getBranch - custom fn from Helpers
        $branch = getBranch();

        if ($branch >= 1 || $branch <= 5) {
            $jobs = Job::where('slug', 'LIKE', '%' . $branch . '%')
                            ->orderBy('date_on', 'DESC')
                            ->orderBy('time_on', 'DESC')
                            ->paginate(5);
        }

        if ($branch > 5) {
            $jobs = Job::orderBy('date_on', 'DESC')
                ->orderBy('time_on', 'DESC')
                ->paginate(5);
        }
            
        return view('home', compact('jobs', 'streets'));
    }
}
