<!DOCTYPE html>
<html lang="en">

    <head>

        <!-- Website details -->

        <meta charset="UTF-8">

        <!-- Webpage title -->

        <title>barang masuk</title>

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

                        <a class="nav-link" href="<?= base_url('/Home/barang') ?>"> Barang Masuk </a>

                    </li>

                    <li class="nav-item">

                        <a class="nav-link" href="<?= base_url('/Home/barang') ?>"> Barang Keluar </a>

                    </li>

                </ul>

            </div>

        </nav>


        <!-- Forms -->

        <div class="container mt-3">

            <form action="<?= base_url('Home/action_add_barang_masuk') ?>" method="post">

                <!-- ID item -->

                <div class="mb-3 text-white">

                    <label for="itemid" class="form-label"> Items ID </label>

                    <input type="text" class="form-control" id="itemid" placeholder="Enter items ID" name="itemid">

                </div>
        
                <!-- Total -->

                <div class="mb-3 text-white">

                    <label for="total" class="form-label"> Items amount </label>

                    <input type="text" class="form-control" id="total" placeholder="Enter items amount" name="total">

                </div>

                <!-- Date -->

                <div class="mb-3 text-white">

                    <label for="date" class="form-label"> Date </label>

                    <input type="date" class="form-control" id="date" placeholder="MM-DD-YYYY" name="date">

                </div>

                <!-- ID user -->

                <div class="mb-3 text-white">

                    <label for="" class="form-label"> User ID </label>

                    <input type="text" class="form-control" id="userid" placeholder="Enter user ID" name="userid">

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