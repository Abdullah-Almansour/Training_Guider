<?php

namespace App\Http\Controllers;

use App\Models\Muscle;
use App\Models\User;
use App\Models\UserExercise;
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $muscles = Muscle::all();
        return view('home')->with('muscles', $muscles);
    }

    public function history()
    {
        $userExercises = UserExercise::all()->where("user_id", auth()->user()->id);
        return view('history')->with('exercises', $userExercises);
    }
}
