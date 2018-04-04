<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{


    protected $table = "kategoriler";

    protected $fillable = [
        "baslik",
        "slug",

        "enbaslik",
        "enslug"
    ];

    //  protected $appends = ["kucuk_resim"];
//
    //  public function resim()
    //  {
    //      return $this->morphOne("App\Resim","imageable");
    //  }
//
    //  public function getKucukResimAttribute()
    //  {
    //      $resim = asset("uploads/thumb_".$this->resim()->first()->isim);
    //      return '<img src="'.$resim.'" class="img-thumbnail" width="150" />';
    //  }


}
