<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Kategori;
use App\Resim;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Intervention\Image\Facades\Image;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategoriler = Kategori::paginate(10);
        return view("admin.kategori_index", compact('kategoriler'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.kategori_create");
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
            "resim" => "required"
        ]);
        $request->merge([
            'slug' => str_slug($request->baslik)
        ]);
        $kategori = Kategori::create($request->all());

        $slug = str_slug("baslik", "-");
        if ($resim = $request->file("resim")) {
            $time = time();
            $resim_isim = $time . "." . $resim->getClientOriginalExtension();
            $thumb = "thumb_" . $time . "." . $resim->getClientOriginalExtension();

            Image::make($resim->getRealPath())->fit(1900, 872)->fill(array(0, 0, 0, 0.5))->save(public_path("uploads/" . $resim_isim));
            Image::make($resim->getRealPath())->fit(600, 275)->save(public_path("uploads/" . $thumb));

            $input = [];
            $input["isim"] = $resim_isim;
            $input["imageable_id"] = $kategori->id;
            $input["imageable_type"] = "App\Kategori";

            Resim::create($input);

        }

        Session::flash("durum", 1);
        return redirect("/kategori");
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
        $kategori = Kategori::find($id);
        return view("admin.kategori_edit",compact('kategori'));
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
    }
}
