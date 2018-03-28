<?php

use App\Ayar;
use Illuminate\Database\Seeder;

class AyarTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ayar::create(["name" => "baslik", "value" => "Bahçeşehir Üniversitesi IT"]);
        Ayar::create(["name" => "author", "value" => "Bahçeşehir Üniversitesi IT"]);
        Ayar::create(["name" => "aciklama", "value" => "Bahçeşehir Üniversitesi IT"]);
        Ayar::create(["name" => "keywords", "value" => "bahçeşehir üniversitesi, IT, bau"]);

    }
}
