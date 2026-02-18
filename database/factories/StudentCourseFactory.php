<?php

namespace Database\Factories;

use App\Models\Course;
use App\Models\Student;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\StudentCourse>
 */
class StudentCourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $studentIds = Student::pluck("id")->toArray();
        $ranStudentId = collect($studentIds)->random();

        $courseIds = Course::pluck("id")->toArray();
        $ranCourseId = collect($courseIds)->random();

        $currentDate = Carbon::now()->format("Y-m-d");
        
        return [
            "student_id"=> $ranStudentId,
            "course_id"=> $ranCourseId,
            "created_at" => $currentDate,
            "updated_at"=> $currentDate
        ];
    }
}
