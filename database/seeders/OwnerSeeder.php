<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class OwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('owners')->insert([
            [
                'name' => 'test',
                'email' => 'test@test',
                'password' => Hash::make('12345678'),
                'created_at' => '2022/01/05'
            ],
            [
                'name' => 'test1',
                'email' => 'test1@test',
                'password' => Hash::make('12345678'),
                'created_at' => '2022/01/05'
            ],
            [
                'name' => 'test2',
                'email' => 'test2@test',
                'password' => Hash::make('12345678'),
                'created_at' => '2022/01/05'
            ],
            [
                'name' => 'test3',
                'email' => 'test3@test',
                'password' => Hash::make('12345678'),
                'created_at' => '2022/01/05'
            ],
            [
                'name' => 'test4',
                'email' => 'test4@test',
                'password' => Hash::make('12345678'),
                'created_at' => '2022/01/05'
            ],
            [
                'name' => 'test5',
                'email' => 'test5@test',
                'password' => Hash::make('12345678'),
                'created_at' => '2022/01/05'
            ],
        ]);
    }
}
