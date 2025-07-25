<?php $__env->startSection('title'); ?>
    Landing
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
    <link href="<?php echo e(URL::asset('build/libs/swiper/swiper-bundle.min.css')); ?>" rel="stylesheet" type="text/css" />
    <style>
        .timeline-vertical {
            position: relative;
            padding-left: 30px;
        }

        .timeline-vertical::before {
            content: '';
            position: absolute;
            left: 15px;
            top: 0;
            bottom: 0;
            width: 2px;
            background: linear-gradient(to bottom, #f7b84b, #0ab39c);
        }

        .timeline-item {
            position: relative;
            margin-bottom: 30px;
        }

        .timeline-item:last-child {
            margin-bottom: 0;
        }

        .timeline-marker {
            position: absolute;
            left: -22px;
            top: 5px;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 3px solid #fff;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .timeline-content {
            padding-left: 20px;
        }

        .bg-gradient-warning {
            background: linear-gradient(135deg, #f7b84b 0%, #f06548 100%);
        }

        .bg-gradient-info {
            background: linear-gradient(135deg, #299cdb 0%, #0ab39c 100%);
        }
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>

    <body data-bs-spy="scroll" data-bs-target="#navbar-example">
<?php $__env->stopSection(); ?>
    <?php $__env->startSection('content'); ?>
        <!-- Begin page -->
        <div class="layout-wrapper landing">
            <nav class="navbar navbar-expand-lg navbar-landing fixed-top" id="navbar">
                <div class="container">
                    <a class="navbar-brand" href="index">
                        <img src="<?php echo e(URL::asset('build/images/logo-dark.png')); ?>" class="card-logo card-logo-dark"
                            alt="logo dark" height="17">
                        <img src="<?php echo e(URL::asset('build/images/logo-light.png')); ?>" class="card-logo card-logo-light"
                            alt="logo light" height="17">
                    </a>
                    <button class="navbar-toggler py-0 fs-20 text-body" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <i class="mdi mdi-menu"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mx-auto mt-2 mt-lg-0" id="navbar-example">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle active" href="#" id="homeDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Home
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="homeDropdown">
                                    <li><a class="dropdown-item" href="#hero">Home</a></li>
                                    <li><a class="dropdown-item" href="#visi-misi">Visi Misi</a></li>
                                    <li><a class="dropdown-item" href="#sejarah">Sejarah</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#services">Services</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#features">Features</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#plans">Plans</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#reviews">Dasar Hukum</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#team">Struktur Pemerintahan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#contact">Contact</a>
                            </li>
                        </ul>

                        <div class="">
                            <a href="auth-signin-basic" class="btn btn-link fw-medium text-decoration-none text-body">Sign
                                in</a>
                            <a href="auth-signup-basic" class="btn btn-primary">Sign Up</a>
                        </div>
                    </div>

                </div>
            </nav>
            <!-- end navbar -->
            <div class="vertical-overlay" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent.show"></div>

            <!-- start hero section -->
            <section class="section pb-0 hero-section" id="hero">
                <div class="bg-overlay bg-overlay-pattern"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-sm-10">
                            <div class="text-center mt-lg-5 pt-5">
                                <h1 class="display-6 fw-semibold mb-3 lh-base">
                                    Selamat datang di Website<br>
                                    <span class="text-primary">Desa Cipeundeuy</span>
                                </h1>
                                <p class="lead text-muted lh-base">Temukan informasi desa, potensi lokal, UMKM, hingga
                                    berita terkini dalam satu tempat yang mudah digunakan oleh seluruh warga dan perangkat
                                    desa.</p>
                                <div class="d-flex gap-2 justify-content-center mt-4">
                                    <a href="#profil" class="btn btn-primary">Lihat Profil Desa <i
                                            class="ri-arrow-right-line align-middle ms-1"></i></a>
                                    <a href="#umkm" class="btn btn-soft-secondary">Jelajahi UMKM <i
                                            class="ri-store-2-line align-middle ms-1"></i></a>
                                </div>
                            </div>

                            <div class="mt-4 mt-sm-5 pt-sm-5 mb-sm-n5 demo-carousel">
                                <div class="demo-img-patten-top d-none d-sm-block">
                                    <img src="<?php echo e(URL::asset('build/images/landing/img-pattern.png')); ?>"
                                        class="d-block img-fluid" alt="...">
                                </div>
                                <div class="demo-img-patten-bottom d-none d-sm-block">
                                    <img src="<?php echo e(URL::asset('build/images/landing/img-pattern.png')); ?>"
                                        class="d-block img-fluid" alt="...">
                                </div>
                                <div class="carousel slide carousel-fade" data-bs-ride="carousel">
                                    <div class="carousel-inner shadow-lg p-2 bg-white rounded">
                                        <div class="carousel-item active" data-bs-interval="2000">
                                            <img src="<?php echo e(URL::asset('build/images/demos/default.png')); ?>"
                                                class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item" data-bs-interval="2000">
                                            <img src="<?php echo e(URL::asset('build/images/demos/saas.png')); ?>" class="d-block w-100"
                                                alt="...">
                                        </div>
                                        <div class="carousel-item" data-bs-interval="2000">
                                            <img src="<?php echo e(URL::asset('build/images/demos/material.png')); ?>"
                                                class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item" data-bs-interval="2000">
                                            <img src="<?php echo e(URL::asset('build/images/demos/minimal.png')); ?>"
                                                class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item" data-bs-interval="2000">
                                            <img src="<?php echo e(URL::asset('build/images/demos/creative.png')); ?>"
                                                class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item" data-bs-interval="2000">
                                            <img src="<?php echo e(URL::asset('build/images/demos/modern.png')); ?>"
                                                class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item" data-bs-interval="2000">
                                            <img src="<?php echo e(URL::asset('build/images/demos/interactive.png')); ?>"
                                                class="d-block w-100" alt="...">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
                <div class="position-absolute start-0 end-0 bottom-0 hero-shape-svg">
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                        viewBox="0 0 1440 120">
                        <g mask="url(&quot;#SvgjsMask1003&quot;)" fill="none">
                            <path d="M 0,118 C 288,98.6 1152,40.4 1440,21L1440 140L0 140z">
                            </path>
                        </g>
                    </svg>
                </div>
                <!-- end shape -->
            </section>
            <!-- end hero section -->

            <!-- start visi misi section -->
            <div class="pt-5 mt-5" id="profil">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="text-center mb-5">
                                <h3 class="mb-3 fw-semibold">Profil Desa Cipeundeuy</h3>
                                <p class="text-muted">Mengenal lebih dekat tentang Desa Cipeundeuy</p>
                            </div>
                        </div>
                    </div>

                    <!-- Visi Misi -->
                    <div class="row justify-content-center mb-5" id="visi-misi">
                        <div class="col-lg-10">
                            <!-- Visi Section -->
                            <div class="card border-0 shadow-lg mb-5 overflow-hidden">
                                <div class="card-body p-">
                                    <div class="bg-light border-bottom text-center py-4">
                                        <h3 class="mb-2 text-dark fw-semibold">VISI DESA CIPEUNDEUY</h3>
                                        <span class="badge bg-primary-subtle text-primary">Periode 2023 - 2029</span>
                                    </div>
                                    <div class="py-10 px-4 position-relative">
                                        <div class="container-fluid">
                                            <div class="row justify-content-center">
                                                <div class="col-lg-10">
                                                    <div class="position-relative text-center">
                                                        <!-- Main Vision Content -->
                                                        <div class="py-4 px-5">
                                                            <p
                                                                class="fs-17 text-dark lh-lg fw-semibold mb-4 position-relative">
                                                                "Mewujukan Pemerintahan yang Amanah, Nasionalis, Demokratis,
                                                                Akurat, Integritas/Indah (Desa Cipeundeuy PANDAI)"
                                                            </p>
                                                            <!-- PANDAI Acronym -->
                                                            <div class="bg-light rounded-3 p-4 mb-4">
                                                                <div class="row g-2 text-center">
                                                                    <div class="col-lg-2 col-4">
                                                                        <div class="rounded-circle p-3 mx-auto mb-2"
                                                                            style="width: 60px; height: 60px; display: flex; align-items: center; justify-content: center; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
                                                                            <span class="fw-bold fs-20 text-white">P</span>
                                                                        </div>
                                                                        <small class="text-muted fs-12">Pemerintahan</small>
                                                                    </div>
                                                                    <div class="col-lg-2 col-4">
                                                                        <div class="rounded-circle p-3 mx-auto mb-2"
                                                                            style="width: 60px; height: 60px; display: flex; align-items: center; justify-content: center; background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);">
                                                                            <span class="fw-bold fs-20 text-white">A</span>
                                                                        </div>
                                                                        <small class="text-muted fs-12">Amanah</small>
                                                                    </div>
                                                                    <div class="col-lg-2 col-4">
                                                                        <div class="rounded-circle p-3 mx-auto mb-2"
                                                                            style="width: 60px; height: 60px; display: flex; align-items: center; justify-content: center; background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);">
                                                                            <span class="fw-bold fs-20 text-white">N</span>
                                                                        </div>
                                                                        <small class="text-muted fs-12">Nasionalis</small>
                                                                    </div>
                                                                    <div class="col-lg-2 col-4">
                                                                        <div class="rounded-circle p-3 mx-auto mb-2"
                                                                            style="width: 60px; height: 60px; display: flex; align-items: center; justify-content: center; background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);">
                                                                            <span class="fw-bold fs-20 text-white">D</span>
                                                                        </div>
                                                                        <small class="text-muted fs-12">Demokratis</small>
                                                                    </div>
                                                                    <div class="col-lg-2 col-4">
                                                                        <div class="rounded-circle p-3 mx-auto mb-2"
                                                                            style="width: 60px; height: 60px; display: flex; align-items: center; justify-content: center; background: linear-gradient(135deg, #fa709a 0%, #fee140 100%);">
                                                                            <span class="fw-bold fs-20 text-white">A</span>
                                                                        </div>
                                                                        <small class="text-muted fs-12">Akurat</small>
                                                                    </div>
                                                                    <div class="col-lg-2 col-4">
                                                                        <div class="rounded-circle p-3 mx-auto mb-2"
                                                                            style="width: 60px; height: 60px; display: flex; align-items: center; justify-content: center; background: linear-gradient(135deg, #a8edea 0%, #fed6e3 100%);">
                                                                            <span class="fw-bold fs-20 text-dark">I</span>
                                                                        </div>
                                                                        <small class="text-muted fs-12">Integritas</small>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Misi Section -->
                            <div class="card border-0 shadow-lg overflow-hidden">
                                <div class="card-body p-0">
                                    <div class="bg-light border-bottom text-center py-4">
                                        <h3 class="mb-2 text-dark fw-semibold">MISI DESA CIPEUNDEUY</h3>
                                        <span class="badge bg-primary-subtle text-primary">Periode 2023 - 2029</span>
                                    </div>
                                    <div class="p-5">
                                        <div class="row g-4">
                                            <div class="col-lg-6">
                                                <div class="d-flex align-items-start mb-4">
                                                    <div class="flex-shrink-0 me-3">
                                                        <div
                                                            class="avatar-sm bg-success-subtle rounded-circle d-flex align-items-center justify-content-center">
                                                            <span class="text-success fw-bold">1</span>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="mb-2 text-dark fw-semibold">Pelayanan Publik</h6>
                                                        <p class="text-muted mb-0 fs-14">Meningkatkan profesionalisme
                                                            pelayanan publik yang berkualitas dan responsif</p>
                                                    </div>
                                                </div>

                                                <div class="d-flex align-items-start mb-4">
                                                    <div class="flex-shrink-0 me-3">
                                                        <div
                                                            class="avatar-sm bg-info-subtle rounded-circle d-flex align-items-center justify-content-center">
                                                            <span class="text-info fw-bold">2</span>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="mb-2 text-dark fw-semibold">SDM Aparatur</h6>
                                                        <p class="text-muted mb-0 fs-14">Meningkatkan kualitas sumber daya
                                                            manusia bagi aparatur pemerintah desa</p>
                                                    </div>
                                                </div>

                                                <div class="d-flex align-items-start mb-4">
                                                    <div class="flex-shrink-0 me-3">
                                                        <div
                                                            class="avatar-sm bg-warning-subtle rounded-circle d-flex align-items-center justify-content-center">
                                                            <span class="text-warning fw-bold">3</span>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="mb-2 text-dark fw-semibold">Pembangunan</h6>
                                                        <p class="text-muted mb-0 fs-14">Meningkatkan pembangunan fisik dan
                                                            non fisik di berbagai bidang</p>
                                                    </div>
                                                </div>

                                                <div class="d-flex align-items-start mb-4">
                                                    <div class="flex-shrink-0 me-3">
                                                        <div
                                                            class="avatar-sm bg-danger-subtle rounded-circle d-flex align-items-center justify-content-center">
                                                            <span class="text-danger fw-bold">4</span>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="mb-2 text-dark fw-semibold">Masyarakat Religius</h6>
                                                        <p class="text-muted mb-0 fs-14">Membentuk masyarakat desa yang
                                                            religius dan berkeadaban</p>
                                                    </div>
                                                </div>

                                                <div class="d-flex align-items-start">
                                                    <div class="flex-shrink-0 me-3">
                                                        <div
                                                            class="avatar-sm bg-primary-subtle rounded-circle d-flex align-items-center justify-content-center">
                                                            <span class="text-primary fw-bold">5</span>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="mb-2 text-dark fw-semibold">Infrastruktur</h6>
                                                        <p class="text-muted mb-0 fs-14">Meningkatkan ketersediaan dan
                                                            fasilitas infrastruktur pemerintah desa</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="d-flex align-items-start mb-4">
                                                    <div class="flex-shrink-0 me-3">
                                                        <div
                                                            class="avatar-sm bg-secondary-subtle rounded-circle d-flex align-items-center justify-content-center">
                                                            <span class="text-secondary fw-bold">6</span>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="mb-2 text-dark fw-semibold">Partisipasi Swadaya</h6>
                                                        <p class="text-muted mb-0 fs-14">Meningkatkan partisipasi swadaya
                                                            masyarakat dan sektor swasta dalam pembangunan</p>
                                                    </div>
                                                </div>

                                                <div class="d-flex align-items-start mb-4">
                                                    <div class="flex-shrink-0 me-3">
                                                        <div
                                                            class="avatar-sm bg-success-subtle rounded-circle d-flex align-items-center justify-content-center">
                                                            <span class="text-success fw-bold">7</span>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="mb-2 text-dark fw-semibold">Pendapatan Desa</h6>
                                                        <p class="text-muted mb-0 fs-14">Menggali potensi desa dalam rangka
                                                            peningkatan Pendapatan Asli Desa (PAD)</p>
                                                    </div>
                                                </div>

                                                <div class="d-flex align-items-start mb-4">
                                                    <div class="flex-shrink-0 me-3">
                                                        <div
                                                            class="avatar-sm bg-info-subtle rounded-circle d-flex align-items-center justify-content-center">
                                                            <span class="text-info fw-bold">8</span>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="mb-2 text-dark fw-semibold">Kerjasama Lembaga</h6>
                                                        <p class="text-muted mb-0 fs-14">Meningkatkan kerukunan dan
                                                            kerjasama antara lembaga desa</p>
                                                    </div>
                                                </div>

                                                <div class="d-flex align-items-start mb-4">
                                                    <div class="flex-shrink-0 me-3">
                                                        <div
                                                            class="avatar-sm bg-warning-subtle rounded-circle d-flex align-items-center justify-content-center">
                                                            <span class="text-warning fw-bold">9</span>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="mb-2 text-dark fw-semibold">SDM Berkualitas</h6>
                                                        <p class="text-muted mb-0 fs-14">Membentuk sumber daya manusia yang
                                                            berkualitas dan inovatif melalui BLK</p>
                                                    </div>
                                                </div>

                                                <div class="d-flex align-items-start">
                                                    <div class="flex-shrink-0 me-3">
                                                        <div
                                                            class="avatar-sm bg-danger-subtle rounded-circle d-flex align-items-center justify-content-center">
                                                            <span class="text-danger fw-bold">10</span>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="mb-2 text-dark fw-semibold">Lingkungan</h6>
                                                        <p class="text-muted mb-0 fs-14">Menuntaskan pengolahan sampah dan
                                                            kebersihan lingkungan melalui KRL dan Bank Sampah</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Sejarah -->
                    <div class="row mb-5" id="sejarah">
                        <div class="col-lg-12">
                            <div class="card border-0 shadow-lg overflow-hidden">
                                <div class="card-body p-0">
                                    <!-- Header Section -->
                                    <div class="bg-gradient-warning text-white p-5 text-center position-relative">
                                        <div class="bg-overlay bg-overlay-pattern opacity-20"></div>
                                        <div class="position-relative">
                                            <div class="avatar-lg bg-white bg-opacity-20 rounded-circle mx-auto mb-4">
                                                <i class="ri-ancient-gate-line fs-36 text-white"></i>
                                            </div>
                                            <h3 class="text-white fw-bold mb-2">SEJARAH DESA CIPEUNDEUY</h3>
                                            <p class="text-white-75 mb-0 fs-16">Menguak kisah perjalanan waktu yang penuh
                                                makna</p>
                                        </div>
                                    </div>

                                    <!-- Content Section -->
                                    <div class="p-5">
                                        <div class="row g-5">
                                            <!-- Timeline Column -->
                                            <div class="col-lg-4">
                                                <div class="position-relative">
                                                    <div class="timeline-vertical">
                                                        <div class="timeline-item">
                                                            <div class="timeline-marker bg-warning">
                                                                <i class="ri-seedling-line fs-16 text-white"></i>
                                                            </div>
                                                            <div class="timeline-content">
                                                                <h6 class="text-dark fw-semibold mb-2">Asal Usul Nama</h6>
                                                                <p class="text-muted fs-14 mb-0">Diambil dari pohon Peundeuy
                                                                    yang kokoh dan kuat</p>
                                                            </div>
                                                        </div>

                                                        <div class="timeline-item">
                                                            <div class="timeline-marker bg-primary">
                                                                <i class="ri-government-line fs-16 text-white"></i>
                                                            </div>
                                                            <div class="timeline-content">
                                                                <h6 class="text-dark fw-semibold mb-2">1977</h6>
                                                                <p class="text-muted fs-14 mb-0">Pemekaran dari Desa
                                                                    Cileunca dan pembentukan desa</p>
                                                            </div>
                                                        </div>

                                                        <div class="timeline-item">
                                                            <div class="timeline-marker bg-success">
                                                                <i class="ri-calendar-check-line fs-16 text-white"></i>
                                                            </div>
                                                            <div class="timeline-content">
                                                                <h6 class="text-dark fw-semibold mb-2">24 Agustus 1977</h6>
                                                                <p class="text-muted fs-14 mb-0">Peresmian resmi Desa
                                                                    Cipeundeuy</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Main Content Column -->
                                            <div class="col-lg-8">
                                                <div class="ps-lg-4">
                                                    <!-- Introduction -->
                                                    <div class="mb-5">
                                                        <h5 class="text-dark fw-semibold mb-3">
                                                            <i class="ri-map-pin-line text-warning me-2"></i>
                                                            Perjalanan Sejarah
                                                        </h5>
                                                        <p class="text-muted lh-lg mb-4">
                                                            Desa Cipeundeuy merupakan salah satu desa di <strong>Kecamatan
                                                                Bojong, Kabupaten Purwakarta</strong>
                                                            yang terbentuk pada <strong class="text-primary">Tahun
                                                                1977</strong> melalui pemekaran dari Desa Cileunca.
                                                            Perjalanan ini dimulai dari visi para tokoh masyarakat untuk
                                                            membangun komunitas yang mandiri dan sejahtera.
                                                        </p>
                                                    </div>

                                                    <!-- Makna Nama -->
                                                    <div class="card border-0 bg-light-subtle mb-4">
                                                        <div class="card-body p-4">
                                                            <div class="d-flex align-items-start">
                                                                <div class="flex-shrink-0 me-3">
                                                                    <div
                                                                        class="avatar-sm bg-warning-subtle rounded-circle d-flex align-items-center justify-content-center">
                                                                        <i class="ri-leaf-line fs-18 text-warning"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    <h6 class="text-dark fw-semibold mb-2">Filosofi Nama
                                                                        "Cipeundeuy"</h6>
                                                                    <p class="text-muted mb-3">
                                                                        Nama <strong>"Cipeundeuy"</strong> diambil dari
                                                                        sebuah pohon besar sejenis Peundeuy
                                                                        yang berada di wilayah Kampung Pasir Madang dan
                                                                        Cipeundeuy Buntu (sekarang Kampung Sukalaksana).
                                                                    </p>
                                                                    <div class="row g-3">
                                                                        <div class="col-sm-6">
                                                                            <div class="d-flex align-items-center">
                                                                                <i class="ri-drop-line text-info me-2"></i>
                                                                                <span class="text-muted"><em>"Ci"</em> =
                                                                                    Air</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-6">
                                                                            <div class="d-flex align-items-center">
                                                                                <i
                                                                                    class="ri-tree-line text-success me-2"></i>
                                                                                <span class="text-muted"><em>"Peundeuy"</em>
                                                                                    = Pohon Kokoh</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Makna Simbolis -->
                                                    <div class="alert alert-info border-0 bg-gradient-info text-white">
                                                        <div class="d-flex align-items-start">
                                                            <i class="ri-lightbulb-line fs-20 me-3 mt-1"></i>
                                                            <div>
                                                                <h6 class="text-white fw-semibold mb-2">Makna Simbolis</h6>
                                                                <p class="mb-0 text-white-75">
                                                                    <strong>"Pohon Kokoh Tempat Air Bersumber"</strong> -
                                                                    melambangkan desa yang kokoh
                                                                    kekeluargaannya dengan gotong royong sebagai sumber
                                                                    kehidupan yang gemah, ripah,
                                                                    tentram, aman dan makmur.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Penutup -->
                                                    <div class="border-start border-4 border-warning ps-4">
                                                        <p class="text-muted mb-0 fst-italic">
                                                            "Desa ini diresmikan pada <strong class="text-dark">24 Agustus
                                                                1977</strong>
                                                            setelah melalui serangkaian musyawarah para tokoh masyarakat dan
                                                            pemerintah setempat,
                                                            menandai dimulainya era baru dalam perjalanan masyarakat
                                                            Cipeundeuy."
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- end container -->
            </div>
            <!-- end visi misi section -->

            <!-- start services -->
            <section class="section" id="services">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="text-center mb-5">
                                <h1 class="mb-3 ff-secondary fw-semibold lh-base">A Digital web design studio creating
                                    modern & engaging online</h1>
                                <p class="text-muted">To achieve this, it would be necessary to have uniform grammar,
                                    pronunciation and more common words. If several languages coalesce the grammar</p>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class="row g-3">
                        <div class="col-lg-4">
                            <div class="d-flex p-3">
                                <div class="flex-shrink-0 me-3">
                                    <div class="avatar-sm icon-effect">
                                        <div class="avatar-title bg-transparent text-success rounded-circle">
                                            <i class="ri-pencil-ruler-2-line fs-36"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <h5 class="fs-18">Creative Design</h5>
                                    <p class="text-muted my-3 ff-secondary">The creative design includes designs that are
                                        unique, effective and memorable.</p>
                                    <div>
                                        <a href="#" class="fs-13 fw-medium">Learn More <i
                                                class="ri-arrow-right-s-line align-bottom"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                        <div class="col-lg-4">
                            <div class="d-flex p-3">
                                <div class="flex-shrink-0 me-3">
                                    <div class="avatar-sm icon-effect">
                                        <div class="avatar-title bg-transparent text-success rounded-circle">
                                            <i class="ri-palette-line fs-36"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <h5 class="fs-18">Unlimited Colors</h5>
                                    <p class="text-muted my-3 ff-secondary">The collection of rules and guidelines which
                                        designers use to communicate with users through appealing.</p>
                                    <div>
                                        <a href="#" class="fs-13 fw-medium">Learn More <i
                                                class="ri-arrow-right-s-line align-bottom"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                        <div class="col-lg-4">
                            <div class="d-flex p-3">
                                <div class="flex-shrink-0 me-3">
                                    <div class="avatar-sm icon-effect">
                                        <div class="avatar-title bg-transparent text-success rounded-circle">
                                            <i class="ri-lightbulb-flash-line fs-36"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <h5 class="fs-18">Strategy Solutions</h5>
                                    <p class="text-muted my-3 ff-secondary">Business development firm that provides
                                        strategic planning, market research services and project.</p>
                                    <div>
                                        <a href="#" class="fs-13 fw-medium">Learn More <i
                                                class="ri-arrow-right-s-line align-bottom"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                        <div class="col-lg-4">
                            <div class="d-flex p-3">
                                <div class="flex-shrink-0 me-3">
                                    <div class="avatar-sm icon-effect">
                                        <div class="avatar-title bg-transparent text-success rounded-circle">
                                            <i class="ri-customer-service-line fs-36"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <h5 class="fs-18">Awesome Support</h5>
                                    <p class="text-muted my-3 ff-secondary">Awesome Support is the most versatile and
                                        feature-rich support plugin for all version.</p>
                                    <div>
                                        <a href="#" class="fs-13 fw-medium">Learn More <i
                                                class="ri-arrow-right-s-line align-bottom"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                        <div class="col-lg-4">
                            <div class="d-flex p-3">
                                <div class="flex-shrink-0 me-3">
                                    <div class="avatar-sm icon-effect">
                                        <div class="avatar-title bg-transparent text-success rounded-circle">
                                            <i class="ri-stack-line fs-36"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <h5 class="fs-18">Truly Multipurpose</h5>
                                    <p class="text-muted my-3 ff-secondary">You usually get a broad range of options to
                                        play with. This enables you to use a single theme across multiple.</p>
                                    <div>
                                        <a href="#" class="fs-13 fw-medium">Learn More <i
                                                class="ri-arrow-right-s-line align-bottom"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                        <div class="col-lg-4">
                            <div class="d-flex p-3">
                                <div class="flex-shrink-0 me-3">
                                    <div class="avatar-sm icon-effect">
                                        <div class="avatar-title bg-transparent text-success rounded-circle">
                                            <i class="ri-settings-2-line fs-36"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <h5 class="fs-18">Easy to customize</h5>
                                    <p class="text-muted my-3 ff-secondary">Personalise your own website, no matter what
                                        theme and what customization options.</p>
                                    <div>
                                        <a href="#" class="fs-13 fw-medium">Learn More <i
                                                class="ri-arrow-right-s-line align-bottom"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->

                        <div class="col-lg-4">
                            <div class="d-flex p-3">
                                <div class="flex-shrink-0 me-3">
                                    <div class="avatar-sm icon-effect">
                                        <div class="avatar-title bg-transparent text-success rounded-circle">
                                            <i class="ri-slideshow-line fs-36"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <h5 class="fs-18">Responsive & Clean Design</h5>
                                    <p class="text-muted my-3 ff-secondary">Responsive design is a graphic user interface
                                        (GUI) design approach used to create content.</p>
                                    <div>
                                        <a href="#" class="fs-13 fw-medium">Learn More <i
                                                class="ri-arrow-right-s-line align-bottom"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                        <div class="col-lg-4">
                            <div class="d-flex p-3">
                                <div class="flex-shrink-0 me-3">
                                    <div class="avatar-sm icon-effect">
                                        <div class="avatar-title bg-transparent text-success rounded-circle">
                                            <i class="ri-google-fill fs-36"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <h5 class="fs-18">Google Font Collection</h5>
                                    <p class="text-muted my-3 ff-secondary">Google Fonts is a collection of 915 fonts, all
                                        available to use for free on your website.</p>
                                    <div>
                                        <a href="#" class="fs-13 fw-medium">Learn More <i
                                                class="ri-arrow-right-s-line align-bottom"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                        <div class="col-lg-4">
                            <div class="d-flex p-3">
                                <div class="flex-shrink-0 me-3">
                                    <div class="avatar-sm icon-effect">
                                        <div class="avatar-title bg-transparent text-success rounded-circle">
                                            <i class="ri-briefcase-5-line fs-36"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <h5 class="fs-18">Top Industry Specialists</h5>
                                    <p class="text-muted my-3 ff-secondary">An industrial specialist works with industrial
                                        operations to ensure that manufacturing facilities work.</p>
                                    <div>
                                        <a href="#" class="fs-13 fw-medium">Learn More <i
                                                class="ri-arrow-right-s-line align-bottom"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
            </section>
            <!-- end services -->

            <!-- start features -->
            <section class="section bg-light py-5" id="features">
                <div class="container">
                    <div class="row align-items-center gy-4">
                        <div class="col-lg-6 col-sm-7 mx-auto">
                            <div>
                                <img src="<?php echo e(URL::asset('build/images/landing/features/img-1.png')); ?>" alt=""
                                    class="img-fluid mx-auto">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="text-muted">
                                <div class="avatar-sm icon-effect mb-4">
                                    <div class="avatar-title bg-transparent rounded-circle text-success h1">
                                        <i class="ri-collage-line fs-36"></i>
                                    </div>
                                </div>
                                <h3 class="mb-3 fs-20">Huge collection of widgets</h3>
                                <p class="mb-4 ff-secondary fs-16">Collection widgets specialize in displaying many
                                    elements of the same type, such as a collection of pictures from a collection of
                                    articles from a news app or a collection of messages from a communication app.</p>

                                <div class="row pt-3">
                                    <div class="col-3">
                                        <div class="text-center">
                                            <h4>5</h4>
                                            <p>Dashboards</p>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="text-center">
                                            <h4>150+</h4>
                                            <p>Pages</p>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="text-center">
                                            <h4>7+</h4>
                                            <p>Functional Apps</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
            </section>
            <!-- end features -->

            <!-- start cta -->
            <section class="py-5 bg-primary position-relative">
                <div class="bg-overlay bg-overlay-pattern opacity-50"></div>
                <div class="container">
                    <div class="row align-items-center gy-4">
                        <div class="col-sm">
                            <div>
                                <h4 class="text-white mb-0 fw-semibold">Build your web App/SaaS with Velzon dashboard</h4>
                            </div>
                        </div>
                        <!-- end col -->
                        <div class="col-sm-auto">
                            <div>
                                <a href="https://1.envato.market/velzon-admin" target="_blank"
                                    class="btn bg-gradient btn-secondary"><i
                                        class="ri-shopping-cart-2-line align-middle me-1"></i> Buy Now</a>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
            </section>
            <!-- end cta -->

            <!-- start features -->
            <section class="section">
                <div class="container">
                    <div class="row align-items-center gy-4">
                        <div class="col-lg-6 order-2 order-lg-1">
                            <div class="text-muted">
                                <h5 class="fs-12 text-uppercase text-secondary">Design</h5>
                                <h4 class="mb-3">Well Designed Dashboards</h4>
                                <p class="mb-4 ff-secondary">Quality Dashboards (QD) is a condition-specific, actionable
                                    web-based application for quality reporting and population management that is integrated
                                    into the Electronic Health Record (EHR).</p>

                                <div class="row">
                                    <div class="col-sm-5">
                                        <div class="vstack gap-2">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0 me-2">
                                                    <div class="avatar-xs icon-effect">
                                                        <div
                                                            class="avatar-title bg-transparent text-success rounded-circle h2">
                                                            <i class="ri-check-fill"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h5 class="fs-14 mb-0">Ecommerce</h5>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0 me-2">
                                                    <div class="avatar-xs icon-effect">
                                                        <div
                                                            class="avatar-title bg-transparent text-success rounded-circle h2">
                                                            <i class="ri-check-fill"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h5 class="fs-14 mb-0">Analytics</h5>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0 me-2">
                                                    <div class="avatar-xs icon-effect">
                                                        <div
                                                            class="avatar-title bg-transparent text-success rounded-circle h2">
                                                            <i class="ri-check-fill"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h5 class="fs-14 mb-0">CRM</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="vstack gap-2">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0 me-2">
                                                    <div class="avatar-xs icon-effect">
                                                        <div
                                                            class="avatar-title bg-transparent text-success rounded-circle h2">
                                                            <i class="ri-check-fill"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h5 class="fs-14 mb-0">Crypto</h5>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0 me-2">
                                                    <div class="avatar-xs icon-effect">
                                                        <div
                                                            class="avatar-title bg-transparent text-success rounded-circle h2">
                                                            <i class="ri-check-fill"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h5 class="fs-14 mb-0">Projects</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-4">
                                    <a href="index" class="btn btn-primary">Learn More <i
                                            class="ri-arrow-right-line align-middle ms-1"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                        <div class="col-lg-6 col-sm-7 col-10 ms-auto order-1 order-lg-2">
                            <div>
                                <img src="<?php echo e(URL::asset('build/images/landing/features/img-2.png')); ?>" alt=""
                                    class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row align-items-center mt-5 pt-lg-5 gy-4">
                        <div class="col-lg-6 col-sm-7 col-10 mx-auto">
                            <div>
                                <img src="<?php echo e(URL::asset('build/images/landing/features/img-3.png')); ?>" alt=""
                                    class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="text-muted ps-lg-5">
                                <h5 class="fs-12 text-uppercase text-secondary">structure</h5>
                                <h4 class="mb-3">Well Documented</h4>
                                <p class="mb-4">used to describe something that is known about or known to be true
                                    because there are many documents that describe it, prove it, etc.</p>

                                <div class="vstack gap-2">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 me-2">
                                            <div class="avatar-xs icon-effect">
                                                <div class="avatar-title bg-transparent text-success rounded-circle h2">
                                                    <i class="ri-check-fill"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-0">Dynamic Content</p>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 me-2">
                                            <div class="avatar-xs icon-effect">
                                                <div class="avatar-title bg-transparent text-success rounded-circle h2">
                                                    <i class="ri-check-fill"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-0">Setup plugin's information.</p>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 me-2">
                                            <div class="avatar-xs icon-effect">
                                                <div class="avatar-title bg-transparent text-success rounded-circle h2">
                                                    <i class="ri-check-fill"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-0">Themes customization information</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
            </section>
            <!-- end features -->

            <!-- start plan -->
            <section class="section bg-light" id="plans">
                <div class="bg-overlay bg-overlay-pattern"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="text-center mb-5">
                                <h3 class="mb-3 fw-semibold">Choose the plan that's right for you</h3>
                                <p class="text-muted mb-4">Simple pricing. No hidden fees. Advanced features for you
                                    business.</p>

                                <div class="d-flex justify-content-center align-items-center">
                                    <div>
                                        <h5 class="fs-14 mb-0">Month</h5>
                                    </div>
                                    <div class="form-check form-switch fs-20 ms-3 " onclick="check()">
                                        <input class="form-check-input" type="checkbox" id="plan-switch">
                                        <label class="form-check-label" for="plan-switch"></label>
                                    </div>
                                    <div>
                                        <h5 class="fs-14 mb-0">Annual <span
                                                class="badge bg-success-subtle text-success">Save
                                                20%</span></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class="row gy-4">
                        <div class="col-lg-4">
                            <div class="card plan-box mb-0">
                                <div class="card-body p-4 m-2">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1">
                                            <h5 class="mb-1 fw-semibold">Basic Plan</h5>
                                            <p class="text-muted mb-0">For Startup</p>
                                        </div>
                                        <div class="avatar-sm">
                                            <div class="avatar-title bg-light rounded-circle text-secondary">
                                                <i class="ri-book-mark-line fs-20"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="py-4 text-center">
                                        <h1 class="month"><sup><small>$</small></sup><span
                                                class="ff-secondary fw-bold">19</span> <span
                                                class="fs-13 text-muted">/Month</span></h1>
                                        <h1 class="annual"><sup><small>$</small></sup><span
                                                class="ff-secondary fw-bold">171</span> <span
                                                class="fs-13 text-muted">/Year</span></h1>
                                    </div>

                                    <div>
                                        <ul class="list-unstyled text-muted vstack gap-3 ff-secondary">
                                            <li>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 text-success me-1">
                                                        <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        Upto <b>3</b> Projects
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 text-success me-1">
                                                        <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        Upto <b>299</b> Customers
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 text-success me-1">
                                                        <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        Scalable Bandwidth
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 text-success me-1">
                                                        <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <b>5</b> FTP Login
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 text-danger me-1">
                                                        <i class="ri-close-circle-fill fs-15 align-middle"></i>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <b>24/7</b> Support
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 text-danger me-1">
                                                        <i class="ri-close-circle-fill fs-15 align-middle"></i>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <b>Unlimited</b> Storage
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 text-danger me-1">
                                                        <i class="ri-close-circle-fill fs-15 align-middle"></i>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        Domain
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="mt-4">
                                            <a href="javascript:void(0);" class="btn btn-soft-primary w-100">Get
                                                Started</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-lg-4">
                            <div class="card plan-box mb-0 ribbon-box right">
                                <div class="card-body p-4 m-2">
                                    <div class="ribbon-two ribbon-two-danger"><span>Popular</span></div>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1">
                                            <h5 class="mb-1 fw-semibold">Pro Business</h5>
                                            <p class="text-muted mb-0">Professional plans</p>
                                        </div>
                                        <div class="avatar-sm">
                                            <div class="avatar-title bg-light rounded-circle text-secondary">
                                                <i class="ri-medal-fill fs-20"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="py-4 text-center">
                                        <h1 class="month"><sup><small>$</small></sup><span
                                                class="ff-secondary fw-bold">29</span> <span
                                                class="fs-13 text-muted">/Month</span></h1>
                                        <h1 class="annual"><sup><small>$</small></sup><span
                                                class="ff-secondary fw-bold">261</span> <span
                                                class="fs-13 text-muted">/Year</span></h1>
                                    </div>

                                    <div>
                                        <ul class="list-unstyled text-muted vstack gap-3 ff-secondary">
                                            <li>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 text-success me-1">
                                                        <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        Upto <b>15</b> Projects
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 text-success me-1">
                                                        <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <b>Unlimited</b> Customers
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 text-success me-1">
                                                        <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        Scalable Bandwidth
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 text-success me-1">
                                                        <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <b>12</b> FTP Login
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 text-success me-1">
                                                        <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <b>24/7</b> Support
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 text-danger me-1">
                                                        <i class="ri-close-circle-fill fs-15 align-middle"></i>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <b>Unlimited</b> Storage
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 text-danger me-1">
                                                        <i class="ri-close-circle-fill fs-15 align-middle"></i>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        Domain
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="mt-4">
                                            <a href="javascript:void(0);" class="btn btn-soft-primary w-100">Get
                                                Started</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-lg-4">
                            <div class="card plan-box mb-0">
                                <div class="card-body p-4 m-2">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1">
                                            <h5 class="mb-1 fw-semibold">Platinum Plan</h5>
                                            <p class="text-muted mb-0">Enterprise Businesses</p>
                                        </div>
                                        <div class="avatar-sm">
                                            <div class="avatar-title bg-light rounded-circle text-secondary">
                                                <i class="ri-stack-fill fs-20"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="py-4 text-center">
                                        <h1 class="month"><sup><small>$</small></sup><span
                                                class="ff-secondary fw-bold">39</span> <span
                                                class="fs-13 text-muted">/Month</span></h1>
                                        <h1 class="annual"><sup><small>$</small></sup><span
                                                class="ff-secondary fw-bold">351</span> <span
                                                class="fs-13 text-muted">/Year</span></h1>
                                    </div>

                                    <div>
                                        <ul class="list-unstyled text-muted vstack gap-3 ff-secondary">
                                            <li>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 text-success me-1">
                                                        <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <b>Unlimited</b> Projects
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 text-success me-1">
                                                        <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <b>Unlimited</b> Customers
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 text-success me-1">
                                                        <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        Scalable Bandwidth
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 text-success me-1">
                                                        <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <b>Unlimited</b> FTP Login
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 text-success me-1">
                                                        <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <b>24/7</b> Support
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 text-success me-1">
                                                        <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <b>Unlimited</b> Storage
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 text-success me-1">
                                                        <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        Domain
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="mt-4">
                                            <a href="javascript:void(0);" class="btn btn-soft-primary w-100">Get
                                                Started</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
                <!-- end container -->
            </section>
            <!-- end plan -->

            <!-- start faqs -->
            <section class="section">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="text-center mb-5">
                                <h3 class="mb-3 fw-semibold">Frequently Asked Questions</h3>
                                <p class="text-muted mb-4 ff-secondary">If you can not find answer to your question in our
                                    FAQ, you can always contact us or email us. We will answer you shortly!</p>

                                <div class="hstack gap-2 justify-content-center">
                                    <button type="button" class="btn btn-primary btn-label rounded-pill"><i
                                            class="ri-mail-line label-icon align-middle rounded-pill fs-16 me-2"></i> Email
                                        Us</button>
                                    <button type="button" class="btn btn-secondary btn-label rounded-pill"><i
                                            class="ri-twitter-line label-icon align-middle rounded-pill fs-16 me-2"></i>
                                        Send Us Tweet</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row g-lg-5 g-4">
                        <div class="col-lg-6">
                            <div class="d-flex align-items-center mb-2">
                                <div class="flex-shrink-0 me-1">
                                    <i class="ri-question-line fs-24 align-middle text-success me-1"></i>
                                </div>
                                <div class="flex-grow-1">
                                    <h5 class="mb-0 fw-semibold">General Questions</h5>
                                </div>
                            </div>
                            <div class="accordion custom-accordionwithicon custom-accordion-border accordion-border-box"
                                id="genques-accordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="genques-headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#genques-collapseOne" aria-expanded="true"
                                            aria-controls="genques-collapseOne">
                                            What is the purpose of using themes ?
                                        </button>
                                    </h2>
                                    <div id="genques-collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="genques-headingOne" data-bs-parent="#genques-accordion">
                                        <div class="accordion-body ff-secondary">
                                            A theme is a set of colors, fonts, effects, and more that can be applied to your
                                            entire presentation to give it a
                                            consistent, professional look. You've already been using a theme, even if you
                                            didn't know it: the default Office theme, which consists.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="genques-headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#genques-collapseTwo" aria-expanded="false"
                                            aria-controls="genques-collapseTwo">
                                            Can a theme have more than one theme?
                                        </button>
                                    </h2>
                                    <div id="genques-collapseTwo" class="accordion-collapse collapse"
                                        aria-labelledby="genques-headingTwo" data-bs-parent="#genques-accordion">
                                        <div class="accordion-body ff-secondary">
                                            A story can have as many themes as the reader can identify based on recurring
                                            patterns and parallels within the story
                                            itself. In looking at ways to separate themes into a hierarchy, we might find it
                                            useful to follow the example of a single book.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="genques-headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#genques-collapseThree" aria-expanded="false"
                                            aria-controls="genques-collapseThree">
                                            What are theme features?
                                        </button>
                                    </h2>
                                    <div id="genques-collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="genques-headingThree" data-bs-parent="#genques-accordion">
                                        <div class="accordion-body ff-secondary">
                                            Theme features is a set of specific functionality that may be enabled by theme
                                            authors. Themes must register each
                                            individual Theme Feature that the author wishes to support. Theme support
                                            functions should be called in the theme's functions.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="genques-headingFour">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#genques-collapseFour" aria-expanded="false"
                                            aria-controls="genques-collapseFour">
                                            What is simple theme?
                                        </button>
                                    </h2>
                                    <div id="genques-collapseFour" class="accordion-collapse collapse"
                                        aria-labelledby="genques-headingFour" data-bs-parent="#genques-accordion">
                                        <div class="accordion-body ff-secondary">
                                            Simple is a free WordPress theme, by Themify, built exactly what it is named
                                            for: simplicity. Immediately upgrade the
                                            quality of your WordPress site with the simple theme To use the built-in Chrome
                                            theme editor.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end accordion-->

                        </div>
                        <!-- end col -->
                        <div class="col-lg-6">
                            <div class="d-flex align-items-center mb-2">
                                <div class="flex-shrink-0 me-1">
                                    <i class="ri-shield-keyhole-line fs-24 align-middle text-success me-1"></i>
                                </div>
                                <div class="flex-grow-1">
                                    <h5 class="mb-0 fw-semibold">Privacy &amp; Security</h5>
                                </div>
                            </div>

                            <div class="accordion custom-accordionwithicon custom-accordion-border accordion-border-box"
                                id="privacy-accordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="privacy-headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#privacy-collapseOne" aria-expanded="false"
                                            aria-controls="privacy-collapseOne">
                                            Does Word have night mode?
                                        </button>
                                    </h2>
                                    <div id="privacy-collapseOne" class="accordion-collapse collapse"
                                        aria-labelledby="privacy-headingOne" data-bs-parent="#privacy-accordion">
                                        <div class="accordion-body ff-secondary">
                                            You can run Microsoft Word in dark mode, which uses a dark color palette to help
                                            reduce eye strain in low light
                                            settings. You can choose to make the document white or black using the Switch
                                            Modes button in the ribbon's View tab.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="privacy-headingTwo">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#privacy-collapseTwo" aria-expanded="true"
                                            aria-controls="privacy-collapseTwo">
                                            Is theme an opinion?
                                        </button>
                                    </h2>
                                    <div id="privacy-collapseTwo" class="accordion-collapse collapse show"
                                        aria-labelledby="privacy-headingTwo" data-bs-parent="#privacy-accordion">
                                        <div class="accordion-body ff-secondary">
                                            A theme is an opinion the author expresses on the subject, for instance, the
                                            author's dissatisfaction with the narrow
                                            confines of French bourgeois marriage during that period theme is an idea that a
                                            writer repeats.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="privacy-headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#privacy-collapseThree" aria-expanded="false"
                                            aria-controls="privacy-collapseThree">
                                            How do you develop a theme?
                                        </button>
                                    </h2>
                                    <div id="privacy-collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="privacy-headingThree" data-bs-parent="#privacy-accordion">
                                        <div class="accordion-body ff-secondary">
                                            A short story, novella, or novel presents a narrative to its reader. Perhaps
                                            that narrative involves mystery, terror,
                                            romance, comedy, or all of the above. These works of fiction may also contain
                                            memorable characters, vivid
                                            world-building, literary devices.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="privacy-headingFour">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#privacy-collapseFour" aria-expanded="false"
                                            aria-controls="privacy-collapseFour">
                                            Do stories need themes?
                                        </button>
                                    </h2>
                                    <div id="privacy-collapseFour" class="accordion-collapse collapse"
                                        aria-labelledby="privacy-headingFour" data-bs-parent="#privacy-accordion">
                                        <div class="accordion-body ff-secondary">
                                            A story can have as many themes as the reader can identify based on recurring
                                            patterns and parallels within the story
                                            itself. In looking at ways to separate themes into a hierarchy, we might find it
                                            useful to follow the example of a
                                            single book.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end accordion-->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
            </section>
            <!-- end faqs -->

            <!-- start dasar hukum -->
            <section class="section bg-primary" id="reviews">
                <div class="bg-overlay bg-overlay-pattern"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <div class="text-center">
                                <div>
                                    <i class="ri-scales-3-line text-secondary display-3"></i>
                                </div>
                                <h4 class="text-white mb-5">Dasar <span class="text-secondary">Hukum</span> Pemerintahan
                                    Desa</h4>

                                <!-- Swiper -->
                                <div class="swiper client-review-swiper rounded" dir="ltr">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="row justify-content-center">
                                                <div class="col-10">
                                                    <div class="text-white-50">
                                                        <p class="fs-18 ff-secondary mb-4">"Undang-Undang Nomor 6 Tahun 2014
                                                            tentang Desa memberikan landasan hukum yang kuat bagi
                                                            penyelenggaraan pemerintahan desa yang demokratis dan
                                                            partisipatif."</p>

                                                        <div>
                                                            <h5 class="text-white">UU No. 6 Tahun 2014</h5>
                                                            <p>- Tentang Desa</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end slide -->
                                        <div class="swiper-slide">
                                            <div class="row justify-content-center">
                                                <div class="col-10">
                                                    <div class="text-white-50">
                                                        <p class="fs-18 ff-secondary mb-4">"Peraturan Pemerintah Nomor 43
                                                            Tahun 2014 tentang Peraturan Pelaksanaan Undang-Undang Nomor 6
                                                            Tahun 2014 tentang Desa mengatur tata cara penyelenggaraan
                                                            pemerintahan desa."</p>

                                                        <div>
                                                            <h5 class="text-white">PP No. 43 Tahun 2014</h5>
                                                            <p>- Peraturan Pelaksanaan UU Desa</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end slide -->
                                        <div class="swiper-slide">
                                            <div class="row justify-content-center">
                                                <div class="col-10">
                                                    <div class="text-white-50">
                                                        <p class="fs-18 ff-secondary mb-4">"Undang-Undang Nomor 25 Tahun
                                                            2004 tentang Sistem Perencanaan Pembangunan Nasional menjadi
                                                            acuan dalam penyusunan perencanaan pembangunan desa."</p>

                                                        <div>
                                                            <h5 class="text-white">UU No. 25 Tahun 2004</h5>
                                                            <p>- Sistem Perencanaan Pembangunan Nasional</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end slide -->
                                        <div class="swiper-slide">
                                            <div class="row justify-content-center">
                                                <div class="col-10">
                                                    <div class="text-white-50">
                                                        <p class="fs-18 ff-secondary mb-4">"Peraturan Menteri Dalam Negeri
                                                            Nomor 114 Tahun 2014 tentang Pedoman Pembangunan Desa memberikan
                                                            pedoman teknis pelaksanaan pembangunan di tingkat desa."</p>

                                                        <div>
                                                            <h5 class="text-white">Permendagri No. 114 Tahun 2014</h5>
                                                            <p>- Pedoman Pembangunan Desa</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end slide -->
                                    </div>
                                    <div class="swiper-button-next bg-white rounded-circle"></div>
                                    <div class="swiper-button-prev bg-white rounded-circle"></div>
                                    <div class="swiper-pagination position-relative mt-2"></div>
                                </div>
                                <!-- end slider -->
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
            </section>
            <!-- end dasar hukum -->

            <!-- start counter -->
            <section class="py-5 position-relative bg-light">
                <div class="container">
                    <div class="row text-center gy-4">
                        <div class="col-lg-3 col-6">
                            <div>
                                <h2 class="mb-2"><span class="counter-value" data-target="4672">0</span></h2>
                                <div class="text-muted">Total Penduduk</div>
                            </div>
                        </div>
                        <!-- end col -->

                        <div class="col-lg-3 col-6">
                            <div>
                                <h2 class="mb-2"><span class="counter-value" data-target="668">0</span> Ha</h2>
                                <div class="text-muted">Luas Wilayah</div>
                            </div>
                        </div>
                        <!-- end col -->

                        <div class="col-lg-3 col-6">
                            <div>
                                <h2 class="mb-2"><span class="counter-value" data-target="4">0</span></h2>
                                <div class="text-muted">Jumlah Dusun</div>
                            </div>
                        </div>
                        <!-- end col -->
                        <div class="col-lg-3 col-6">
                            <div>
                                <h2 class="mb-2"><span class="counter-value" data-target="14">0</span></h2>
                                <div class="text-muted">Jumlah RT</div>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
            </section>
            <!-- end counter -->

            <!-- start Work Process -->
            <section class="section">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="text-center mb-5">
                                <h3 class="mb-3 fw-semibold">Our Work Process</h3>
                                <p class="text-muted mb-4 ff-secondary">In an ideal world this website wouldnâ€™t exist, a
                                    client would acknowledge the importance of having web copy before the Proin vitae ipsum
                                    vel ex finibus semper design starts.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row text-center">
                        <div class="col-lg-4">
                            <div class="process-card mt-4">
                                <div class="process-arrow-img d-none d-lg-block">
                                    <img src="<?php echo e(URL::asset('build/images/landing/process-arrow-img.png')); ?>" alt=""
                                        class="img-fluid">
                                </div>
                                <div class="avatar-sm icon-effect mx-auto mb-4">
                                    <div class="avatar-title bg-transparent text-success rounded-circle h1">
                                        <i class="ri-quill-pen-line"></i>
                                    </div>
                                </div>

                                <h5>Tell us what you need</h5>
                                <p class="text-muted ff-secondary">The profession and the employer and your desire to make
                                    your mark.</p>
                            </div>
                        </div>
                        <!-- end col -->
                        <div class="col-lg-4">
                            <div class="process-card mt-4">
                                <div class="process-arrow-img d-none d-lg-block">
                                    <img src="<?php echo e(URL::asset('build/images/landing/process-arrow-img.png')); ?>" alt=""
                                        class="img-fluid">
                                </div>
                                <div class="avatar-sm icon-effect mx-auto mb-4">
                                    <div class="avatar-title bg-transparent text-success rounded-circle h1">
                                        <i class="ri-user-follow-line"></i>
                                    </div>
                                </div>

                                <h5>Get free quotes</h5>
                                <p class="text-muted ff-secondary">The most important aspect of beauty was, therefore, an
                                    inherent part.</p>
                            </div>
                        </div>
                        <!-- end col -->
                        <div class="col-lg-4">
                            <div class="process-card mt-4">
                                <div class="avatar-sm icon-effect mx-auto mb-4">
                                    <div class="avatar-title bg-transparent text-success rounded-circle h1">
                                        <i class="ri-book-mark-line"></i>
                                    </div>
                                </div>

                                <h5>Deliver high quality product</h5>
                                <p class="text-muted ff-secondary">We quickly learn to fear and thus automatically avoid
                                    potentially.</p>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
            </section>
            <!-- end Work Process -->

            <!-- start struktur pemerintahan -->
            <section class="section bg-light" id="team">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="text-center mb-5">
                                <h3 class="mb-3 fw-semibold">Struktur <span class="text-danger">Pemerintahan Desa</span>
                                </h3>
                                <p class="text-muted mb-4 ff-secondary">Mengenal perangkat desa dan pimpinan yang melayani
                                    masyarakat Desa Cipeundeuy dengan dedikasi tinggi untuk kesejahteraan bersama.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <!-- Kepala Desa -->
                    <div class="row justify-content-center mb-4">
                        <div class="col-lg-4 col-sm-6">
                            <div class="card shadow-sm border-0">
                                <div class="card-body text-center p-4">
                                    <div class="avatar-xl mx-auto mb-4 position-relative">
                                        <div
                                            class="avatar-xl bg-primary-subtle rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="ri-user-crown-line fs-36 text-primary"></i>
                                        </div>
                                    </div>
                                    <h5 class="mb-1 text-body">Dede Krismayadi</h5>
                                    <p class="text-muted mb-0 ff-secondary fw-semibold">Kepala Desa</p>
                                    <small class="text-muted">2023 s/d Sekarang</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Perangkat Desa -->
                    <div class="row">
                        <div class="col-lg-4 col-sm-6">
                            <div class="card">
                                <div class="card-body text-center p-4">
                                    <div class="avatar-lg mx-auto mb-3">
                                        <div
                                            class="avatar-lg bg-success-subtle rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="ri-user-settings-line fs-24 text-success"></i>
                                        </div>
                                    </div>
                                    <h6 class="mb-1 text-body">Cecep Hendra</h6>
                                    <p class="text-muted mb-0 ff-secondary">Sekretaris Desa</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="card">
                                <div class="card-body text-center p-4">
                                    <div class="avatar-lg mx-auto mb-3">
                                        <div
                                            class="avatar-lg bg-info-subtle rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="ri-government-line fs-24 text-info"></i>
                                        </div>
                                    </div>
                                    <h6 class="mb-1 text-body">Tenten Wandani Mustika</h6>
                                    <p class="text-muted mb-0 ff-secondary">Kasi Pemerintahan</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="card">
                                <div class="card-body text-center p-4">
                                    <div class="avatar-lg mx-auto mb-3">
                                        <div
                                            class="avatar-lg bg-warning-subtle rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="ri-heart-line fs-24 text-warning"></i>
                                        </div>
                                    </div>
                                    <h6 class="mb-1 text-body">Muhammad Dina Sujana</h6>
                                    <p class="text-muted mb-0 ff-secondary">Kasi Kesejahteraan</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="card">
                                <div class="card-body text-center p-4">
                                    <div class="avatar-lg mx-auto mb-3">
                                        <div
                                            class="avatar-lg bg-secondary-subtle rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="ri-customer-service-2-line fs-24 text-secondary"></i>
                                        </div>
                                    </div>
                                    <h6 class="mb-1 text-body">Rifqi Fauzi</h6>
                                    <p class="text-muted mb-0 ff-secondary">Kasi Pelayanan</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="card">
                                <div class="card-body text-center p-4">
                                    <div class="avatar-lg mx-auto mb-3">
                                        <div
                                            class="avatar-lg bg-danger-subtle rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="ri-money-dollar-circle-line fs-24 text-danger"></i>
                                        </div>
                                    </div>
                                    <h6 class="mb-1 text-body">Hilman Rijki</h6>
                                    <p class="text-muted mb-0 ff-secondary">Kaur Keuangan</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="card">
                                <div class="card-body text-center p-4">
                                    <div class="avatar-lg mx-auto mb-3">
                                        <div
                                            class="avatar-lg bg-primary-subtle rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="ri-file-text-line fs-24 text-primary"></i>
                                        </div>
                                    </div>
                                    <h6 class="mb-1 text-body">Yohandi</h6>
                                    <p class="text-muted mb-0 ff-secondary">Kaur Umum</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="card">
                                <div class="card-body text-center p-4">
                                    <div class="avatar-lg mx-auto mb-3">
                                        <div
                                            class="avatar-lg bg-success-subtle rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="ri-calendar-check-line fs-24 text-success"></i>
                                        </div>
                                    </div>
                                    <h6 class="mb-1 text-body">Rizwan Rohiman Robani</h6>
                                    <p class="text-muted mb-0 ff-secondary">Kaur Perencanaan</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row perangkat -->

                    <!-- Kepala Dusun -->
                    <div class="row mt-4">
                        <div class="col-lg-12">
                            <div class="text-center mb-4">
                                <h5 class="text-muted">Kepala Dusun</h5>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="card">
                                <div class="card-body text-center p-3">
                                    <div class="avatar-md mx-auto mb-3">
                                        <div
                                            class="avatar-md bg-info-subtle rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="ri-map-pin-line fs-20 text-info"></i>
                                        </div>
                                    </div>
                                    <h6 class="mb-1 text-body">Iwan Badru Zaman</h6>
                                    <p class="text-muted mb-0 ff-secondary">Kepala Dusun I</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="card">
                                <div class="card-body text-center p-3">
                                    <div class="avatar-md mx-auto mb-3">
                                        <div
                                            class="avatar-md bg-info-subtle rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="ri-map-pin-line fs-20 text-info"></i>
                                        </div>
                                    </div>
                                    <h6 class="mb-1 text-body">Miftahudin, S.Pd</h6>
                                    <p class="text-muted mb-0 ff-secondary">Kepala Dusun II</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="card">
                                <div class="card-body text-center p-3">
                                    <div class="avatar-md mx-auto mb-3">
                                        <div
                                            class="avatar-md bg-info-subtle rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="ri-map-pin-line fs-20 text-info"></i>
                                        </div>
                                    </div>
                                    <h6 class="mb-1 text-body">Azan Zayani</h6>
                                    <p class="text-muted mb-0 ff-secondary">Kepala Dusun III</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="card">
                                <div class="card-body text-center p-3">
                                    <div class="avatar-md mx-auto mb-3">
                                        <div
                                            class="avatar-md bg-info-subtle rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="ri-map-pin-line fs-20 text-info"></i>
                                        </div>
                                    </div>
                                    <h6 class="mb-1 text-body">Bambang Rohendi</h6>
                                    <p class="text-muted mb-0 ff-secondary">Kepala Dusun IV</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row kepala dusun -->

                    <!-- BPD -->
                    <div class="row mt-4">
                        <div class="col-lg-12">
                            <div class="text-center mb-4">
                                <h5 class="text-muted">Badan Permusyawaratan Desa (BPD)</h5>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="row justify-content-center">
                                <div class="col-lg-3 col-sm-6">
                                    <div class="card">
                                        <div class="card-body text-center p-3">
                                            <div class="avatar-md mx-auto mb-3">
                                                <div
                                                    class="avatar-md bg-warning-subtle rounded-circle d-flex align-items-center justify-content-center">
                                                    <i class="ri-user-star-line fs-20 text-warning"></i>
                                                </div>
                                            </div>
                                            <h6 class="mb-1 text-body">H. Duduy Abdurahman</h6>
                                            <p class="text-muted mb-0 ff-secondary">Ketua BPD</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="card">
                                        <div class="card-body text-center p-3">
                                            <div class="avatar-md mx-auto mb-3">
                                                <div
                                                    class="avatar-md bg-secondary-subtle rounded-circle d-flex align-items-center justify-content-center">
                                                    <i class="ri-user-line fs-20 text-secondary"></i>
                                                </div>
                                            </div>
                                            <h6 class="mb-1 text-body">Ii Sumirat</h6>
                                            <p class="text-muted mb-0 ff-secondary">Wakil Ketua BPD</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="card">
                                        <div class="card-body text-center p-3">
                                            <div class="avatar-md mx-auto mb-3">
                                                <div
                                                    class="avatar-md bg-success-subtle rounded-circle d-flex align-items-center justify-content-center">
                                                    <i class="ri-edit-line fs-20 text-success"></i>
                                                </div>
                                            </div>
                                            <h6 class="mb-1 text-body">Firman Gustiana, S.Sos</h6>
                                            <p class="text-muted mb-0 ff-secondary">Sekretaris BPD</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row BPD -->

                </div>
                <!-- end container -->
            </section>
            <!-- end struktur pemerintahan -->

            <!-- start contact -->
            <section class="section" id="contact">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="text-center mb-5">
                                <h3 class="mb-3 fw-semibold">Get In Touch</h3>
                                <p class="text-muted mb-4 ff-secondary">We thrive when coming up with innovative ideas but
                                    also understand that a smart concept should be supported with faucibus sapien odio
                                    measurable results.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row gy-4">
                        <div class="col-lg-4">
                            <div>
                                <div class="mt-4">
                                    <h5 class="fs-13 text-muted text-uppercase">Office Address 1:</h5>
                                    <div class="ff-secondary fw-semibold">4461 Cedar Street Moro, <br />AR 72368</div>
                                </div>
                                <div class="mt-4">
                                    <h5 class="fs-13 text-muted text-uppercase">Office Address 2:</h5>
                                    <div class="ff-secondary fw-semibold">2467 Swick Hill Street <br />New Orleans, LA
                                    </div>
                                </div>
                                <div class="mt-4">
                                    <h5 class="fs-13 text-muted text-uppercase">Working Hours:</h5>
                                    <div class="ff-secondary fw-semibold">9:00am to 6:00pm</div>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                        <div class="col-lg-8">
                            <div>
                                <form>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-4">
                                                <label for="name" class="form-label fs-13">Name</label>
                                                <input name="name" id="name" type="text"
                                                    class="form-control bg-light border-light" placeholder="Your name*">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-4">
                                                <label for="email" class="form-label fs-13">Email</label>
                                                <input name="email" id="email" type="email"
                                                    class="form-control bg-light border-light" placeholder="Your email*">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="mb-4">
                                                <label for="subject" class="form-label fs-13">Subject</label>
                                                <input type="text" class="form-control bg-light border-light" id="subject"
                                                    name="subject" placeholder="Your Subject.." />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="mb-3">
                                                <label for="comments" class="form-label fs-13">Message</label>
                                                <textarea name="comments" id="comments" rows="3"
                                                    class="form-control bg-light border-light"
                                                    placeholder="Your message..."></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 text-end">
                                            <input type="submit" id="submit" name="send" class="submitBnt btn btn-primary"
                                                value="Send Message">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
            </section>
            <!-- end contact -->

            <!-- start cta -->
            <section class="py-5 bg-primary position-relative">
                <div class="bg-overlay bg-overlay-pattern opacity-50"></div>
                <div class="container">
                    <div class="row align-items-center gy-4">
                        <div class="col-sm">
                            <div>
                                <h4 class="text-white mb-0 fw-semibold">Build your web App/SaaS with Velzon dashboard</h4>
                            </div>
                        </div>
                        <!-- end col -->
                        <div class="col-sm-auto">
                            <div>
                                <a href="https://1.envato.market/velzon-admin" target="_blank"
                                    class="btn bg-gradient btn-danger"><i
                                        class="ri-shopping-cart-2-line align-middle me-1"></i> Buy Now</a>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
            </section>
            <!-- end cta -->

            <!-- Start footer -->
            <footer class="custom-footer bg-dark py-5 position-relative">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 mt-4">
                            <div>
                                <div>
                                    <img src="<?php echo e(URL::asset('build/images/logo-light.png')); ?>" alt="logo light" height="17">
                                </div>
                                <div class="mt-4 fs-13">
                                    <p>Premium Multipurpose Admin & Dashboard Template</p>
                                    <p class="ff-secondary">You can build any type of web application like eCommerce, CRM,
                                        CMS, Project management apps, Admin Panels, etc using Velzon.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-7 ms-lg-auto">
                            <div class="row">
                                <div class="col-sm-4 mt-4">
                                    <h5 class="text-white mb-0">Company</h5>
                                    <div class="text-muted mt-3">
                                        <ul class="list-unstyled ff-secondary footer-list">
                                            <li><a href="pages-profile">About Us</a></li>
                                            <li><a href="pages-gallery">Gallery</a></li>
                                            <li><a href="apps-projects-overview">Projects</a></li>
                                            <li><a href="pages-timeline">Timeline</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-sm-4 mt-4">
                                    <h5 class="text-white mb-0">Apps Pages</h5>
                                    <div class="text-muted mt-3">
                                        <ul class="list-unstyled ff-secondary footer-list">
                                            <li><a href="pages-pricing">Calendar</a></li>
                                            <li><a href="apps-mailbox">Mailbox</a></li>
                                            <li><a href="apps-chat">Chat</a></li>
                                            <li><a href="apps-crm-deals">Deals</a></li>
                                            <li><a href="apps-tasks-kanban">Kanban Board</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-sm-4 mt-4">
                                    <h5 class="text-white mb-0">Support</h5>
                                    <div class="text-muted mt-3">
                                        <ul class="list-unstyled ff-secondary footer-list">
                                            <li><a href="pages-faqs">FAQ</a></li>
                                            <li><a href="pages-faqs">Contact</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row text-center text-sm-start align-items-center mt-5">
                        <div class="col-sm-6">

                            <div>
                                <p class="copy-rights mb-0">
                                    <script>
                                        document.write(new Date().getFullYear())
                                    </script> Â© Velzon - Themesbrand
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end mt-3 mt-sm-0">
                                <ul class="list-inline mb-0 footer-social-link">
                                    <li class="list-inline-item">
                                        <a href="javascript: void(0);" class="avatar-xs d-block">
                                            <div class="avatar-title rounded-circle">
                                                <i class="ri-facebook-fill"></i>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="javascript: void(0);" class="avatar-xs d-block">
                                            <div class="avatar-title rounded-circle">
                                                <i class="ri-github-fill"></i>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="javascript: void(0);" class="avatar-xs d-block">
                                            <div class="avatar-title rounded-circle">
                                                <i class="ri-linkedin-fill"></i>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="javascript: void(0);" class="avatar-xs d-block">
                                            <div class="avatar-title rounded-circle">
                                                <i class="ri-google-fill"></i>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="javascript: void(0);" class="avatar-xs d-block">
                                            <div class="avatar-title rounded-circle">
                                                <i class="ri-dribbble-line"></i>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- end footer -->


            <!--start back-to-top-->
            <button onclick="topFunction()" class="btn btn-danger btn-icon landing-back-top" id="back-to-top">
                <i class="ri-arrow-up-line"></i>
            </button>
            <!--end back-to-top-->

        </div>
        <!-- end layout wrapper -->
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('script'); ?>
        <script src="<?php echo e(URL::asset('build/libs/swiper/swiper-bundle.min.js')); ?>"></script>
        <script src="<?php echo e(URL::asset('build/js/pages/landing.init.js')); ?>"></script>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master-without-nav', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon2\www\cipeundeuy\resources\views/landing.blade.php ENDPATH**/ ?>