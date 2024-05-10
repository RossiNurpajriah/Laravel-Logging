<?php

namespace App\Http\Controllers;

use App\Models\Merchant;
use Illuminate\Http\Request;

class MerchantController extends Controller
{
    public function index()
    {
        $merchants = Merchant::with('products')->get();
        return view('merchant.index', compact('merchants'));
    }
}
