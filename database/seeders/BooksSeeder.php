<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            'name' => Str::random(5),
            'author' => Str::random(5)
            // [
            //     'name' => 'abc',
            //     'content'=> 'This is content of abc book'
            // ],
            // [
            //     'name' => 'aba',
            //     'content'=> 'This is content of aba book'
            // ]

        ]);
    }
}
