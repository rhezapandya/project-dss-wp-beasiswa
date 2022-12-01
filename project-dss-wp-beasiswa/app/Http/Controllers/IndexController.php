<?php

namespace App\Http\Controllers;

use App\Models\Criteria;
use App\Models\Alternative;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function visitIndex()
    {
        return view('index');
    }

    public function visitDashboard()
    {
        $data_c = Criteria::all();
        $data_a = Alternative::all();
        // dd($data);
        return view('dashboard', [
            'data_criteria' => $data_c,
            'data_alternative' => $data_a,
        ]);
    }

    public function kalkulasi()
    {
        $data_c = Criteria::all();
        $data_a = Alternative::all();
        // dd($data);
        return view('perhitungan', [
            'data_criteria' => $data_c,
            'data_alternative' => $data_a,
        ]);
    }
}
