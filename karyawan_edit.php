<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Webpage title -->
        
        <title>karyawan</title>

        <!-- Webpage icon -->

        <link rel="icon" type="image" href="https://upload.wikimedia.org/wikipedia/commons/thumb/7/79/Vanamo_Logo.svg/2048px-Vanamo_Logo.svg.png">
        
        <!-- Bootstrap V5 -->

        <link rel="stylesheet" type="text/css" href="<?= base_url("../css/bootstrap.min.css")?>">
        <script src="<?= base_url("../js/bootstrap.bundle.min.js")?>"></script>

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


        <div class="container mt-3">

            <form action="<?= base_url("Home/action_edit_karyawan")?>" method="post">

                <!-- ID -->

                <input type="hidden" name="id" value="<?php echo $user -> id_user ?>">


                <!-- Username -->

                <div class="mb-3 text-white">

                    <label for="username" class="form-label"> Username </label>

                    <input type="text" class="form-control" id="username" placeholder="Enter your username" name="username" value="<?php echo $user -> username ?>">

                </div>

                <!-- Password  -->

                <div class="mb-3 text-white">

                    <label for="password" class="form-label"> Password </label>

                    <input type="password" class="form-control" id="password" placeholder="Enter your password" name="password" value="<?php echo $user -> password ?>">

                </div>

                <!-- Email -->

                <div class="mb-3 text-white">

                    <label for="email" class="form-label"> E-mail </label>

                    <input type="email" class="form-control" id="email" placeholder="example@gmail.com" name="email" value="<?php echo $user -> email ?>">

                </div>

                <!-- Nama karyawan -->

                <div class="mb-3 text-white">

                    <label for="name" class="form-label"> Employee Name </label>

                    <input type="text" class="form-control" id="name" placeholder="Enter your name" name="name" value="<?php echo $karyawan -> nama_karyawan ?>">

                </div>

                <!-- NIK -->

                <div class="mb-3 text-white">

                    <label for="nik" class="form-label"> NIK </label>

                    <input type="text" class="form-control" id="nik" placeholder="Enter your NIK" name="nik" value="<?php echo $karyawan -> nik ?>">

                </div>

                <!-- Nomor handphone -->

                <div class="mb-3 text-white">

                    <label for="nohp" class="form-label"> Phone Number </label>

                    <input type="text" class="form-control" id="nohp" placeholder="(+62) Phone number" name="nohp" value="<?php echo $karyawan -> nomor_handphone ?>">

                </div>

                <!-- Tanggal lahir -->

                <div class="mb-3 text-white">

                    <label for="borndate" class="form-label"> Date of Birth </label>

                    <input type="date" class="form-control" id="borndate" placeholder="MM-DD-YYYY" name="borndate" value="<?php echo $karyawan -> tanggal_lahir ?>">

                </div>

                <!-- Tempat lahir -->

                <div class="mb-3 text-white">

                    <label for="hometown" class="form-label"> Place of Birth </label>

                    <input type="text" class="form-control" id="hometown" placeholder="Enter your birth location" name="hometown" value="<?php echo $karyawan -> tempat_lahir ?>">

                </div>

                <!-- User -->

                <div class="mb-3 text-white">

                    <label for="user" class="form-label"> User </label>

                    <input type="text" class="form-control" id="user" placeholder="Enter your user ID" name="user" value="<?php echo $karyawan -> user ?>">

                </div>



                <!-- Jabatan selection -->

                <div class="mb-3 text-white">

                    <label for="jabatan" class="form-label"> Role </label>

                    <select class="form-control" id="jabatan" placeholder="Select Role" name="jabatan">

                        <option value="<?php echo $karyawan -> jabatan ?>"> Select Role </option>

                        <?php

                            foreach ($jabatan as $data) {

                        ?>

                                <option value="<?= $data -> id_jabatan ?>"> <?php echo $data -> nama_jabatan ?></option>

                        <?php

                            }
                        
                        ?>

                    </select>

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