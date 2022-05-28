<?php

namespace App\Http\Controllers;

use App\Models\Family;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FamilyController extends Controller
{
    public function show(){
        $family = DB::table('families')->select('*')->orderBy('no_kk', 'asc')->get();
        return view("family.list", compact(["family"]), ["title" => "List KK"]);
    }

    public function showAdd(){
        return view("family.add", ["title" => "Tambah KK"]);
    }

    public function store(Request $request){

        Family::create($request->except(['_token', 'submit'])); 
        return redirect('/family');    
    }

    public function edit($id){
        $family = Family::find($id);
        return view("family.edit", compact(['family']), ["title" => "Edit KK"]);
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

    public function anggota($id){
        $kepkap = Family::find($id)->kep_keluarga;
        $resident = DB::table('residents')->select("residents.*",'families.no_kk as no_kk', 'families.kep_keluarga as kepkap')->where('family_id',"=","$id")
        ->join('families', "families.id",'=','residents.family_id')->orderBy('nik','asc')->get();
        return view('family.anggota', compact(["resident"]), ["title" => "List Anggota KK", "kepkap" => $kepkap]);
    }
}
