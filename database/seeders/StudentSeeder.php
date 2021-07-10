<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;
use Faker\Factory;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Factory::create();

        $gender = ['male','female'];

        for($i=1; $i <= 50; $i++){

            shuffle($gender);
            
            Student::create([
                'name'=>$faker->name($gender[0]),
                'age'=>$faker->numberBetween(18,100),
                'gender'=>$gender[0],
                'city'=>$faker->city()
            ]);
        }
        
    }
}
