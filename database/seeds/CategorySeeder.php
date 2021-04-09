<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
              'type_category'=>'A1',
                'name'=>'ca phe',
                'describe'=>'thom'
            ], [
              'type_category'=>'A2',
                'name'=>'tra',
                'describe'=>'mat'
            ], [
                'type_category' => 'A3',
                'name' => 'sinh to',
                'describe' => 'dac biet'
            ],


        ];
        DB::table('categories')->insert($data);
    }
}
