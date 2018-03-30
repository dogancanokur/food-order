<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Makale extends Model
{
    protected $table = "makaleler";

    protected $fillable = [
        "baslik",
        "slug",
        "icerik",
        "user_id",
        "kategori_id",
        "durum"
    ];

    public function user()
    {
        return $this->belongsTo("App\User");
    }

    public function kategori()
    {
        return $this->belongsTo("App\Kategori");
    }
}
