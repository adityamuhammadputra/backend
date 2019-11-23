<?php

use App\Contact;
use Illuminate\Database\Seeder;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->delete();
        // Contact::truncate();

        $contacts = [
            [
                'id' => 1,
                'title' => 'Out Location',
                'desc' => 'Cinagara Village, Caringin, Bogor district, 16730. Indonesia Raya',
                'icon' => 'fa fa-map-marker',
                'url' => '#',
                'user_id' => 1,
            ],
            [
                'id' => 2,
                'title' => 'Telephone',
                'desc' => '+62 81 6262 439',
                'icon' => 'fa fa-phone',
                'url' => '#',
                'user_id' => 1,
            ],
            [
                'id' => 3,
                'title' => 'Send Email',
                'desc' => 'adityamuhammadputra@gmail.com',
                'icon' => 'fa fa-envelope-o',
                'url' => '#',
                'user_id' => 1,
            ],
        ];

        Contact::insert($contacts);
    }
}
