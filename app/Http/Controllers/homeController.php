<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Market;
use App\Models\Product;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function home()
    {
        $markets = Market::with(['product', 'company'])->get();
        return view('home', compact('markets'));
    }
}
