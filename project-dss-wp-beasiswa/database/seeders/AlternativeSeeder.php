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
        Alternative::truncate();
        $heading = true;
        $input_file = fopen(base_path("database/data/dataAlternative.csv"), "r");
        while (($record = fgetcsv($input_file, 13, ",")) !== FALSE) {
            if (!$heading) {
                $product = array(
                    "nama_alternatif" => $record['0'],
                    "bobot_kriteria_1" => $record['1'],
                    "bobot_kriteria_2" => $record['2'],
                    "bobot_kriteria_3" => $record['3'],
                    "bobot_kriteria_4" => $record['4'],
                );
                Alternative::create($product);
            }
            $heading = false;
        }
        fclose($input_file);
    }
}
