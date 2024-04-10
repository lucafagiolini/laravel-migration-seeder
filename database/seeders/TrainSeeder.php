<?php

namespace Database\Seeders;

use App\Models\Train;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{

    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 6; $i++) {
            $newTrain = new Train();
            $newTrain->company = $faker->company();
            $newTrain->starting_station = $faker->city();
            $newTrain->arriving_station = $faker->city();
            $newTrain->departure_time = $faker->dateTime();
            $newTrain->arriving_time = $faker->dateTime();
            $newTrain->train_code = $faker->randomNumber(5);
            $newTrain->carriage_number = $faker->randomNumber(2);
            $newTrain->in_time = $faker->boolean();
            $newTrain->is_canceled = $faker->boolean();
            $newTrain->save();
        }
    }
}
