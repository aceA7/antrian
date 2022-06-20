

<!doctype html>
<html lang="en" class="h-100">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Aplikasi Antrian Berbasis Web">
    <meta name="author" content="Indra Styawantoro">

    <!-- Title -->
    <title>Puskesmas Cempae</title>

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="../../assets/img/favicon.ico" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">

    <!-- Custom Style -->
    <link rel="stylesheet" href="../../assets/css/style.css">
</head>

<body class="d-flex flex-column h-100">
    <main class="flex-shrink-0">
        <div class="container pt-4">
            <div class="d-flex flex-column flex-md-row px-4 py-3 mb-4 bg-white rounded-2 shadow-sm">
                <!-- judul halaman -->
                <div class="d-flex align-items-center me-md-auto">
                    <i class="bi-people-fill text-success me-3 fs-3"></i>
                    <h1 class="h5 pt-2">Puskesmas Cempae</h1>
                </div>
                <!-- breadcrumbs -->
                <div class="ms-5 ms-md-0 pt-md-3 pb-md-0">
                    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="../../index.php"><i class="bi-house-fill text-success"></i></a></li>
                            <li class="breadcrumb-item" aria-current="page">Dashboard</li>
                        </ol>
                    </nav>
                </div>
            </div>

                    <div class="card border-0 shadow-sm">
                        <div class="card-body text-center d-grid p-5">
                            <div class="border border-success rounded-2 py-2 mb-5">
                                <h3 class="pt-4">ANTRIAN LOKET</h3>
                            </div>
                            <!-- button pengambilan nomor antrian -->
                            <a id="insert" href="javascript:void(0)" class="btn btn-success btn-block rounded-pill fs-5 px-5 py-4 mb-2"style="cursor:pointer; font-weight:bold; text-decoration: none ;" onclick="window.open('cetak.php','nama window','width=200,height=100,toolbar=no,location=no,directories=no,status=no,menubar=no, scrollbars=no,resizable=yes,copyhistory=no, width=1000, height=1000')">
                                <i class="bi-person-plus fs-4 me-2" style="font-size:30px;"></i> AMBIL NOMOR
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- jQuery Core -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            // tampilkan jumlah antrian
            $('#antrian').load('get_antrian.php');

            // proses insert data
            $('#insert').on('click', function() {
                $.ajax({
                    type: 'POST',                       // mengirim data dengan method POST
                    url: 'insert.php',                  // url file proses insert data
                    success: function(result) {         // ketika proses insert data selesai
                        // jika berhasil
                        if (result === 'Sukses') {
                            // tampilkan jumlah antrian
                            $('#antrian').load('get_antrian.php').fadeIn('slow');
                        }
                    },
                });
            });
        });
    </script>
</body>

</html>