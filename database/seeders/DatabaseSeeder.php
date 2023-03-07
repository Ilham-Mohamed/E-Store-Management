<?php

namespace Database\Seeders;

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
        DB::table('users')->insert(['name'=>'Nayanthara',
        'email'=>'nayanthara@gmail.com','gender'=>'Female',
        'address'=>'India','picture' =>'https://1847884116.rsc.cdn77.org/tamil/gallery/actress/nayantra/nayanthara160919_1_11.jpg', 'mobile'=>'+987654321','role'=>'admin',
        'password'=> Hash::make('Nayan123'),
        ]);
    }
}
