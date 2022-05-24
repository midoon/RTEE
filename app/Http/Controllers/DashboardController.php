<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function show(){
        return view("dashboard.index");
    }

    public function listResident(){
        return redirect("/resident");
    }

    public function addResident(){
        return redirect("/resident/add");    
    }

    public function listFamily(){
        return redirect("/family");
    }

    public function addFamily(){
        return redirect("/family/add");
    }

}
