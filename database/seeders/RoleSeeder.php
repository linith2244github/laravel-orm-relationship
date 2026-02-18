<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            ["name"=> "App"],
            ["name"=> "Web"],
            ["name"=> "Network"],
            ["name"=> "Designer"],
            ["name"=> "Full STack"]
        ];
        DB::table("roles")->insert($roles);
    }
}
