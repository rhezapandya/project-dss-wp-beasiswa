<?php

namespace App\Http\Controllers;

use App\Models\Criteria;
use App\Models\Alternative;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    # Function untuk mengakses landing page dengan nama index
    public function visitIndex()
    {
        return view('index');
    }

    # Function untuk mengakses page dashboard dengan mengambil seluruh data dari tabel criterias dan alternatives
    public function visitDashboard()
    {
        $data_c = Criteria::all();
        $data_a = Alternative::all();
        return view('dashboard', [
            'data_criteria' => $data_c,
            'data_alternative' => $data_a,
        ]);
    }

    # Function untuk mengakses page metode dengan nama metode
    public function visitMetode()
    {
        return view('metode');
    }

    # Function untuk mengakses page perhitungan dengan mengambil seluruh data dari tabel criterias dan alternatives
    public function kalkulasi()
    {
        $data_c = Criteria::all();
        $data_a = Alternative::all();
        return view('perhitungan', [
            'data_criteria' => $data_c,
            'data_alternative' => $data_a,
        ]);
    }
}
