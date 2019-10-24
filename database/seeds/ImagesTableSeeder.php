<?php

use App\Image;
use Illuminate\Database\Seeder;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Image::truncate();

        $images = [
            [
                'id' => 1,
                'user_id' => 1,
                'portofolio_id' => 1,
                'title' => 'Title dari portopolio 1',
                'desc' => 'Title dari portopolio 1',
                'temp' => '/uploads/BPK/Manpro/Capture.png'
            ],
            [
                'id' => 2,
                'user_id' => 2,
                'portofolio_id' => 2,
                'title' => 'Title2 dari portopolio 2',
                'desc' => 'Title2 dari portopolio 2',
                'temp' => '/uploads/BPN-Kabbogor/SKSK/1.png'
            ],
            [
                'id' => 3,
                'user_id' => 1,
                'portofolio_id' => 3,
                'title' => 'Title2 dari portopolio 2',
                'desc' => 'Title2 dari portopolio 2',
                'temp' => '/uploads/PNB/capture2.png'
            ]
        ];

        Image::insert($images);
    }
}
