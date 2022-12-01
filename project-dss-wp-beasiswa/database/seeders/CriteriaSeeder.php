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
        // Criteria::truncate();
        // $heading = true;
        // $input_file = fopen(base_path("database/data/datacriteria.csv"), "r");
        // while (($record = fgetcsv($input_file, 5, ",")) !== FALSE) {
        //     if (!$heading) {
        //         $product = array(
        //             "nama" => $record['0'],
        //             "tipe" => $record['1'],
        //             "bobot" => $record['2']
        //         );
        //         Criteria::create($product);
        //     }
        //     $heading = false;
        // }
        // fclose($input_file);

        Criteria::create([
            'nama' => 'Jumlah murid SMA/sederajat',
            'tipe' => 'keuntungan',
            'bobot' => 5
        ]);

        Criteria::create([
            'nama' => 'Jumlah mahasiswa perguruan tinggi',
            'tipe' => 'keuntungan',
            'bobot' => 2
        ]);

        Criteria::create([
            'nama' => 'Jumlah pemilik ijazah SMA/sederajat',
            'tipe' => 'keuntungan',
            'bobot' => 3
        ]);

        Criteria::create([
            'nama' => 'Jumlah pemilik ijazah perguruan tinggi/sederajat',
            'tipe' => 'biaya',
            'bobot' => 3
        ]);
    }
}
