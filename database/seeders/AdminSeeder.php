<?php

namespace Database\Seeders;

use App\Models\Admin;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i=0; $i <10; $i++){
            $admin = new Admin;

            $admin->name = $faker->name;
            $admin->email = $faker->email;
            $admin->phone_number = '0821'.$faker->randomNumber(8);
            $admin->save();
        }
    }
}
