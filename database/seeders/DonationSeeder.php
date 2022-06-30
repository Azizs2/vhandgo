<?php


namespace Database\Seeders;

use App\Models\Donation;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class DonationSeeder extends Seeder
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
            $donation = new Donation();

            $donation->admin_id = rand(1,10);
            $donation->donation_amount = rand(50000, 100000);
            $donation->description = $faker->text;
            $donation->date_start = $faker->date;
            $donation->support_id = rand(1,10);
            $donation->status = $faker->boolean;
            $donation->save();
        }
    }
}
