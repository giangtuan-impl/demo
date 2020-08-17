<?php

namespace Giang\Demo\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class DemoController extends Controller
{
    public function demoAction(Request $request)
    {
        return view("demo-view::index");
    }
}
