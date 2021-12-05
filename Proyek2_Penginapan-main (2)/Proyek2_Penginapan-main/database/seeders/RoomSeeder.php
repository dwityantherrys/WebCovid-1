<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Room;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Room::create([
            'id'            => 1,
            'name'          => 'Ruang 1 Family',
            'description'   => 'Family Room',
            'capacity'      => 4,
            'price'         => 'Rp.450.000',
        ]);

        Room::create([
            'id'            => 2,
            'name'          => 'Ruang 2 Family',
            'description'   => 'Family Room',
            'capacity'      => 4,
            'price'         => 'Rp.450.000',

        ]);

        Room::create([
            'id'            => 3,
            'name'          => 'Ruang 3 Family',
            'description'   => 'Family Room',
            'capacity'      => 4,
            'price'         => 'Rp.450.000',


        ]);

        Room::create([
            'id'            => 4,
            'name'          => 'Ruang 4 Twin' ,
            'description'   => 'Twin room ',
            'capacity'      => 2,
            'price'         => 'Rp.350.000',

        ]);
        Room::create([
            'id'            => 5,
            'name'          => 'Ruang 5 Twin',
            'description'   => 'Twin room',
            'capacity'      => 2,
            'price'         => 'Rp.350.000',
        ]);

        Room::create([
            'id'            => 6,
            'name'          => 'Ruang 6 Twin',
            'description'   => 'Twin room ',
            'capacity'      => 2,
            'price'         => 'Rp.350.000',
        ]);

        Room::create([
            'id'            => 7,
            'name'          => 'Ruang 7 Twin',
            'description'   => 'Twin room ',
            'capacity'      => 2,
            'price'         => 'Rp.350.000',
        ]);
        
        Room::create([
            'id'            => 8,
            'name'          => 'Ruang 8 Twin',
            'description'   => 'Twin room',
            'capacity'      => 2,
            'price'         => 'Rp.350.000',
        ]);

        Room::create([
            'id'            => 9,
            'name'          => 'Ruang 9 Twin',
            'description'   => 'Twin room ',
            'capacity'      => 2,
            'price'         => 'Rp.350.000',
        ]);

        Room::create([
            'id'            => 10,
            'name'          => 'Ruang 10 Twin',
            'description'   => 'Twin room ',
            'capacity'      => 2,
            'price'         => 'Rp.350.000',
        ]);
        
        Room::create([
            'id'            => 11,
            'name'          => 'Ruang 11 Single',
            'description'   => 'Singel Room',
            'capacity'      => 1,
            'price'         => 'Rp.200.000',
        ]);

        Room::create([
            'id'            => 12,
            'name'          => 'Ruang 12 Single',
            'description'   => 'Singel Room',
            'capacity'      => 1,
            'price'         => 'Rp.200.000',

        ]);

        Room::create([
            'id'            => 13,
            'name'          => 'Ruang 13 Single',
            'description'   => 'Singel Room',
            'capacity'      => 1,
            'price'         => 'Rp.200.000',
        ]);

        Room::create([
            'id'            => 14,
            'name'          => 'Ruang 14 Single',
            'description'   => 'Singel Room',
            'capacity'      => 1,
            'price'         => 'Rp.200.000',
        ]);
    }
}
