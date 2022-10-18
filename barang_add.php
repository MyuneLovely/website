<!DOCTYPE html>
<html lang="en">

    <head>

        <!-- Website details -->

        <meta charset="UTF-8">

        <!-- Webpage title -->

        <title>barang</title>

        <link rel="icon" type="image/x-icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/7/79/Vanamo_Logo.svg/2048px-Vanamo_Logo.svg.png">


        <!-- Bootstrap v5 -->

        <link rel="stylesheet" type="text/css" href="<?= base_url('../css/bootstrap.min.css') ?>"> 

        <script src="<?= base_url('../js/bootstrap.bundle.min.js') ?>"></script>

    </head>

    <body>
        
        <!-- Navigation bar -->

        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">

            <div class="container-fluid">

                <!-- Home navigator with image -->

                <a class="navbar-brand" href="<?= base_url('/Home/user') ?>">
            
                    <img src="<?= base_url('../image/dudu.png') ?>" alt="Avatar Logo" style="width: 45px;" class="rounded-pill">

                </a>

                <ul class="navbar-nav">

                    <li class="nav-item">

                        <a class="nav-link" href="<?= base_url('/Home/karyawan') ?>"> Karyawan </a>

                    </li>

                    <li class="nav-item">

                        <a class="nav-link" href="<?= base_url('/Home/barang') ?>"> Barang </a>

                    </li>

                    <li class="nav-item">

                        <a class="nav-link" href="<?= base_url('/Home/barang_masuk') ?>"> Barang Masuk </a>

                    </li>

                    <li class="nav-item">

                        <a class="nav-link" href="<?= base_url('/Home/barang_keluar') ?>"> Barang Keluar </a>

                    </li>

                </ul>

            </div>

        </nav>


        <!-- Forms -->

        <div class="container mt-3">

            <form action="<?= base_url('Home/action_add_barang') ?>" method="post">
        
                <!-- Nama barang -->

                <div class="mb-3 text-white">

                    <label for="name" class="form-label"> Items name </label>

                    <input type="text" class="form-control" id="name" placeholder="Enter items name" name="name">

                </div>

                <!-- Kode barang -->

                <div class="mb-3 text-white">

                    <label for="code" class="form-label"> Items code </label>

                    <input type="text" class="form-control" id="code" placeholder="Enter items code" name="code">

                </div>


                <!-- Submit button -->

                <div class="mb-3">

                    <button type="submit" class="btn btn-success"> Submit </button>
                
                </div>
            
            </form>
        
        </div>


        <!-- Styling -->

        <style>

            body {

                background-color: #333;

            }

        </style>

    </body>

</html>