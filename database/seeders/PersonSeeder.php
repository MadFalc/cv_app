<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

// FAKER
use Faker\Factory as Faker;
use Faker\Provider\DateTime;
use Faker\Provider\en_US\Address;
// use Faker\Provider\en_US\Person;
use Faker\Provider\en_US\PhoneNumber;
use Faker\Provider\Internet;

// FACTORY
use App\Models\Person;


class PersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('persons')->insert([
            'first_name' => 'NepTomi',
            'last_name' => 'Achternaam',
            'phone' => '0612378900',
            'address' => 'Ik Woon Hier 117, 9292 AA Groningen',
            'email' => 'Nep@Tomi.nl',
            'date_of_birth' => '0000-01-01',
            'nationality' => 'Coolguy',
            'linkedin_profile' => 'https://www.lenkiden.com/in/nep-tomi/'
        ]);
        DB::table('persons')->insert([
            'first_name' => Str::random(10),
            'last_name' => Str::random(10),
            'phone' => Str::random(9),
            'address' => Str::random(10),
            'email' => Str::random(8) . '@gmail.com',
            'date_of_birth' => rand(1900, 2023) . '-' . rand(1, 12) . '-' . rand(1, 30),
            'nationality' => Str::random(10),
            'linkedin_profile' => 'https://www.' . Str::random(10) . '.nl/'
        ]);
        $faker = Faker::create();
        DB::table('persons')->insert([
            'first_name' => $faker->firstName(),
            'last_name' => $faker->lastName(),
            'phone' => $faker->phoneNumber,
            'address' => 'Antarctica lane 1',
            'email' => $faker->email(),
            'date_of_birth' => $faker->dateTimeBetween('-30 years', 'now'),
            'nationality' => 'Ik kom uit Antarctica',
            'linkedin_profile' => $faker->url
        ]);
        DB::table('persons')->insert([
            'first_name' => $faker->firstName(),
            'last_name' => $faker->lastName(),
            'phone' => $faker->phoneNumber,
            'address' => $faker->address,
            'email' => $faker->email(),
            'date_of_birth' => $faker->dateTimeBetween('-30 years', 'now'),
            'nationality' => $faker->country,
            'linkedin_profile' => $faker->url
        ]);

        // USE YOUR NEWLY CREATED FACTORY TO CREATE DUMMY DATA.
        $persons = Person::factory()->count(10)->create();
    }
}