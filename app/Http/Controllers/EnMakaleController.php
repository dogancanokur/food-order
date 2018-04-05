<?php

namespace App\Http\Controllers;

use App\Makale;

class EnMakaleController extends Controller
{
    //
    public function index($enslug)
    {
        $makale = Makale::where("enslug", $enslug)->first();

        return view("enmakale", compact('makale'));

    }
}
