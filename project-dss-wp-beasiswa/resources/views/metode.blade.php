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
        <h1 class="text-center">Metode Weighted Product (WP)</h1>
        <div class="row d-flex mt-5 mb-3 justify-content-center align-items-center">
            <div class="col-8 d-flex justify-content-center align-items-center">

                <!-- Teks Deskripsi Metode -->
                <div class="row justify-content-center align-items-center">
                    <p class="text-justify" style="font-size:1.3rem;">
                        Metode Weighted Product (WP) menggunakan
                        perkalian untuk menghubungkan rating atribut,
                        dimana rating setiap atribut harus dipangkatkan
                        dulu dengan bobot atribut yang bersangkutan.
                        Proses ini sama halnya dengan proses normalisasi.
                    </p>
                    <p class="text-justify" style="font-size:1.3rem;">
                        Preferensi untuk alternatif Ai diberikan sebagai berikut:
                    </p>
                    <img src="{{ asset('/image/metodewp.png') }}" style="height:7rem; width:15rem" class="mb-3">
                    <p class="text-justify" style="font-size:1.3rem;">
                        dengan i=1,2,...,m; dimana sigma Wj = 1.
                    </p>
                    <p class="text-justify" style="font-size:1.3rem;">
                        Wj adalah pangkat bernilai positif untuk atribut keuntungan,
                        dan bernilai negatif untuk atribut biaya.
                    </p>
                </div>
            </div>
        </div>
        <div class="row d-flex mt-3 mb-5 justify-content-center align-items-center">
            <!-- Membuat button untuk kembali ke dashboard page -->
            <div class="col-2 d-flex justify-content-center align-items-center">
                <!-- Untuk Routing menggunakan blade -->
                <a href="{{ route('dashboard') }}">
                    <button class="btn btn-danger btn-index text-index">
                        Back to Dashboard
                    </button>
                </a>
            </div>
        </div>
    </div>
</body>

</html>