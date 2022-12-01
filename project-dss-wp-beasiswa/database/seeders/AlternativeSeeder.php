<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Alternative;

class AlternativeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Alternative::truncate();
        // $heading = true;
        // $input_file = fopen(base_path("database/data/dataalternative.csv"), "r");
        // while (($record = fgetcsv($input_file, 13, ",")) !== FALSE) {
        //     if (!$heading) {
        //         $product = array(
        //             "nama" => $record['0'],
        //             "bobot_k1" => $record['1'],
        //             "bobot_k2" => $record['2'],
        //             "bobot_k3" => $record['3'],
        //             "bobot_k4" => $record['4']
        //         );
        //         Alternative::create($product);
        //     }
        //     $heading = false;
        // }
        // fclose($input_file);

        Alternative::create([
            'nama' => 'Cibeusi',
            'bobot_k1' => 12,
            'bobot_k2' => 3,
            'bobot_k3' => 10,
            'bobot_k4' => 3
        ]);

        Alternative::create([
            'nama' => 'Cikeruh',
            'bobot_k1' => 140,
            'bobot_k2' => 61,
            'bobot_k3' => 126,
            'bobot_k4' => 53
        ]);

        Alternative::create([
            'nama' => 'Cilayung',
            'bobot_k1' => 954,
            'bobot_k2' => 156,
            'bobot_k3' => 900,
            'bobot_k4' => 136
        ]);

        Alternative::create([
            'nama' => 'Cileles',
            'bobot_k1' => 1317,
            'bobot_k2' => 220,
            'bobot_k3' => 1407,
            'bobot_k4' => 201
        ]);

        Alternative::create([
            'nama' => 'Cintamulya',
            'bobot_k1' => 1669,
            'bobot_k2' => 262,
            'bobot_k3' => 1922,
            'bobot_k4' => 258
        ]);

        Alternative::create([
            'nama' => 'Cipacing',
            'bobot_k1' => 213,
            'bobot_k2' => 52,
            'bobot_k3' => 191,
            'bobot_k4' => 47
        ]);

        Alternative::create([
            'nama' => 'Cisempur',
            'bobot_k1' => 666,
            'bobot_k2' => 90,
            'bobot_k3' => 822,
            'bobot_k4' => 127
        ]);

        Alternative::create([
            'nama' => 'Hegarmanah',
            'bobot_k1' => 2479,
            'bobot_k2' => 445,
            'bobot_k3' => 2378,
            'bobot_k4' => 473
        ]);

        Alternative::create([
            'nama' => 'Jatimukti',
            'bobot_k1' => 1003,
            'bobot_k2' => 114,
            'bobot_k3' => 941,
            'bobot_k4' => 111
        ]);

        Alternative::create([
            'nama' => 'Jatiroke',
            'bobot_k1' => 1117,
            'bobot_k2' => 68,
            'bobot_k3' => 1064,
            'bobot_k4' => 60
        ]);

        Alternative::create([
            'nama' => 'Mekargalih',
            'bobot_k1' => 887,
            'bobot_k2' => 171,
            'bobot_k3' => 854,
            'bobot_k4' => 148
        ]);

        Alternative::create([
            'nama' => 'Sayang',
            'bobot_k1' => 2367,
            'bobot_k2' => 1074,
            'bobot_k3' => 2200,
            'bobot_k4' => 929
        ]);
    }
}
