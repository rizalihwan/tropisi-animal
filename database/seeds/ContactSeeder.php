<?php

use Illuminate\Database\Seeder;
use \App\Contact;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contact::create([
            'email' => 'rizalihwan94@gmail.com',
            'slug' => 'rizal-ihwan-sulaiman'.\Str::random(10),
            'phone' => '+6285770254568',
            'address' => 'Kabupaten Bogor, Jawa Barat',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
