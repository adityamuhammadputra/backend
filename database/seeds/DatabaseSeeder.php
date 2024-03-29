<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(PortofolioTableSeeder::class);
        $this->call(ImagesTableSeeder::class);
        $this->call(ContactsTableSeeder::class);
        $this->call(HeadersTableSeeder::class);
        $this->call(HeaderDetailsTableSeeder::class);
    }
}
