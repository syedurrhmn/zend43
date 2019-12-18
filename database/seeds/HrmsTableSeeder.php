<?php

use App\Models\hrms;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
 
class HrmsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
 
        hrms::create([
            'name'      =>  $faker->name,
            'email'     =>  'hr@hr.com',
            'password'  =>  bcrypt('password'),
        ]);
    }
}
