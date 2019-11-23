<?php

use App\Header;
use Illuminate\Database\Seeder;

class HeadersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('headers')->delete();

        $headers = [
            [
                'id' => '1',
                'user_id' => 2,
                'title' => 'Hello My Name ADIT :)',
                'desc' => 'Come on Follow me at on my boring Social Media !',
            ],
        ];

        Header::insert($headers);
    }
}
