<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Pendaftaran Pasien</title>
</head>

<body>
    <main>
        <div class="container py-5" style="margin-top: 100px">
            <div class="container-fluid py-5" style="width: 50%">
                <div class="card">
                    <h1 class="card-header fw-bold">PENDAFTARAN PASIEN</h1>
                    <div class="card-body">
                        <p class="card-text pb-3">Sebuah aplikasi yang dirancang untuk memudahkan dalam pendaftaran
                            pasien.</p>
                        <div class="d-flex justify-content-center"><a href="{{ route('pasiens.index') }}"
                                class="btn btn-outline-primary fw-bold">Daftar</a>
                        </div>
                    </div>
                    <p class="card-footer text-sm-end m-0">PendaftaranPasien v1.0</p>
                </div>
            </div>
        </div>
    </main>
</body>

</html>