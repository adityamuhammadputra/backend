<?php

use App\HeaderDetail;
use Illuminate\Database\Seeder;

class HeaderDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('header_details')->delete();

        $detail = [
            [
                'id' => 1,
                'user_id' => 1,
                'header_id' => 1,
                'icon' => 'fa fa-instagram',
                'desc' => 'instagram',
                'link' => 'intagram.com/adityamuhammadputra',
            ],
            [
                'id' => 2,
                'user_id' => 1,
                'header_id' => 1,
                'icon' => 'fa fa-twitter',
                'desc' => 'twitter',
                'link' => 'twitter.com/adtptr',
            ],
            [
                'id' => 3,
                'user_id' => 1,
                'header_id' => 1,
                'icon' => 'fa fa-youtube',
                'desc' => 'youtube',
                'link' => 'youtube.com/adityamuhammadputra',
            ],
        ];

        HeaderDetail::insert($detail);
    }
}
