<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $currentDate = Carbon::now()->format("Y-m-d");
        $courses = [
            [
                "name" => "C/C++",
                "created_at" => $currentDate,
                "updated_at"=> $currentDate
            ],
            [
                "name" => "Java",
                "created_at" => $currentDate,
                "updated_at"=> $currentDate
            ],
            [
                "name" => "DBWS",
                "created_at" => $currentDate,
                "updated_at"=> $currentDate
            ],
            [
                "name" => "PHP/MySql",
                "created_at" => $currentDate,
                "updated_at"=> $currentDate
            ],[
                "name" => "C#",
                "created_at" => $currentDate,
                "updated_at"=> $currentDate
            ],[
                "name" => "Python",
                "created_at" => $currentDate,
                "updated_at"=> $currentDate
            ],
            [
                "name" => "SQL",
                "created_at" => $currentDate,
                "updated_at"=> $currentDate
            ],
            [
                "name" => "Ruby",
                "created_at" => $currentDate,
                "updated_at"=> $currentDate
            ],
            [
                "name" => "Web Front-end",
                "created_at" => $currentDate,
                "updated_at"=> $currentDate
            ],
            [
                "name" => "Web Front-End Framework",
                "created_at" => $currentDate,
                "updated_at"=> $currentDate
            ],
            [
                "name" => "Web Vue",
                "created_at" => $currentDate,
                "updated_at"=> $currentDate
            ],
            [
                "name" => "Laravel",
                "created_at" => $currentDate,
                "updated_at"=> $currentDate
            ],
            [
                "name" => "Dart/Flutter",
                "created_at" => $currentDate,
                "updated_at"=> $currentDate
            ],
            [
                "name" => "React",
                "created_at" => $currentDate,
                "updated_at"=> $currentDate
            ],
            [
                "name" => "Spring Boot",
                "created_at" => $currentDate,
                "updated_at"=> $currentDate
            ],
            [
                "name" => "DJango",
                "created_at" => $currentDate,
                "updated_at"=> $currentDate
            ],
        ];
        DB::table('courses')->insert($courses);
    }
}
