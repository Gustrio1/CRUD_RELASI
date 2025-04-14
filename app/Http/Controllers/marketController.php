<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Market;
use App\Models\Product;
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
        $product = Product::all();
        $company = Company::all();
        return view('from-market', compact('product', 'company'));
    }


    public function store(Request $request)
    {
        request()->validate([
            'nama_market' => 'required',
            'product_id' => 'required|exists:product,id',
            'company_id' => 'required|exists:company,id',


        ]);
        Market::create([
            'nama_market' => $request->nama_market,
            'product_id' => $request->product_id,
            'company_id' => $request->company_id,
        ]);


        return redirect()->back()->with(['success' => 'Data Berhasil di simpan!']);
    }


    public function edit($id)
    {
        $product = Product::all();
        $company = Company::all();
        $edit = Market::find($id);
        return view('edit-market', compact('edit', 'product', 'company'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_market' => 'required',
            'product_id' => 'required|exists:product,id',
            'company_id' => 'required|exists:company,id',
        ]);
        $market = Market::find($id);





        $market->update([
            'nama_market' => $request->nama_market,
            'product_id' => $request->product_id,
            'company_id' => $request->company_id,
        ]);


        return redirect('/market')->with(['success' => 'Data Berhasil di ubah!']);
    }
}
