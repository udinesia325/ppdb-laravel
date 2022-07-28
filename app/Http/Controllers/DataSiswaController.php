<?php

namespace App\Http\Controllers;

use App\Models\DataSiswa;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;


class DataSiswaController extends Controller
{
    //
    public function index()
    {
        return view("dashboard", ["siswa" => DataSiswa::all(), "page" => "dashboard"]);
    }
    public function show($id)
    {
        return view("detailsiswa", ["siswa" => DataSiswa::find($id)]);
    }
    public function register()
    {
        return view("register", ["page" => "register"]);
    }
    public function store(Request $request)
    {
        $dataForm = $request->input();
        $dataForm["thn_ajaran"] = date("Y");
        // dd($dataForm);
        DataSiswa::create($dataForm);
        return redirect("/siswa");
    }
    public function print($id = null)
    {
        if (is_null($id)) {
            return back();
        }
        $siswa = DataSiswa::find($id);
        if (is_null($siswa)) {
            return redirect("/siswa");
        }
        return Pdf::loadView("user/cetak", compact("siswa"))->download("Data " . $siswa->nm_peserta . ".pdf");
    }
}
