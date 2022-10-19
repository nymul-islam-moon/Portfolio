<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\HomeRequest;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        return view('admin.home.index');
    }

    public function submit(HomeRequest $request)
    {
        return "123";
    }
}
