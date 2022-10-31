<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\HomeRequest;
use App\Models\home;
// use Faker\Provider\UserAgent;
use Illuminate\Http\Request;
use Jenssegers\Agent\Agent;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $home = home::all()->first();

        return view('admin.home.index', compact('home'));
    }

    public function submit(HomeRequest $request)
    {
        $home = new home;

        $home->first_name = $request->first_name;
        $home->last_name = $request->last_name;
        $home->title = $request->title;
        $home->email = $request->email;
        $home->phone = $request->phone;
        $home->save();

        return back();
    }
}
