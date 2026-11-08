<?php

namespace Database\Seeders;

use App\Models\Teacher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $teachers = [
            [
                'name' => 'رهام',
                'email' => 'reham@teacher.com',
                'phone' => '01012345678',
                'specialization' => 'رياضيات',
                'classroom_id' => 1,
            ],
            [
                'name' => 'محمد',
                'email' => 'mohammed@teacher.com',
                'phone' => '01012345678',
                'specialization' => 'علوم',
                'classroom_id' => 1,
            ],
            [
                'name' => 'لينا',
                'email' => 'lina@teacher.com',
                'phone' => '01012345678',
                'specialization' => 'عربي',
                'classroom_id' => 2,
            ],
            [
                'name' => 'مريم',
                'email' => 'maryam@teacher.com',
                'phone' => '01012345678',
                'specialization' => 'رسم',
                'classroom_id' => 2,
            ],
        ];
        foreach ($teachers as $teacher) {
            Teacher::create($teacher);
        }
    }
}
