<!DOCTYPE html>
<html>

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Page Title & Icon -->
    <title>Projek Decision Support System</title>
    <link rel="icon" href="{{ asset('/image/unpad.png') }}" type="image">

    <!-- Link Bootstrap CSS & Index CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/css/indexStyle.css') }}">
</head>

<body>
    <!-- Membuat Container Box -->
    <section class="h-100 gradient-form" style="background-color: #eee;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">

                    <!-- Membuat Card -->
                    <div class="card rounded-3 text-black">
                        <div class="row g-0">

                            <!-- Membuat 2 Column -->
                            <div class="col-lg-6 mt-2 mb-2">
                                <div class="card-body p-md-5 mx-md-4">
                                    <div class="text-center">
                                        <!-- Text Judul & Anggota Kelompok -->
                                        <h4 class="mt-1 mb-4">Project Decision Support System</h4>
                                        <p class="mt-1 mb-1" style="text-align:justify; font-size:1.1rem">Dibuat oleh :</p>
                                        <ul style="text-align:justify; padding:0">
                                            <li>
                                                <p style="margin:0;font-size:1.1rem">Affan Rifqy Kurniadi<br>(140810200003)</p>
                                            </li>
                                            <li>
                                                <p style="margin:0;font-size:1.1rem">Osmond Haylim<br>(140810200022)</p>
                                            </li>
                                            <li>
                                                <p style="margin:0;font-size:1.1rem">Rheza Pandya Andhikaputra<br>(140810200023)</p>
                                            </li>
                                            <li>
                                                <p style="margin:0;font-size:1.1rem">Andyka Baswara Putra<br>(140810200061)</p>
                                            </li>
                                        </ul>
                                    </div>

                                    <!-- Button untuk mengakses page Dashboard -->
                                    <div class="row align-items-center justify-content-center text-center mt-5">
                                        <div class="col align-items-center justify-content-center">
                                            <!-- Untuk Routing menggunakan blade -->
                                            <a href="{{ route('dashboard') }}">
                                                <button class="btn btn-primary btn-index text-index">
                                                    Go to Dashboard
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Membuat 2 Column -->
                            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                    <!-- Teks Deskripsi -->
                                    <h4 class="mb-4" style="text-align:justify">Pemberian Beasiswa S1 terhadap Pelajar SMA di Jatinangor</h4>
                                    <p class="small mb-0" style="text-align:justify">
                                        Aplikasi ini merupakan sebuah Project Aplikasi Sistem Pendukung Keputusan yang dibuat oleh mahasiswa S1 Teknik Informatika Universitas Padjadjaran untuk membantu pemerintah Sumedang dalam menyelesaikan permasalahan terutama di pendidikan. Fokus dari aplikasi ini adalah membantu memberi pendukung keputusan terhadap pemberian beasiswa S1 terhadap pelajar SMA terutama di Kecamatan Jatinangor. Harapan kami, dengan aplikasi ini dapat membantu pemerintah menentukan sasaran yang tepat untuk pemberian beasiswa S1.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>