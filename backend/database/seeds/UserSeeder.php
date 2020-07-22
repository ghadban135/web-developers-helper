<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
            'user_name' =>'John',
            'email'=>'shsj@hj',
            'password'=>'11'
            ],
            [
            'user_name' =>'Anna',
            'email'=>'sbhsj@hj',
            'password'=>'11'
            ],
            [
            'user_name' =>'Rex',
            'email'=>'shlsj@hj',
            'password'=>'11'
            ],
            [
            'user_name' =>'Peter',
            'email'=>'shssj@hj',
            'password'=>'11'
            ],
            [
            'user_name' =>'Coderrr',
            'email'=>'sahsj@hj',
            'password'=>'11'
            ],
            [
            'user_name' =>'Stephanie',
            'email'=>'eshsj@hj',
            'password'=>'11'
            ],
            [
            'user_name' =>'yamen',
            'email'=>'ushsj@hj',
            'password'=>'11'
            ],
            [
            'user_name' =>'Samer',
            'email'=>'sophsj@hj',
            'password'=>'11'
            ],
            [
            'user_name' =>'james',
            'email'=>'shfgsj@hj',
            'password'=>'11'
            ],
            [
            'user_name' =>'george',
            'email'=>'ssdfhsj@hj',
            'password'=>'11'
            ],
            [
            'user_name' =>'devone',
            'email'=>'shojlsj@hj',
            'password'=>'11'
            ],
            [
            'user_name' =>'sarah',
            'email'=>'shrfcsj@hj',
            'password'=>'11'
            ],
            [
            'user_name' =>'ibraham',
            'email'=>'shghkjksj@hj',
            'password'=>'11'
            ],
            [
            'user_name' =>'alex',
            'email'=>'shtrdsj@hj',
            'password'=>'11'
            ],
            [
            'user_name' =>'alissar',
            'email'=>'shoosj@hj',
            'password'=>'11'
            ],
            [
            'user_name' =>'Britney',
            'email'=>'shsplkjj@hj',
            'password'=>'11'
            ],
            [
            'user_name' =>'Pascale',
            'email'=>'shcvbsj@hj',
            'password'=>'11'
            ],
            [
            'user_name' =>'Mario',
            'email'=>'shsj@hjio',
            'password'=>'11'
            ],
            [
            'user_name' =>'Google',
            'email'=>'shsxfsj@hj',
            'password'=>'11'
            ],
            [
            'user_name' =>'Zlatan',
            'email'=>'suighghsj@hj',
            'password'=>'11'
            ],
        ]);
    }
}
