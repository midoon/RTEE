<?php

namespace App\Http\Controllers;

use App\Models\Family;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WargaController extends Controller
{
    public function index(){
        return view("warga-dashboard.index", ["title" => "Warga | DASHBOARD"]);
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
        return view("warga.list-resident",compact(['resident']), ["title" => "List Warga"]);
    }

    public function listFamily(){
        $family = DB::table('families')->select('*')->orderBy('no_kk', 'asc')->get();
        return view('warga.list-family', compact(['family']), ["title" => "List KK"]);
    }

    public function anggota($id){
        $kepkap = Family::find($id)->kep_keluarga;
        $resident = DB::table('residents')->select("residents.*",'families.no_kk as no_kk', 'families.kep_keluarga as kepkap')->where('family_id',"=","$id")
        ->join('families', "families.id",'=','residents.family_id')->orderBy('nik','asc')->get();
        return view('warga.anggota-family', compact(["resident"]), ["title" => "List Anggota KK", "kepkap" => $kepkap]);
    }
}
