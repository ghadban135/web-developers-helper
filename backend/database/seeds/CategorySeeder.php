<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category')->insert([
            [
            'name' =>'Front-end',
            ],
            [
            'name' =>'Back-end',
            ],
            [
             'name' =>'Programing Language',
            ],
            [
            'name' =>'Database',
            ],
            [
            'name' =>'Team Collaboration',
            ],
            [
            'name' =>'Build Tools',
            ],
            [
            'name' =>'Mobile App',
            ],
            [
            'name' =>'Testing',
            ],
        ]);
    }
}
