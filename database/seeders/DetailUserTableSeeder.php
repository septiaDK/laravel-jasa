<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\DetailUser;

class DetailUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $detail_user = [
            [
                'users_id'       => 1,
                'photo'          => NULL,
                'role'           => 'Website Developer',
                'contact_number' => NULL,
                'biography'      => NULL,
                'created_at'     => date("Y-m-d H:i:s"),
                'updated_at'     => date("Y-m-d H:i:s"),
            ],
            [
                'users_id'       => 2,
                'photo'          => NULL,
                'role'           => 'UI Designer',
                'contact_number' => NULL,
                'biography'      => NULL,
                'created_at'     => date("Y-m-d H:i:s"),
                'updated_at'     => date("Y-m-d H:i:s"),
            ]
        ];

        DetailUser::insert($detail_user);
    }
}
