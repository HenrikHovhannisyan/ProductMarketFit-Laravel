<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
    public function index()
    {
        $feedbacks = Feedback::all();
        return view('home', compact('feedbacks'));
    }
}
