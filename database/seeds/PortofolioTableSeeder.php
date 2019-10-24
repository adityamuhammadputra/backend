<?php

use App\Portofolio;
use Illuminate\Database\Seeder;

class PortofolioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Portofolio::truncate();

        // DB::table('portofolios')->delete();


        $data = [
            [
                'id' => 1,
                'user_id' => 1,
                'title' => 'Aplikasi Pertama',
                'desc' => 'Ini adalah test aplikasi Pertama',
            ],
            [
                'id' => 2,
                'user_id' => 2,
                'title' => 'Aplikasi Kedua',
                'desc' => 'Ini adalah test aplikasi Kedua',
            ],
            [
                'id' => 3,
                'user_id' => 1,
                'title' => 'Aplikasi Ketiga',
                'desc' => 'Ini adalah test aplikasi Ketiga',
            ],
        ];

        Portofolio::insert($data);
    }
}
