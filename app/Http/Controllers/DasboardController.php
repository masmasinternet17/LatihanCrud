<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DasboardController extends Controller
{
    public function Dashboard1() {
        return view("Dashboard1");
    }
    public function Dashboard2() {
        return view("Dashboardbor");
    }
}
