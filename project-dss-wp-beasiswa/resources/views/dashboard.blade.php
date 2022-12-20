<!DOCTYPE html>
<html>

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Page Title & Icon -->
    <title>Projek Decision Support System</title>
    <link rel="icon" href="{{ asset('/image/unpad.png') }}" type="image">

    <!-- Link Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <!-- Membuat Container Box -->
    <div class="container-fluid mt-5 mb-5">
        <!-- Teks Judul -->
        <h1 class="text-center">Data Dashboard</h1>
        <h4 class="text-center mt-5" style="line-height:2rem">Aplikasi Sistem Pendukung Keputusan Pemberian Beasiswa S1 terhadap<br> Pelajar SMA di Jatinangor Menggunakan Metode Weighted Product (WP)</h4>
        <p class="text-center mt-3" style="font-size:1.2rem;">
            Sumber data : Open Data Kabupaten Sumedang. Dapat diakses <a href="https://opendata.sumedangkab.go.id/index.php/Dashboard" target="_blank">disini</a>
        </p>

        <!-- Membuat Row & Col -->
        <div class="row d-flex mt-5 mb-3 justify-content-center align-items-center">
            <div class="col-8 d-flex justify-content-center align-items-center">

                <!-- Membuat Tabel -->
                <table class="table table-bordered" style="border:black">

                    <!-- Membuat kepala tabel sesuai dengan data yang telah di design-->
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">Alternatif</th>
                            <th scope="col">K1</th>
                            <th scope="col">K2</th>
                            <th scope="col">K3</th>
                            <th scope="col">K4</th>
                        </tr>
                    </thead>

                    <!-- Menampilkan data yang telah dimasukkan ke dalam database -->
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
        </div>

        <!-- Membuat Row & Col -->
        <div class="row d-flex mt-3 mb-5 justify-content-center align-items-center">
            <h5 class="text-center mt-5">Keterangan</h5>
            <div class="col-6 d-flex justify-content-center align-items-center">

                <!-- Membuat Tabel -->
                <table class="text-justify table table-bordered" style="border:black">

                    <!-- Membuat kepala tabel sesuai dengan data yang telah di design-->
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">ID Kriteria</th>
                            <th scope="col">Nama Kriteria</th>
                            <th scope="col">Tipe Kriteria</th>
                            <th scope="col">Bobot Kriteria</th>
                        </tr>
                    </thead>

                    <!-- Menampilkan data yang telah dimasukkan ke dalam database -->
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

        <div class="row d-flex mt-3 mb-5 justify-content-center align-items-center">
            <!-- Membuat button untuk kembali ke landing page -->
            <div class="col-2 d-flex justify-content-center align-items-center">
                <!-- Untuk Routing menggunakan blade -->
                <a href="{{ route('index') }}">
                    <button class="btn btn-danger btn-index text-index">
                        Back to Home
                    </button>
                </a>
            </div>
            <!-- Membuat button untuk mengakses page metode -->
            <div class="col-2 d-flex justify-content-center align-items-center">
                <!-- Untuk Routing menggunakan blade -->
                <a href="{{ route('metode') }}">
                    <button class="btn btn-info btn-index text-index">
                        Info Metode
                    </button>
                </a>
            </div>
            <!-- Membuat button untuk mengakses page perhitungan -->
            <div class="col-2 d-flex justify-content-center align-items-center">
                <!-- Untuk Routing menggunakan blade -->
                <a href="{{ route('perhitungan') }}">
                    <button class="btn btn-primary btn-index text-index">
                        Start Program
                    </button>
                </a>
            </div>
        </div>
    </div>
</body>

</html>