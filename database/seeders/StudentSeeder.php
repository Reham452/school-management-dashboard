<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $students =[
            [
                'name' => 'أحمد',
                'email' => 'ahmed@example.com',
                'phone' => '01012345678',
                'birth_date' => '2005-05-15',
                'classroom_id' => 1,
            ],
            [
                'name' => 'محمد',
                'email' => 'mohammed@example.com',
                'phone' => '01012345678',
                'birth_date' => '2005-05-1',
                'classroom_id' => 1,
            ],
            [
                'name' => 'خالد',
                'email' => 'khaled@example.com',
                'phone' => '0551112223',
                'birth_date' => '2006-03-12',
                'classroom_id' => 2,
            ],
            [
                'name' => 'نور الهدى',
                'email' => 'nour@example.com',
                'phone' => '0554445556',
                'birth_date' => '2006-08-20',
                'classroom_id' => 2,
            ],
            [
                'name' => 'جنى',
                'email' => 'jana@example.com',
                'phone' => '0559990001',
                'birth_date' => '2005-11-05',
                'classroom_id' => 3,
            ],
            [
                'name' => 'لين',
                'email' => 'leen@example.com',
                'phone' => '0593475821',
                'birth_date' => '2005-1-05',
                'classroom_id' => 3,
            ],
            [
                'name' => 'غسان',
                'email' => 'ghassan@example.com',
                'phone' => '0545966852',
                'birth_date' => '2005-5-04',
                'classroom_id' => 3,
            ],
            [
                'name' => 'حمزة',
                'email' => 'hamza@example.com',
                'phone' => '0548741259',
                'birth_date' => '2005-5-04',
                'classroom_id' => 4,
            ],
        ];

        foreach ($students as $student) {
            Student::create($student);
        }
    }
}
