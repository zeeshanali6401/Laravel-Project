<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\customers;
use Faker\Factory as faker;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for($i=1; $i<501; $i++){
        $customer = new customers;
        $customer->name = $faker->name;
        $customer->fatherName = "Misbah";
        $customer->motherName = "Nusrat";
        $customer->address = $faker->address;
        $customer->inlineRadioOptions = "M";
        $customer->state = $faker->state;
        $customer->city = $faker->city;
        $customer->dob = $faker->date();
        $customer->postalCode = "54000";
        $customer->course = "BSCS";
        $customer->email = $faker->email;
        $customer->save();
        }
    }
}
