<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        return view('admin.dashboard.index');
    }

    public function table(Request $request)
    {
        $headers = ["Rendering engine", "Browser", "Platform(s)", "Engine version", "CSS grade"];
        $rows = [
            ["Trident", "Internet Explorer 4.0", "Win 95+", "10", "X"],
            ["Mozilla", "Firefox", "Win 95+", "8", "Y"],
            ["Opera", "Safari", "Duck Duck Go", "4", "X"],
            ["Edge", "Firefox Developer", "Win 98", "9", "Y"],
        ];
        return view('admin.dashboard.table', ["headers" => $headers, "rows" => $rows]);
    }
}
