<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use App\English;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call('EnglishSeeder');
    }
}

class EnglishSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        English::truncate();
        for ($i = 0; $i < 20; $i++) {
            English::create([
                'word' => $faker->word()
            ]);
        }
    }
}

