<?php

use App\Student;

use Faker\Generator as Faker;

use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
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

        // $student_list = config('student');

        // foreach ($student_list as $student) {
        //    $newStudent = new Student();
        //    $newStudent->name = $student['name'];
        //    $newStudent->surname = $student['surname'];
        //    $newStudent->save();
        // }

        for ($i = 0; $i < 3; $i++) {
            $newStudent = new Student();
            $newStudent->name = $faker->name();
            $newStudent->surname = $faker->lastName();
            $newStudent->save();
        }
    }
}
