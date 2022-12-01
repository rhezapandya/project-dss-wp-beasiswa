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
                            <th scope="col">Alternatif</th>
                            <th scope="col">K1</th>
                            <th scope="col">K2</th>
                            <th scope="col">K3</th>
                            <th scope="col">K4</th>
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
                                <th scope="col">ID Kriteria</th>
                                <th scope="col">Nama Kriteria</th>
                                <th scope="col">Tipe Kriteria</th>
                                <th scope="col">Bobot Kriteria</th>
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
                    <h1 class="text-justify mb-3">Step 1 : </h1>
                    <table class="text-justify table table-bordered" style="border:black">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">Bobot</th>
                                @foreach ($data_criteria as $datum)
                                <th scope="col">{{ $datum->bobot }}</th>
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
                                        <?php echo round(($hasil / $total), 5); ?>
                                    </td>
                                <?php } ?>
                            </tr>
                            <tr>
                                <td class="p-1">Perbaikan Pangkat</td>
                                <td class="p-1"></td>
                                <td class="p-1"></td>
                                <td class="p-1"></td>
                                <td class="p-1"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row d-flex mt-3 mb-5 justify-content-center align-items-center">
            <div class="col-2 d-flex justify-content-center align-items-center">
                <a href="{{ route('index') }}">
                    <button class="btn btn-danger btn-index text-index">
                        Back to Home
                    </button>
                </a>
            </div>
            <div class="col-2 d-flex justify-content-center align-items-center">
                <a href="{{ route('index') }}">
                    <button class="btn btn-primary btn-index text-index">
                        Start Program
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