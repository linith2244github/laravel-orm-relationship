<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $currentDate = Carbon::now()->toDateString();
        $students = [
            [
                "name"=> "Sothea",
                "created_at" => $currentDate,
                "updated_at"=> $currentDate
            ],
            [
                "name"=> "Tida",
                "created_at" => $currentDate,
                "updated_at"=> $currentDate
            ],
            [
                "name"=> "Phanha",
                "created_at" => $currentDate,
                "updated_at"=> $currentDate
            ],
            [
                "name"=> "Liza",
                "created_at" => $currentDate,
                "updated_at"=> $currentDate
            ],
            [
                "name"=> "Veasna",
                "created_at" => $currentDate,
                "updated_at"=> $currentDate
            ],
            [
                "name"=> "Vireak",
                "created_at" => $currentDate,
                "updated_at"=> $currentDate
            ],
            [
                "name"=> "Many",
                "created_at" => $currentDate,
                "updated_at"=> $currentDate
            ],
        ];
        DB::table("students")->insert($students);
    }
}
