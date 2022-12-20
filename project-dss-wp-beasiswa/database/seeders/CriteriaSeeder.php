<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Criteria;

class CriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        # Membuat Data pada tabel criterias
        Criteria::create([
            'nama' => 'Jumlah murid SMA/sederajat',
            'tipe' => 'keuntungan',
            'bobot' => 5
        ]);

        # Membuat Data pada tabel criterias
        Criteria::create([
            'nama' => 'Jumlah mahasiswa perguruan tinggi',
            'tipe' => 'keuntungan',
            'bobot' => 2
        ]);

        # Membuat Data pada tabel criterias
        Criteria::create([
            'nama' => 'Jumlah pemilik ijazah SMA/sederajat',
            'tipe' => 'keuntungan',
            'bobot' => 3
        ]);

        # Membuat Data pada tabel criterias
        Criteria::create([
            'nama' => 'Jumlah pemilik ijazah perguruan tinggi/sederajat',
            'tipe' => 'biaya',
            'bobot' => 3
        ]);
    }
}
