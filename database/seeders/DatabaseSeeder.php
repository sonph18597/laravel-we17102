<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    //    $array=[];
    //    for($i=0;$i<10;$i++){
    //        array_push($array,[
    //            "name"=>"Nguyễn Xuân Hậu",
    //            "email"=>"nguyenxuanhau".($i+1)."@fpt.edu.vn",
    //            "password"=>Hash::make('12345678')
    //        ],
    //        );
    //    }
    //    DB::table("users")->insert(
    //        $array
    //    );
//        $array=[];
//        for($i=0;$i<10;$i++){
//            array_push($array,[
//                "category_name"=>"Ao".($i+1),
//                "status"=>"1",
//
//            ],
//            );
//        }
//        DB::table("category")->insert(
//            $array
//        );
        $array=[];
        for($i=0;$i<10;$i++){
            array_push($array,[
                "category_id"=>1,
                "product_name"=>"Áo phông".($i+1),
                "price"=>"123123",
            ],
            );
        }
        DB::table("products")->insert(
            $array
        );
    }
}
