<?php

use App\Student;

use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $student_list = [
        //     [
        //     'name'=> 'Gianni',
        //     'surname'=> 'Sperti'
        //     ],
        //     [
        //     'name'=> 'Piperita',
        //     'surname'=> 'Patty'
        //     ],
        //     [
        //     'name'=> 'Johnny',
        //     'surname'=> 'English'
        //     ]
        // ];

        $student_list = config('student');

        foreach ($student_list as $student) {
           $newStudent = new Student();
           $newStudent->name = $student['name'];
           $newStudent->surname = $student['surname'];
           $newStudent->save();
        }
    }
}
