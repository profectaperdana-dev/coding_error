<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Profecta Perdana Coding Test</title>

    <!-- Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <style>
        body {
            font-family: "Prompt", sans-serif;

        }
    </style>
</head>



<body class="antialiased">
    <main class="container-fluid">
        <div class="row mb-5">
            <div class="col-12 col-lg-6 align-self-center p-5">
                <h1 class="display-3 fw-bold">Selamat datang di Profecta Coding Test</h1>
                <p class="fs-5">Ini adalah tes coding yang dibuat oleh Tim IT CV Profecta Perdana. Silakan menuju
                    section selanjutnya
                    untuk memulai tantangan.</p>
            </div>
            <div class="col-12 col-lg-6 p-0 align-self-end">
                <img src="{{ url('images/youngman2.png') }}" class="img-fluid w-100" alt="youngman"
                    style="height: 80%;width:95%">
            </div>
        </div>

        <br>

        <div class="row my-5 container mx-auto">
            <h2 class="text-center fw-bold">Case 1</h2>
            <div class="col-12 text-start px-5 mb-3 align-self-center">
                Ada sebuah tabel karyawan di bawah ini. Bos melihat tabel tersebut tampak berantakan. Ia meminta
                untuk
                mengurutkan datanya berdasarkan nama dan ubah format tanggalnya menjadi DD-MM-YYYY.
            </div>
            <div class="col-12 px-5">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Position</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Joining Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($employee_data as $employee)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $employee['name'] }}</td>
                                <td>{{ $employee['position'] }}</td>
                                <td>{{ $employee['gender'] }}</td>
                                <td>{{ $employee['joining_date'] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="row my-5 container mx-auto">
            <h2 class="text-center fw-bold">Case 2</h2>
            <div class="col-12 text-start px-5 mb-3 align-self-center">
                Buatkan Aplikasi CRUD sesuai dengan Mockup yang tertera!
                <br>
                Rules :
                <ul>
                    <li>Buat di halaman baru</li>
                    <li>Buat tampilan sesuai dengan kreativitas</li>
                    <li>Dipersilakan menggunakan Bootstrap/Tailwind</li>
                </ul>

            </div>
            <div class="col-12 px-5 align-self-center">
                <img src="{{ url('images/mockupTestFinal.png') }}" class="img-fluid" alt="">
            </div>
        </div>
    </main>
</body>

</html>
