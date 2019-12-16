<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ContactsTableSeeder extends Seeder
{
    const CONTACT_COUNT = 20;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*setup*/
        $input = array("Erstgespräch", "Datenschutzberatung", "Erbrecht", "Prozessvertretung");
        $rand_keys = array_rand($input, 2);

        /*--------*/
        for ($i=0; $i < self::CONTACT_COUNT; $i++) {
            $rand_keys = array_rand($input, 2);
            $result = array("ja", "nein")[random_int(0, 1)];
            $result2 = array("ja", "nein")[random_int(0, 1)];
            $randphone = rand(1111111111, 9999999999);

            DB::table('contacts')->insert([
                'firstname' => str::random(10),
                'lastname' => str::random(10),
                'email' => str::random(10) . '@gmail.com',
                'phone' => $randphone,
                'thema' => $input[$rand_keys[0]],
                'rechtsschutz' => $result,
                'rechtsvertretung' => $result2


            ]);
        }
    }
}
