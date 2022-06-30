<?php

namespace Database\Seeders;

use App\Models\Support;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class SupportSeeder extends Seeder
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
            $support = new Support();

            $support->title = $faker->name;
            $support->donation_target = rand(100000, 150000);
            $support->collected_donations = rand(50000,80000);
            $support->description = $faker->text();
            $support->date_start = $faker->date;
            $support->date_end = $faker->date();
            $support->save();
        }
    }
}
