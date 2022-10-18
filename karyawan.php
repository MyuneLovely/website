<!DOCTYPE html>
<html lang="en">

    <head>

        <!-- Website details -->

        <meta charset="UTF-8">

        <!-- Webpage title -->

        <title>karyawan</title>

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


        <!-- Data table -->

        <div class="container mt-3">

            <table class="table table-bordered table-dark">

                <a href="<?= base_url('/Home/add_karyawan') ?>">
            
                    <button type="button" class="btn btn-success"> + Insert </button>

                </a>

                <thead>

                    <tr>

                        <th>No.</th>
                        <th>nama karyawan</th>
                        <th>nik</th>
                        <th>nomor handphone</th>
                        <th>tanggal lahir</th>
                        <th>tempat lahir</th>
                        <th>jabatan</th>
                        <th>action</th>

                    </tr>

                </thead>

                <tbody>

                    <?php

                        $no = 1;

                        foreach ($karyawan as $data) {
                            
                    ?>

                            <tr>

                                <td><?php echo $no++ ?></td>
                                <td><?php echo $data -> nama_karyawan ?></td>
                                <td><?php echo $data -> nik ?></td>
                                <td><?php echo $data -> nomor_handphone ?></td>
                                <td><?php echo $data -> tanggal_lahir ?></td>
                                <td><?php echo $data -> tempat_lahir ?></td>
                                <td><?php echo $data -> nama_jabatan ?></td>

                                <td>

                                    <a href="<?= base_url('/Home/edit_karyawan/'.$data->user) ?>">
                                
                                        <button type="button" class="btn btn-warning"> Edit </button>

                                    </a>

                                    <a href="<?= base_url('/Home/delete_karyawan/'.$data->user) ?>">
                                
                                        <button type="button" class="btn btn-danger"> Delete </button>

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