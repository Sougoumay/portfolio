<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $user = User::query()->firstOrFail();

        $formations = Formation::query()->orderBy("start_date","desc")->get();

        return view("home", compact("user", "formations"));
    }
}
