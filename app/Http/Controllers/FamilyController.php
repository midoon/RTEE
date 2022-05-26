<?php

namespace App\Http\Controllers;

use App\Models\Family;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FamilyController extends Controller
{
    public function show(){
        $family = DB::table('families')->select('*')->orderBy('no_kk', 'asc')->get();
        return view("family.list", compact(["family"]));
    }

    public function showAdd(){
        return view("family.add");
    }

    public function store(Request $request){

        Family::create($request->except(['_token', 'submit'])); 
        return redirect('/family');    
    }

    public function edit($id){
        $family = Family::find($id);
        return view("family.edit", compact(['family']));
    }

    public function update($id, Request $request){
        $family = Family::find($id);
        $family->update($request->except(['_token','submit']));
        return redirect("/family");
    }

    public function destroy($id){
        $family = Family::find($id);
        $family->delete();
        return redirect('/family');
    }
}
