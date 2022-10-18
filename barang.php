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

                        <a class="nav-link" href="<?= base_url('/Home/barang_masuk') ?>"> Barang Masuk </a>

                    </li>

                    <li class="nav-item">

                        <a class="nav-link" href="<?= base_url('/Home/barang_keluar') ?>"> Barang Keluar </a>

                    </li>

                </ul>

            </div>

        </nav>


        <!-- Data table -->

        <div class="container mt-3">

            <table class="table table-bordered table-dark">

                <a href="<?= base_url('/Home/add_barang') ?>">
            
                    <button type="button" class="btn btn-success"> + Insert </button>

                </a>

                <thead>

                    <tr>

                        <th>No.</th>
                        <th>nama barang</th>
                        <th>kode barang</th>
                        <th>stock</th>
                        <th>action</th>

                    </tr>

                </thead>

                <tbody>

                    <?php

                        $no = 1;

                        foreach($barang as $data) {

                    ?>

                            <tr>

                                <td><?php echo $no++ ?></td>
                                <td><?php echo $data -> nama_barang?></td>
                                <td><?php echo $data -> kode_barang?></td>
                                <td><?php echo $data -> stock?></td>

                                <td>

                                    <a href="<?= base_url('/Home/edit_barang/'.$data -> id_barang) ?>">

                                        <button class="btn btn-warning"> Edit </button>

                                    </a>

                                    <a href="<?= base_url('/Home/delete_barang/'.$data -> id_barang) ?>">

                                        <button class="btn btn-danger"> Delete </button>

                                    </a>

                                </td>

                            </tr>

                    <?php

                        }

                    ?>

                </tbody>

            </table>

        </div>


        <!-- Styling -->

        <style>

            body {

                background-color: #333;

            }

        </style>

    </body>

</html>