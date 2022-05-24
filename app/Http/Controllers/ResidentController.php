<?php

namespace App\Http\Controllers;

use App\Models\Family;
use App\Models\Resident;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ResidentController extends Controller
{
    public function show(){
        $resident = DB::table('residents')->select('residents.*', 'families.no_kk as no_kk','families.kep_keluarga as kepkap')
                    ->join('families','residents.family_id','=','families.id')
                    ->orderBy('no_kk','asc')
                    ->orderBy('nik','asc')
                    ->get();

        // $resident = DB::table('residents')->select("*")->get();

        // dd($resident);
        return view("resident.list",compact(['resident']));
    }

    public function showAdd(){
        $families = DB::table('families')->select('*')->orderBy('no_kk', 'asc')->get();
        return view("resident.add", compact(['families']));
    }

    public function store(Request $request){
        // dd($request);
        Resident::create($request->except(['_token','submit']));
        return redirect("/resident");
    }

    public function edit($id){
        
        $resident = Resident::find($id);
        $families = DB::table('families')->select('*')->orderBy('no_kk', 'asc')->get();
        return view("resident.edit", compact(['resident','families']));
    }

    public function update($id, Request $request){
        $resident = Resident::find($id);
        $resident->update($request->except(['_token','submit']));
        return redirect("/resident");
    }

    public function destroy($id){
        // dd($id);
        $resident = Resident::find($id);
        $resident->delete();
        return redirect("/resident");
    }
}
