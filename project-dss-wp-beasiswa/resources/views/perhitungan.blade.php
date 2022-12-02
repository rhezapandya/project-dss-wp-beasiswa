<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Projek Decision Support System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="icon" href="{{ asset('/image/unpad.png') }}" type="image">
    <title>Projek Decision Support System</title>
</head>

<body>
    <div class="container-fluid mt-5 mb-5">
        <h1 class="text-center">Perankingan menggunakan metode Weighted Product</h1>
        <div class="row d-flex mt-5 mb-3 justify-content-center align-items-center">
            <div class="col-5 m-3 d-flex justify-content-center align-items-center">
                <table class="table table-bordered" style="border:black">
                    <thead class="table-dark">
                        <tr>
                            <th class="text-center" scope="col">Alternatif</th>
                            <th class="text-center" scope="col">K1</th>
                            <th class="text-center" scope="col">K2</th>
                            <th class="text-center" scope="col">K3</th>
                            <th class="text-center" scope="col">K4</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data_alternative as $datum)
                        <tr>
                            <td>{{ $datum->nama }}</td>
                            <td>{{ $datum->bobot_k1 }}</td>
                            <td>{{ $datum->bobot_k2 }}</td>
                            <td>{{ $datum->bobot_k3 }}</td>
                            <td>{{ $datum->bobot_k4 }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-5 m-3 d-flex justify-content-center">
                <div class="row justify-content-center">
                    <h5 class="text-center mb-3">Keterangan</h5>
                    <table class="text-justify table table-bordered" style="border:black">
                        <thead class="table-dark">
                            <tr>
                                <th class="text-center" scope="col">ID Kriteria</th>
                                <th class="text-center" scope="col">Nama Kriteria</th>
                                <th class="text-center" scope="col">Tipe Kriteria</th>
                                <th class="text-center" scope="col">Bobot Kriteria</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data_criteria as $datum)
                            <tr>
                                <td class="p-1">K{{ $datum->id }}</td>
                                <td class="p-1">{{ $datum->nama }}</td>
                                <td class="p-1">{{ $datum->tipe }}</td>
                                <td class="p-1">{{ $datum->bobot }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row d-flex mt-3 mb-5 justify-content-center align-items-center">
            <div class="col-10 d-flex align-items-center">
                <div class="row justify-content-center">
                    <h2 class="text-justify mb-3">Step 1 : Melakukan perbaikan Bobot dan Pangkat (sesuai dengan tipe)</h2>
                    <table class="text-justify table table-bordered" style="border:black">
                        <thead class="table-dark">
                            <tr>
                                <th class="text-center" scope="col">Bobot</th>
                                @foreach ($data_criteria as $datum)
                                <th class="text-center" scope="col">{{ $datum->bobot }}</th>
                                @endforeach
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="p-1">Perbaikan Bobot</td>
                                <?php
                                foreach ($data_criteria as $datum) {
                                    $b1[] = $datum['bobot'];
                                }
                                $total = array_sum($b1);
                                foreach ($b1 as $hasil) { ?>
                                    <td class="p-1">
                                        <?php echo round(($hasil / $total), 10); ?>
                                    </td>
                                <?php } ?>
                            </tr>
                            <tr>
                                <td class="p-1">Perbaikan Pangkat</td>
                                <?php
                                foreach ($data_criteria as $datum) {
                                    if ($datum['tipe'] == 'biaya') {
                                        $b2[] = -$datum['bobot'];
                                    } else {
                                        $b2[] = $datum['bobot'];
                                    }
                                }
                                foreach ($b2 as $hasil) { ?>
                                    <td class="p-1">
                                        <?php echo round(($hasil / $total), 10); ?>
                                    </td>
                                <?php } ?>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row d-flex mt-3 mb-5 justify-content-center align-items-center">
            <div class="col-10 d-flex align-items-center">
                <div class="row justify-content-center">
                    <h2 class="text-justify mb-3">Step 2 : Menghitung Vektor S</h2>
                    <table class="text-justify table table-bordered" style="border:black">
                        <thead class="table-dark">
                            <tr>
                                <th class="text-center" scope="col" colspan="5">Nilai Vektor S</th>
                                <th class="text-center" scope="col">Hasil</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $arrayv; ?>
                            @foreach ($data_alternative as $datum)
                            <tr>
                                <td class="p-1">{{ $datum->nama }}</td>
                                <td class="p-1"><?php $h1 = round(($datum->bobot_k1 ** ($b2[0] / $total)), 10);
                                                echo $h1 ?></td>
                                <td class="p-1"><?php $h2 = round(($datum->bobot_k2 ** ($b2[1] / $total)), 10);
                                                echo $h2 ?></td>
                                <td class="p-1"><?php $h3 = round(($datum->bobot_k3 ** ($b2[2] / $total)), 10);
                                                echo $h3 ?></td>
                                <td class="p-1"><?php $h4 = round(($datum->bobot_k4 ** ($b2[3] / $total)), 10);
                                                echo $h4 ?></td>
                                <td class="p-1"><?php $htotal = round(($h1 * $h2 * $h3 * $h4), 10);
                                                echo $htotal;
                                                $arrayv[] = $htotal;
                                                $oldarray = array_sum($arrayv);
                                                // $newarray = array_merge($newarray, $oldarray);
                                                // vard($newarray);
                                                ?></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row d-flex mt-3 mb-5 justify-content-center align-items-center">
            <div class="col-10 d-flex align-items-center">
                <div class="row justify-content-center">
                    <h2 class="text-justify mb-3">Step 3 : Menghitung Vektor V</h2>
                    <table class="text-justify table table-bordered" style="border:black">
                        <thead class="table-dark">
                            <tr>
                                <th class="text-center" scope="col">Vektor</th>
                                <th class="text-center" scope="col" colspan="2">Nilai Vektor V</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php for ($i = 0; $i < 12; $i++) { ?>
                                <tr>
                                    <td class="p-1">V<?php echo $i + 1; ?></td>
                                    <td class="p-1"><?php print_r($data_alternative[$i]->nama) ?></td>
                                    <td class="p-1">
                                        <?php
                                        print_r($arrayv[$i] / $oldarray);
                                        $newarray = array();
                                        $newarray[] = $arrayv[$i] / $oldarray;
                                        ?>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row d-flex mt-3 mb-5 justify-content-center align-items-center">
            <div class="col-10 d-flex align-items-center">
                <div class="row justify-content-center">
                    <h2 class="text-justify mb-3">Step 4 : Kesimpulan</h2>
                    <p class="text-justify" style="font-size:1.3rem">
                        Nilai terbesar ada pada V8 sehingga alternatif A8 (Desa Hegarmanah)
                        adalah alternatif yang terpilih sebagai alternatif
                        terbaik.<br>
                        Dengan kata lain, Desa Hegarmanah akan <span style="font-weight:bold">terpilih</span> sebagai lokasi
                        untuk Pemberian Beasiswa S1 terhadap Pelajar SMA di Jatinangor.
                    </p>
                </div>
            </div>
        </div>
        <div class="row d-flex mt-3 mb-5 justify-content-center align-items-center">
            <div class="col-2 d-flex justify-content-center align-items-center">
                <a href="{{ route('dashboard') }}">
                    <button class="btn btn-danger btn-index text-index">
                        Back to Dashboard
                    </button>
                </a>
            </div>
        </div>
    </div>
    <!-- <script>
        var step1_bobot1 = document.getElementById('repRefinishBody');
    </script> -->
</body>

</html>