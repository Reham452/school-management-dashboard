<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Classroom;

class ClassroomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $classrooms =[
            [
            'name'=>'الصف الأول',
            'description'=>'الصف الأول للمرحلة الإبتدائية',
            'capacity'=> 20,
            ],
            [
            'name'=>'الصف الثاني',
            'description'=>'الصف الثاني للمرحلة الإبتدائية',
            'capacity'=> 20,
            ],
            [
            'name'=>'الصف الثالث',
            'description'=>'الصف الثالث للمرحلة الإبتدائية',
            'capacity'=> 25,
            ],
            [
            'name'=>'الصف الرابع',
            'description'=>'الصف الرابع للمرحلة الإبتدائية',
            'capacity'=> 25,
            ],
            [
            'name'=>'الصف الخامس',
            'description'=>'الصف الخامس للمرحلة الإبتدائية',
            'capacity'=> 28,
            ],
            [
            'name'=>'الصف السادس',
            'description'=>'الصف السادس للمرحلة الإبتدائية',
            'capacity'=> 28,
            ],
            [
            'name'=>'الصف السابع',
            'description'=>'الصف السابع للمرحلة الإعدادية',
            'capacity'=> 30,
            ],
            [
            'name'=>'الصف الثامن',
            'description'=>'الصف الثامن للمرحلة الإعدادية',
            'capacity'=> 30,
            ],
            [
            'name'=>'الصف التاسع',
            'description'=>'الصف التاسع للمرحلة الإعدادية',
            'capacity'=> 30,
            ]
        ];
        foreach ($classrooms as $classroom) {
            Classroom::create($classroom);
        }
    }
}
