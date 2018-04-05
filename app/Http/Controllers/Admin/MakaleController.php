<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Kategori;
use App\Makale;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class MakaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $makaleler = Makale::orderBy("created_at", "desc")->paginate(10);
        return view("admin.makale_index", compact('makaleler'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategoriler = Kategori::lists("baslik", "id")->all();

        return view("admin.makale_create", compact('kategoriler'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            "baslik" => "required|max:255",
            "enbaslik" => "required|max:255",
            "kategori_id" => "required",
            "icerik" => "required",
            "enicerik" => "required"

        ]);

        $request->merge([
            'slug' => str_slug($request->baslik),
            'enslug' => str_slug($request->enbaslik),
            'user_id' => Auth::user()->id,
            'durum' => 1
            //durum için switch yapılabilir ajaxla
        ]);
        $input = $request->all();


        $makale = Makale::create($input);

        Session::flash("durum", 1);
        return redirect("/makale");
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $makale = Makale::find($id);
        $kategoriler = Kategori::lists("baslik","id")->all();

        return view("admin.makale_edit",compact('makale','kategoriler'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request,[
            "baslik" => "required|max:255",
            "enbaslik" => "required|max:255",
            "icerik" => "required",
            "enicerik" => "required",
            "kategori_id" => "required"
        ]);
        $request->merge([
            'slug' => str_slug($request->baslik),
            'enslug' => str_slug($request->enbaslik)
        ]);
        $input = $request->all();
        $makale = Makale::find($id);
        $makale->update($input);

        Session::flash("durum",1);
        return redirect("/makale");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Makale::destroy($id);

        Session::flash("durum",1);

        return redirect("/makale");
    }

    //   public function durumDegis(Request $request)
    //   {
    //       $id = $request->id;
    //       $durum = ($request->durum == true) ? 1 : 0;
    //       Makale::find($id)->update(["durum" => $durum]);
    // }
}
