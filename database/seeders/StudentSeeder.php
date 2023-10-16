<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;
use App\Models\StudentModel;
use Faker\Factory as Faker;


class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
    for($i = 1 ; $i <= 20 ; $i++)
    {
        $student = new StudentModel;
        $student->student_name = $faker->name;
        $student->student_address = $faker->address;
        $student->city =  $faker->city;
        $student->dateOfBirth = now();
        $student->rating = "4";
        $student->save();
        // php artisan db:saeed                 use to add fake data in database
    }
}
}
