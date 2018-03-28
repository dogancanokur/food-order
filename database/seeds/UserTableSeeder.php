<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "name" => "Ahmet Doğancan Okur",
            "email" => "ahmetdogancan.okur@cc.bau.edu.tr",
            "password" => bcrypt("bau2018")
        ]);

        User::create([
            "name" => "Abdullah Uyulur",
            "email" => "abdullah.uyulur@cc.bau.edu.tr",
            "password" => bcrypt("bau2018")
        ]);

        DB::table("role_user")->insert(["role_id" =>  1, "user_id" => 1 ]);
        DB::table("role_user")->insert(["role_id" =>  2, "user_id" => 1 ]);
        DB::table("role_user")->insert(["role_id" =>  3, "user_id" => 1 ]);

        DB::table("role_user")->insert(["role_id" =>  1, "user_id" => 2 ]);
        DB::table("role_user")->insert(["role_id" =>  2, "user_id" => 2 ]);
        DB::table("role_user")->insert(["role_id" =>  3, "user_id" => 2 ]);
    }
}
