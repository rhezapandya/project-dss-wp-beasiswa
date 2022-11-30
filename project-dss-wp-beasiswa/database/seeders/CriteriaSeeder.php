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
        Criteria::truncate();
        $heading = true;
        $input_file = fopen(base_path("database/data/dataCriteria.csv"), "r");
        while (($record = fgetcsv($input_file, 5, ",")) !== FALSE) {
            if (!$heading) {
                $product = array(
                    "nama_kriteria" => $record['0'],
                    "tipe_kriteria" => $record['1'],
                    "bobot_kriteria" => $record['2'],
                );
                Criteria::create($product);
            }
            $heading = false;
        }
        fclose($input_file);
    }
}
