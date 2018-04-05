<?php

namespace App\Http\Controllers\Admin;

use App\Ayar;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AyarController extends Controller
{
    public function index()
    {
        $ayarlar = Ayar::all();
        return view("admin/siteayarlari", compact("ayarlar"));
    }

    public function guncelle(Request $request)
    {

        $this->validate($request, [
            "baslik" => "required",
            "enbaslik" => "required",
            "iceriktitle" => "required",
            "eniceriktitle" => "required",
            "subiceriktitle" => "required",
            "ensubiceriktitle" => "required",
            "author" => "required",
            "aciklama" => "required",
            "keywords" => "required",
        ]);

        Ayar::find(1)->update(["value" => $request->baslik]);
        Ayar::find(2)->update(["value" => $request->enbaslik]);
        Ayar::find(3)->update(["value" => $request->iceriktitle]);
        Ayar::find(4)->update(["value" => $request->eniceriktitle]);
        Ayar::find(5)->update(["value" => $request->subiceriktitle]);
        Ayar::find(6)->update(["value" => $request->ensubiceriktitle]);
        Ayar::find(7)->update(["value" => $request->author]);
        Ayar::find(8)->update(["value" => $request->aciklama]);
        Ayar::find(9)->update(["value" => $request->keywords]);
        //  Ayar::where("name", "baslik")->update(["value" => $request->baslik]);

        Session::flash("durum", 1);
        return redirect()->back();
    }
}
