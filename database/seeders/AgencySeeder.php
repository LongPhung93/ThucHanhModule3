<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AgencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('agencies')->insert([
            ['id'=>1,
                'name'=>'BaVi',
                'phone'=>'0392797611',
                'email'=>'longhaiphung@gmail.com',
                'address'=>'Hanoi',
                'manager_name'=> 'Long Phung',
                'status'=>1
                ]
        ]);
    }
}
