<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>M-Tugas | Beranda</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="{{ asset('enno/assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('enno/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('enno/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('enno/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('enno/assets/vendor/aos/aos.css" rel="stylesheet') }}">
    <link href="{{ asset('enno/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('enno/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('enno/assets/css/main.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: eNno
  * Template URL: https://bootstrapmade.com/enno-free-simple-bootstrap-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

    <header id="header" class="header d-flex align-items-center sticky-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center">

            <a href="#" class="logo d-flex align-items-center me-auto">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.png" alt=""> -->
                <h1 class="sitename">M-Tugas</h1>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="#hero" class="active">Beranda</a></li>
                    <li><a href="#about">Tentang Kita</a></li>
                    <li><a href="#contact">Kontak</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

            @auth
                <a class="btn-getstarted" href="{{ route('dashboard') }}">Dashboard</a>
            @else
                <a class="btn-getstarted" href="{{ route('login') }}">Login</a>
            @endauth

        </div>
    </header>

    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section">

            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center"
                        data-aos="fade-up">
                        <h1>M-tugas</h1>
                        <p>Aplikasi Manajemen Tugas</p>
                        <div class="d-flex">
                            @auth
                                <a href="{{ route('dashboard') }}" class="btn-get-started">Dashboard</a>
                            @else
                                <a href="{{ route('login') }}" class="btn-get-started">Login</a>
                            @endauth
                        </div>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="100">
                        <img src="{{ asset('enno/assets/img/hero-img.png') }}" class="img-fluid animated"
                            alt="">
                    </div>
                </div>
            </div>

        </section><!-- /Hero Section -->


        <!-- About Section -->
        <section id="about" class="about section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <span>Tentang Kita<br></span>
                <h2>Tentang Kita</h2>
                <p
                    style="font-family: 'Segoe UI', sans-serif; font-size: 20px; font-style: italic; color: #333; background: linear-gradient(to right, #e0f7fa, #ffffff); padding: 30px 40px; border-left: 6px solid #00bfa5; border-radius: 12px; box-shadow: 0 8px 24px rgba(0, 0, 0, 0.08); margin: 40px auto; max-width: 700px; line-height: 1.8; position: relative;">
                    <span
                        style="display: block; font-size: 24px; font-weight: bold; color: #00bfa5; margin-bottom: 10px;">#TentangKita</span>
                    Kami adalah hasil dari proses, semangat, dan kebersamaan yang tak pernah usai—karena ini tentang
                    kita.
                </p>

                </p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">
                    <div class="col-lg-6 position-relative align-self-start" data-aos="fade-up" data-aos-delay="100">
                    </div>
                    <div class="col-xl-12 content" data-aos="fade-up" data-aos-delay="200">
                        <h3></h3>
                        <p
                            style="font-style: italic; font-size: 18px; line-height: 1.8; color: #333; background: linear-gradient(to right, #e0f7fa, #ffffff); padding: 30px 40px; border-left: 6px solid #00bfa5; border-radius: 16px; box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08); max-width: 800px; margin: 40px auto; position: relative; font-family: 'Segoe UI', sans-serif; transition: transform 0.3s ease, box-shadow 0.3s ease;">
                            <span
                                style="display: block; font-size: 22px; font-weight: bold; color: #00796b; margin-bottom: 10px;">M-tugas</span>
                            M-tugas adalah aplikasi manajemen tugas yang dirancang untuk membantu individu, tim, maupun
                            organisasi dalam mengelola pekerjaan secara lebih terstruktur dan efisien. Dengan antarmuka
                            yang intuitif dan fitur kolaboratif, M-tugas memungkinkan pengguna untuk membuat, mengatur,
                            dan memantau setiap tugas dengan lebih jelas dan terarah.
                            <br><br>
                            Aplikasi ini mendukung berbagai kebutuhan, mulai dari perencanaan harian, proyek jangka
                            panjang, hingga kerja tim lintas departemen. Fitur pengingat, pelacakan progres, prioritas
                            tugas, dan integrasi kalender membantu memastikan tidak ada pekerjaan yang terlewat.
                        </p>

                        <ul
                            style="list-style: none; padding: 30px; font-size: 16px; line-height: 1.7; color: #333; background-color: #ffffff; border-left: 5px solid #00bfa5; border-radius: 16px; box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08); max-width: 800px; margin: 40px auto; font-family: sans-serif;">
                            <li style="margin-bottom: 16px;">
                                <span style="color: #00bfa5; font-weight: bold; margin-right: 8px;">✓</span>
                                Melaksanakan tugas dengan penuh tanggung jawab dan sesuai dengan tenggat waktu yang telah ditentukan.
                            </li>
                            <li style="margin-bottom: 16px;">
                                <span style="color: #00bfa5; font-weight: bold; margin-right: 8px;">✓</span>
                                Menjaga kualitas hasil kerja agar sesuai dengan standar dan tujuan tugas yang diberikan.
                            </li>
                            <li>
                                <span style="color: #00bfa5; font-weight: bold; margin-right: 8px;">✓</span>
                                Melaksanakan tugas secara menyeluruh, termasuk riset, analisis, dan penyusunan laporan, guna menghasilkan output yang optimal dan bermanfaat.
                            </li>
                        </ul>
                        <p style="padding: 20px; border: 2px dashed #00acc1; border-radius: 12px; background: rgba(0, 172, 193, 0.05); font-family: 'Segoe UI', sans-serif; font-size: 15.5px; color: #2c3e50; line-height: 1.7; position: relative;">
                            <span style="position: absolute; top: -12px; left: 16px; background-color: #00acc1; color: #fff; padding: 2px 10px; border-radius: 12px; font-size: 13px; font-weight: 600;">
                              💡 Info
                            </span>
                            Aplikasi ini mendukung berbagai kebutuhan, mulai dari perencanaan harian, proyek jangka panjang, hingga kerja tim lintas departemen. Fitur pengingat, pelacakan progres, prioritas tugas, dan integrasi kalender membantu memastikan tidak ada pekerjaan yang terlewat.
                          </p>


                    </div>
                </div>

            </div>

        </section><!-- /About Section -->


        <!-- Contact Section -->
        <section id="contact" class="contact section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <span>Kontak</span>
                <h2>Kontak</h2>
                <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">

                    <div class="col-xl-12">

                        <div class="info-wrap"
                            style="background: linear-gradient(to right, #f2fae0, #63c8dadf); padding: 40px; border-radius: 20px; box-shadow: 0 12px 24px rgba(0,0,0,0.08); font-family: 'Segoe UI', sans-serif; max-width: 1000px; margin: 0 auto;">

                            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200"
                                style="margin-bottom: 30px; align-items: flex-start;">
                                <div style="font-size: 28px; color: #00bfa5; margin-right: 16px;">📍</div>
                                <div>
                                    <h3 style="margin: 0 0 5px; color: #00796b;">Alamat</h3>
                                    <p
                                        style="margin: 0; font-size: 16px; color: #444; background: #e0f7fa; display: inline-block; padding: 6px 14px; border-radius: 8px; font-weight: 500; letter-spacing: 0.3px; box-shadow: 0 2px 6px rgba(0,0,0,0.08);">
                                        📍 Batu Ampar, Guluk-Guluk, Sumenep
                                    </p>

                                </div>
                            </div>

                            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300"
                                style="margin-bottom: 30px; align-items: flex-start;">
                                <div style="font-size: 28px; color: #00bfa5; margin-right: 16px;">📞</div>
                                <div>
                                    <h3 style="margin: 0 0 5px; color: #00796b;">Kontak Saya</h3>
                                    <p
                                        style="margin: 0; font-size: 16px; color: #444; background: #e0f7fa; display: inline-block; padding: 6px 14px; border-radius: 8px; font-weight: 500; letter-spacing: 0.3px; box-shadow: 0 2px 6px rgba(0,0,0,0.08);">
                                        📱 082228818416
                                    </p>
                                </div>
                            </div>

                            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400"
                                style="margin-bottom: 30px; align-items: flex-start;">
                                <div style="font-size: 28px; color: #00bfa5; margin-right: 16px;">✉️</div>
                                <div>
                                    <h3 style="margin: 0 0 5px; color: #00796b;">Email</h3>
                                    <p
                                        style="margin: 0; font-size: 16px; color: #444; background: #e0f7fa; display: inline-block; padding: 6px 14px; border-radius: 8px; font-weight: 500; letter-spacing: 0.3px; box-shadow: 0 2px 6px rgba(0,0,0,0.08);">
                                        ✉️ rb.aldi1222@gmail.com
                                    </p>
                                </div>
                            </div>

                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.7920704149583!2d113.58927807363219!3d-7.033708392968193!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd9da68db808f9f%3A0xf25fcffe920f9092!2sPasar%20Bartir!5e0!3m2!1sid!2sid!4v1746007672362!5m2!1sid!2sid"
                                frameborder="0"
                                style="border:0; width: 100%; height: 270px; border-radius: 12px; margin-top: 20px;"
                                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                            </iframe>

                        </div>

                    </div>
                </div>

            </div>

        </section><!-- /Contact Section -->

    </main>

    <footer id="footer" class="footer">

        <div class="container copyright text-center mt-4">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">eNno</strong> <span>All Rights Reserved</span>
            </p>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you've purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> Distributed by <a
                    href=“https://themewagon.com>ThemeWagon
            </div>
        </div>

    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('enno/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('enno/assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('enno/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('enno/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('enno/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('enno/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('enno/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('enno/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('enno/assets/js/main.js') }}"></script>

</body>

</html>
