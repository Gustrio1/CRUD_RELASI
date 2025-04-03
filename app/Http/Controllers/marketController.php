<?php

namespace App\Http\Controllers;

use App\Models\Market;
use Illuminate\Http\Request;

class marketController extends Controller
{
    public function index()
    {
        $market = Market::all();
        return view('market', compact('market'));
    }

    public function create()
    {
        return view('from-market');
    }


    public function store(Request $request)
    {
        request()->validate([
            'nama_market' => 'required',
        ]);
        Market::create([
            'nama_market' => $request->nama_market,
        ]);


        return redirect()->route('market')->with(['success' => 'Data Berhasil di simpan!']);
    }
}
