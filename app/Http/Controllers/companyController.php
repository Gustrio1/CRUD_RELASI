<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class companyController extends Controller
{
    public function index()
    {
        $company = Company::all();
        return view('company', compact('company'));
    }

    public function create()
    {
        return view('from-company');
    }

    public function store(Request $request)
    {
        request()->validate([
            'nama_company' => 'required',
            'alamat_company' => 'required',
            'kontak_company' => 'required',
        ]);

        Company::create([
            'nama_company' => $request->nama_company,
            'alamat_company' => $request->alamat_company,
            'kontak_company' => $request->kontak_company,
        ]);
        return redirect()->route('company')->with(['success' => 'Data Berhasil Disimpan!']);
    }
}
