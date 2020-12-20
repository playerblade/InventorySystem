<?php

use Illuminate\Database\Seeder;
use App\Price;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        factory(Price::class, 10)->create();
    }
}
