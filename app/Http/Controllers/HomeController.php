<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Job;

class HomeController extends Controller
{
    public function index()
    {
        // $jobs = Job::paginate(10);
        return view('home.index');
    }
}
