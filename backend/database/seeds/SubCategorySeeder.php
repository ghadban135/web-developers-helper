<?php

use Illuminate\Database\Seeder;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subcategory')->insert([
            [
            'name' =>'HTML/CSS',
            'category_id'=>'0'
            ],
            [
            'name' =>'REACT',
            'category_id'=>'0'
            ],
            [
            'name' =>'ANGULAR',
            'category_id'=>'0'
            ],
            [
            'name' =>'VUE.js',
            'category_id'=>'0'
            ],
            [
            'name' =>'Laravel',
            'category_id'=>'1'
            ],
            [
            'name' =>'Spring Boot',
            'category_id'=>'1'
            ],
            [
            'name' =>'Express.js',
            'category_id'=>'1'
            ],
            [
            'name' =>'DJango',
            'category_id'=>'1'
            ],
            [
            'name' =>'PHP',
            'category_id'=>'2'
            ],
            [
            'name' =>'JavaScript',
            'category_id'=>'2'
            ],
            [
            'name' =>'Python',
            'category_id'=>'2'
            ],
            [
            'name' =>'Java',
            'category_id'=>'2'
            ],
            [
            'name' =>'Rust',
            'category_id'=>'2'
            ],
            [
            'name' =>'MYSQL',
            'category_id'=>'3'
            ],
            [
            'name' =>'POSTGRESQL',
            'category_id'=>'3'
            ],
            [
            'name' =>'Mongo DB',
            'category_id'=>'3'
            ],
            [
            'name' =>'Git',
            'category_id'=>'4'
            ],
            [
            'name' =>'Agile',
            'category_id'=>'4'
            ],
            [
            'name' =>'Waterfall development',
            'category_id'=>'4'
            ],
            [
            'name' =>'NPM',
            'category_id'=>'5'
            ],
            [
            'name' =>'YARN',
            'category_id'=>'5'
            ],
            [
            'name' =>'Docker',
            'category_id'=>'5'
            ],
            [
            'name' =>'SSH',
            'category_id'=>'5'
            ],
            [
            'name' =>'React Native',
            'category_id'=>'6'
            ],
            [
            'name' =>'Flutter',
            'category_id'=>'6'
            ],
            [
            'name' =>'Testing Methodologies',
            'category_id'=>'7'
            ],
            [
            'name' =>'Test Rumers',
            'category_id'=>'7'
            ],
        ]);
    }
}
