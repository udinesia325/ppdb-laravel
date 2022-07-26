<?php

namespace App\Http\Controllers;

use App\Models\DataSiswa;
use Illuminate\Http\Request;

class DataSiswaController extends Controller
{
    //
    public function index()
    {
        return view("dashboard",["siswa"=>DataSiswa::all()]);
    }
    public function show($id)
    {
        return view("detailsiswa",["siswa"=>DataSiswa::find($id)]);
    }
}
