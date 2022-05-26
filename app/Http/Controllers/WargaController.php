<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WargaController extends Controller
{
    public function index(){
        return view("warga-dashboard.index");
    }

    public function login(Request $request){
        $request->session()->put("warga","warga");
            return redirect("/");
    }

    public function logout(Request $request){
        $request->session()->forget("warga");
        return redirect("/");
    }

    //data
    public function listResident(){
        $resident = DB::table('residents')->select("residents.*",'families.no_kk as no_kk', 'families.kep_keluarga as kepkap')->join('families', "families.id",'=','residents.family_id')->orderBy('nik','asc')->get();
        return view("warga.list-resident",compact(['resident']));
    }

    public function listFamily(){
        $family = DB::table('families')->select('*')->orderBy('no_kk', 'asc')->get();
        return view('warga.list-family', compact(['family']));
    }

    public function anggota($id){
        $resident = DB::table('residents')->select("residents.*",'families.no_kk as no_kk', 'families.kep_keluarga as kepkap')->where('family_id',"=","$id")
        ->join('families', "families.id",'=','residents.family_id')->orderBy('nik','asc')->get();
        return view('warga.anggota-family', compact(["resident"]));
    }
}
