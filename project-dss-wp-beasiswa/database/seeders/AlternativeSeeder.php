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
        # Membuat Data pada tabel Alternatives
        Alternative::create([
            'nama' => 'Cibeusi',
            'bobot_k1' => 12,
            'bobot_k2' => 3,
            'bobot_k3' => 10,
            'bobot_k4' => 3
        ]);

        # Membuat Data pada tabel Alternatives
        Alternative::create([
            'nama' => 'Cikeruh',
            'bobot_k1' => 140,
            'bobot_k2' => 61,
            'bobot_k3' => 126,
            'bobot_k4' => 53
        ]);

        # Membuat Data pada tabel Alternatives
        Alternative::create([
            'nama' => 'Cilayung',
            'bobot_k1' => 954,
            'bobot_k2' => 156,
            'bobot_k3' => 900,
            'bobot_k4' => 136
        ]);

        # Membuat Data pada tabel Alternatives
        Alternative::create([
            'nama' => 'Cileles',
            'bobot_k1' => 1317,
            'bobot_k2' => 220,
            'bobot_k3' => 1407,
            'bobot_k4' => 201
        ]);

        # Membuat Data pada tabel Alternatives
        Alternative::create([
            'nama' => 'Cintamulya',
            'bobot_k1' => 1669,
            'bobot_k2' => 262,
            'bobot_k3' => 1922,
            'bobot_k4' => 258
        ]);

        # Membuat Data pada tabel Alternatives
        Alternative::create([
            'nama' => 'Cipacing',
            'bobot_k1' => 213,
            'bobot_k2' => 52,
            'bobot_k3' => 191,
            'bobot_k4' => 47
        ]);

        # Membuat Data pada tabel Alternatives
        Alternative::create([
            'nama' => 'Cisempur',
            'bobot_k1' => 666,
            'bobot_k2' => 90,
            'bobot_k3' => 822,
            'bobot_k4' => 127
        ]);

        # Membuat Data pada tabel Alternatives
        Alternative::create([
            'nama' => 'Hegarmanah',
            'bobot_k1' => 2479,
            'bobot_k2' => 445,
            'bobot_k3' => 2378,
            'bobot_k4' => 473
        ]);

        # Membuat Data pada tabel Alternatives
        Alternative::create([
            'nama' => 'Jatimukti',
            'bobot_k1' => 1003,
            'bobot_k2' => 114,
            'bobot_k3' => 941,
            'bobot_k4' => 111
        ]);

        # Membuat Data pada tabel Alternatives
        Alternative::create([
            'nama' => 'Jatiroke',
            'bobot_k1' => 1117,
            'bobot_k2' => 68,
            'bobot_k3' => 1064,
            'bobot_k4' => 60
        ]);

        # Membuat Data pada tabel Alternatives
        Alternative::create([
            'nama' => 'Mekargalih',
            'bobot_k1' => 887,
            'bobot_k2' => 171,
            'bobot_k3' => 854,
            'bobot_k4' => 148
        ]);

        # Membuat Data pada tabel Alternatives
        Alternative::create([
            'nama' => 'Sayang',
            'bobot_k1' => 2367,
            'bobot_k2' => 1074,
            'bobot_k3' => 2200,
            'bobot_k4' => 929
        ]);
    }
}
