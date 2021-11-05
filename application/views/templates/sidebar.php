<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column" >

            <!-- Main Content -->
            <div id="content" >

                <!-- Topbar -->
                    <div align="center" style="justify-content: center;">
                    <nav class="navbar navbar-expand navbar-light static-top shadow" style="background-color: #181d33;">

                        <!-- Sidebar Toggle (Topbar) -->
                        <div class="row" style="margin-left: 8%;">
                            <button class="text-white btn btn-lg fab fa-facebook-square"></button>
                            <button class="text-white btn btn-lg fab fa-instagram-square"></button>
                            <button class="text-white btn btn-lg fab fa-youtube"></button>
                            <h4 class="text-white ml-2"><strong>BNSP-LSP-1565-ID</strong></h4>
                        </div>

                        <div class="row" style="margin-left: 30%;">
                            <a  href="<?php echo base_url('halaman/contact')?>" class="btn ml-5" style="cursor: pointer;"><h4 class="text-white"><strong>Contact</strong></h4></a>
                            <?php if($this->session->userdata('username')) { ?>
                                <div class="row">
                                    <a class="ml-5"><div><h4 class="text-white mt-3"><strong>Selamat Datang <?php echo $this->session->userdata('username') ?></strong></h4></div></a>
                                    <a class="ml-3"><?php echo anchor('login/logout','<i class="mt-4 fas fa-sign-out-alt text-white"></i>') ?></a>
                                </div>
                            <?php } else { ?>
                                    <a href="<?php echo base_url('halaman/login')?>" class="btn" style="cursor: pointer;"><h4 class="text-white"><strong>Login</strong></h4></a>

                            <?php } ?>
                        </div>
                    </nav> 
                    </div>

                    <div class=""style="position: static;"> 
                        <div class=" mt-3 mb-3 form-group row" style="">
                            <div style="position: static; margin-left: 10%;">
                                <img src="<?php echo base_url()?>uploads/logo.png" style="width:160px; height: 0 auto;">
                            </div>
                            <div class="mt-4 form-group row" style="margin-left:30%;">
                                <li class="dropdown"><a href="<?php echo base_url('halaman/dashboard')?>">HOME</a></li>
                                <li class="dropdown ml-3"><a href="#">PROFIL</a>
                                    <ul class="isi-dropdown">
                                        <li class="mb-1"><a href="https://lspdigital.id/profil/1/lembaga-sertifikasi-profesi" target="_blank">LEMBAGA SERTIFIKASI PROFESI</a></li>
                                        <li class="mb-1"><a href="#">VISI & MISI</a></li>
                                        <li class="mb-1"><a href="#">STRUKTUR ORGANISASI</a></li>
                                        <li class="mb-1"><a href="#">STAKEHOLDER</a></li>
                                        <li class="mb-1"><a href="#">KOMITMEN KETIDAKBERPIHAKAN</a></li>
                                        <li class="mb-1"><a href="#">RENCANA STRATEGIS</a></li>
                                        <li class="mb-1"><a href="#">PROGRAM KERJA 2020</a></li>
                                        <li class="mb-1"><a href="#">MITRA KERJA</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown ml-3"><a href="#">SERTIFIKASI</a>
                                    <ul class="isi-dropdown">
                                        <li class="mb-1"><a href="#">SKEMA SERTIFIKASI</a></li>
                                        <li class="mb-1"><a href="#">TEMPAT UJI KOMPETENSI</a></li>
                                        <li class="mb-1"><a href="#">JADWAL ASESMEN</a></li>
                                        <li class="mb-1"><a href="#">ASESOR KOMPETENSI</a></li>
                                        <li class="mb-1"><a href="#">PEMEGANG SERTIFIKAT</a></li>
                                        <li class="mb-1"><a href="#">BNSP</a></li>
                                        <li class="mb-1"><a href="#">PERMOHONAN SERTIFIKAT</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown ml-3"><a href="#">MEDIA</a>
                                    <ul class="isi-dropdown">
                                        <li class="mb-1"><a href="#">INSTAGRAM</a></li>
                                        <li class="mb-1"><a href="#">FACEBOOK</a></li>
                                        <li class="mb-1"><a href="#">YOUTUBE</a></li>
                                        <li class="mb-1"><a href="#">PODCAST</a></li>
                                        <li class="mb-1"><a href="#">HOT NEWS</a></li>
                                        <li class="mb-1"><a href="#">GALERI FOTO</a></li>
                                        <li class="mb-1"><a href="#">GALERI VIDEO</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown ml-3"><a href="#">INFORMASI</a>
                                    <ul class="isi-dropdown">
                                        <li class="mb-1"><a href="#">DOWNLOAD AREA</a></li>
                                        <li class="mb-1"><a href="#">LEMBAGA DIKLAT</a></li>
                                        <li class="mb-1"><a href="#">EVENT</a></li>
                                        <li class="mb-1"><a href="#">FAQ</a></li>
                                        <li class="mb-1"><a href="#">FLIP LEARNING</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown ml-3"><a href="#">REGISTRASI</a></li>
                            </div>
                        </div>
                    </div>


            
    