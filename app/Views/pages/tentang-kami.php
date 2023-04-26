<?= $this->extend('layout/header'); ?>
<?= $this->section('header'); ?>


    <!-- PR : Bikin tampilan Home-->
    <section class="section mt-4">

        <!-- Awal -->

        <div class="container-fluid bg-dark p-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 text-white">Tentang Kami</h1>
            </div>
        </div>
    </div>

    <!-- Akhir -->

    <!-- About Start -->
    <div class="container-fluid bg-secondary p-0">
        <div class="row g-0">
            <div class="col-lg-6 py-6 px-5">
                <h1 class="display-5 mb-4">Selamat Datang di <span class="text-primary">LAWLANDS</span></h1>
                <h4 class="text-dark mb-4">Lawlands Merupakan Sebuah Webstite Free Course dengan Berbagai Proyek yang Tersedia</h4>
                <p class="mb-4 desc_lap">Website ini dirancang untuk kamu yang memiliki ketertarikan di bidang programming tetapi bingung untuk memulai sebuah proyek. Kamu dapat memilih berbagai course yang tersedia pada website ini secara gratis dan waktu yang fleksibel.</p>
                <a href="" class="btn btn-dark py-md-3 fw-bold text-white rounded-pill">get started</a>
            </div>
            <div class="col-lg-6">
                <div class="h-100 d-flex flex-column justify-content-center bg-primary p-5">
                <h2 class="text-center mb-3 mt-1">Three Point Of Integrity</h2>
                    <div class="d-flex text-white mb-5">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white text-dark rounded-circle mx-auto mb-4" style="width: 60px; height: 60px;">
                            <i class="fa fa-money fs-4"></i>
                        </div>
                        <div class="ps-4">
                            <h3>Akses Materi Gratis</h3>
                            <p class="mb-0" style="color: #6B6A75;">Seluruh Materi dan Proyek dapat diakses secara gratis khusus untuk kamu yang memiliki ketertarikan di bidang programming</p>
                        </div>
                    </div>
                    <div class="d-flex text-white mb-5">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white text-dark rounded-circle mx-auto mb-4" style="width: 60px; height: 60px;">
                            <i class="fa fa-calendar-o fs-4"></i>
                        </div>
                        <div class="ps-4">
                            <h3>Akses Waktu Selamanya</h3>
                            <p class="mb-0" style="color: #6B6A75;">Seluruh Materi dan Proyek dapat diakses kapanpun kamu mau dan tidak memiliki batasan dalam mempelajarinya.</p>
                        </div>
                    </div>
                    <div class="d-flex text-white">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white text-dark rounded-circle mx-auto mb-4" style="width: 60px; height: 60px;">
                            <i class="fa fa-clock-o fs-4"></i>
                        </div>
                        <div class="ps-4">
                            <h3>Waktu yang Fleksibel</h3>
                            <p class="mb-0" style="color: #6B6A75;">Waktu pembelajaran sangat fleksibel dan dapat diakses selama 24 jam, cocok untuk kamu yang memiliki banyak aktivitas.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Team Start -->
    <div class="container-fluid py-6 px-5">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <h1 class="display-5 mb-0">Our Team Members</h1>
            <hr class="w-25 mx-auto bg-primary">
        </div>
        <div class="row g-5">
            <div class="col-lg-4">
                <div class="team-item position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="assets/image/team-1.jpeg" alt="">
                    <div class="team-text w-100 position-absolute top-50 text-center bg-primary p-4">
                        <h3 class="text-white">Abimanyu Luthfi Rizq Ramadhan</h3>
                        <p><a href="https://www.instagram.com/abimanyuluthfi25/"class="btn-primary text-dark mb-0">@Abimanyuluthfi25</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="team-item position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="assets/image/team-2.png" alt="">
                    <div class="team-text w-100 position-absolute top-50 text-center bg-primary p-4">
                        <h3 class="text-white">Salwa Ahmad Zanjabila</h3>
                        <p><a href="https://www.instagram.com/salzanjabila/"class="btn-primary text-dark mb-0">@salzanjabila</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="team-item position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="assets/image/team-3.jpeg" alt="">
                    <div class="team-text w-100 position-absolute top-50 text-center bg-primary p-4">
                        <h3 class="text-white">Muhammad Wildan Fadhilah</h3>
                        <p><a href="https://www.instagram.com/wildanfhd/"class="btn-primary text-dark mb-0">@wildanfhd</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->
    
        <div class="section-body">
        </div>
    </section>
</body>
<?= $this->endSection(); ?>