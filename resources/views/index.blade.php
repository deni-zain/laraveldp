<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>dua putra </title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <link rel="shorcut icon" href="assets/img/dp.png" type="image/x-icon">
    <!-- bootsrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <script type="text/javascript"
        src="https://platform-api.sharethis.com/js/sharethis.js#property=61a0b918427bfd001999d771&product=inline-reaction-buttons"
        async="async"></script>
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center justify-content-lg-between">


            <h1 class="logo me-auto me-lg-0"><a href="index.html">DUA PUTRA</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->


            <br>
            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">About</a></li>
                    <li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li>
                    <li><a class="nav-link scrollto" href="#team">Team</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                    <li><a class="nav-link scrollto" href="/data">Data</a></li>
                    {{-- @can('admin')
                    @endcan --}}
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
            @auth
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        @if(auth()->user()->image)
                        @else
                        <span id="span">deni andrian</span>
                        <img src="aset/brand/avatar.png" alt="deni zain" width="30" class="rounded-circle mb-4">
                        @endif
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="/dashboard">my dashboard</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <form action="/logout" method="post">
                                @csrf
                                <button type="submit" class="dropdown-item "><i class="bi bi-box-arrow-right"></i>
                                    logout
                                </button>
                            </form>
                        </li>
                    </ul>
                </li>
            @else
                <a href="/login" class="get-started-btn scrollto ">Login<i class="bi bi-person-plus-fill"></i></a>
            @endauth
        </div>
    </header><!-- End Header -->
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center justify-content-center">
        <div class="container" data-aos="fade-up">
            <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">

                <div>
                    <h1>Welcome Dua Putra</h1>
                    <h2>We are personal of talented digital tecnophener</h2>
                </div>
            </div>

            <div class="row gy-4 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
                <div class="col-xl-2 col-md-4">
                    <div class="icon-box">
                        <i class="ri-store-line"></i>
                        <h3><a href="">Business</a></h3>
                    </div>
                </div>
                <div class="col-xl-2 col-md-4">
                    <div class="icon-box">
                        <i class="ri-bar-chart-box-line"></i>
                        <h3><a href="">Food</a></h3>
                    </div>
                </div>
                <div class="col-xl-2 col-md-4">
                    <div class="icon-box">
                        <i class="ri-calendar-todo-line"></i>
                        <h3><a href="">Drive</a></h3>
                    </div>
                </div>
                <div class="col-xl-2 col-md-4">
                    <div class="icon-box">
                        <i class="ri-paint-brush-line"></i>
                        <h3><a href="">Costumer service</a></h3>
                    </div>
                </div>

            </div>
    </section><!-- End Hero -->

 
   

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="row">
                    <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
                        <img src="assets/img/duaputra.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right"
                        data-aos-delay="100">
                        <h3>TOKO DUA PUTRA DESA KAMAL</h3>
                        <p class="fst-italic">
                            Menyediakan :
                        </p>
                        <ul>
                            <li><i class="ri-check-double-line"></i> matrial bangunan,alat eletronik,dan alat matrial
                                bangunan.seperti semen,kalsibot,kipas angin dan lain-lain.</li>
                            <li><i class="ri-check-double-line"></i> sembako,pakan ayam ,pakan kucin,pakan burung dan
                                galon isi ulang</li>
                            <li><i class="ri-check-double-line"></i>isi pulsa,paket kuota,bayar PLN ,top up game
                                ,accessoris handphone ,kartu perdana ,cetak poto,photo copy,cetak undangan , service
                                komputer,laptop,intstal software,cetak benner dan lain-lain</li>
                        </ul>
                        <p>
                            alamat jalan mushola alhuda rt 01 rw 04 dukuh kamal 3 desa kamal kec.larangan kab.brebes
                            52262
                        </p>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->
        {{-- <div class="container">
            {{-- @foreach ($tampil as $post)
                  <article>
            <h2><a href="/artikel/{{ $post->id }}">{{ $post->title }}</a></h2>
            <p>{{ $post->excerpt }}</p>
                 </article>
            @endforeach --}}
            {{-- @foreach ($duaputra as $p)   
            <h1>{{ $p->title }}</h1>
            <h3>{{ $p->slug }}</h3>
            <p>{{ $p->excerpt }}</p>
            @endforeach
        </div> --}}
        {{-- --}} 

        <!-- ======= Counts Section ======= -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials">
            <div class="container" data-aos="zoom-in">

                <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/deni.jpg" class="testimonial-img" alt="">
                                <h3>deni andrian</h3>
                                <h4>santri &amp; mahasiswa</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    masa depan yang indah akan selalu datang kepada orang yang slalu mencoba dalam
                                    kegagalan-kegagalan
                                    pasti akan menemukan keberhasilan selalu berpikir positif adalah kunci nya
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/deni.jpg" class="testimonial-img" alt="">
                                <h3>deni andrian</h3>
                                <h4>santri &amp; mahasiswa</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    jangan itikadkan usahamu sekarang akan menjadi sukses tapi itikadkan usaha mu
                                    sekarang sebagai pengalaman dan jadi kan pengalaman itu menjadi baik karna
                                    pengalaman yang baik akan menghantarkan mu pada kesuksesan mu
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/deni.jpg" class="testimonial-img" alt="">
                                <h3>deni andrian</h3>
                                <h4>santri &amp; mahasiswa</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    ketika kamu mencintai seseorang cintai dulu pencipta nya
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/deni.jpg" class="testimonial-img" alt="">
                                <h3>deni andrian</h3>
                                <h4>santri &amp; mahasiswa</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    masa depan yang indah akan selalu datang kepada orang yang slalu mencoba dalam
                                    kegagalan-kegagalan
                                    pasti akan menemukan keberhasilan selalu berpikir positif adalah kunci nya
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                    </div><!-- End testimonial item -->
                </div>
                <div class="swiper-pagination"></div>
            </div>

            </div>
        </section><!-- End Testimonials Section -->

        <!-- ======= Team Section ======= -->
        <section id="team" class="team">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <p class="text-center" style="color : rgba(202, 24, 24, 0.8);">DESAIND BY DENI ANDRIAN</p>
                </div>
                <a href="/deni">
                    <div class="row justify-content-center">
                        <div class="col-lg-7 col-md-6 d-flex align-items-stretch">
                            <div class="member" data-aos="fade-up" data-aos-delay="100">
                                <div class="member-img">
                                    <img src="assets/img/team/deni.jpg" class="img-fluid" alt="deni">
                                    <div class="social">
                                        <a href="https://github.com/dua-putra" target="_blank"><i
                                                class="bi bi-github"></i></a>
                                        <a href="https://www.facebook.com/deni.zain.904/" target="_blank"><i
                                                class="bi bi-facebook"></i></a>
                                        <a href="https://www.instagram.com/deni_zain10/" target="_blank"><i
                                                class="bi bi-instagram"></i></a>
                                        <a href="https://www.linkedin.com/in/deni-andrian-a1077a226/" target="_blank"><i
                                                class="bi bi-linkedin"></i></a>
                                        <a href="https://discord.gg/sqFYjAJe" target="_blank"><i
                                                class="bi bi-discord"></i></a>
                                    </div>
                                </div>
                                <div class="member-info text-center">
                                    <h4>Deni andrian</h4>
                                    <span>CEO Developer | Santri | Mahasiswa</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </section><!-- End Team Section -->

        <!-- ======= sponsor iklan ======= -->
        <section id="clients" class="clients">
            <div class="container" data-aos="zoom-in">

                <div class="clients-slider swiper-container">
                    <div class="swiper-wrapper align-items-center">
                        <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid"
                                alt=""></div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Clients Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">
                <div>
                    <iframe style="border:0; width: 100%; height: 270px;"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.3449781798968!2d108.89808161414655!3d-7.085947371428746!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f9fe2b3a827e3%3A0xd8b607ea0a17e70e!2sToko%20Deni%20Zain!5e0!3m2!1sen!2sid!4v1631090438350!5m2!1sen!2sid"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>

                <div class="row mt-5">
                    <div class=" mt-5 mt-lg-0">

                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <p>komentar</p>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="5"
                                    placeholder="kirim tanggapan anda tentang website saya" required></textarea>
                            </div>
                            <div class="text-center"><a href="login" class="btn btn-danger" type="submit">Kirim</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section><!-- End Contact Section -->
    </main><!-- End #main -->

    <div class="sharethis-inline-reaction-buttons"></div>
    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span></span></strong>2021.duaputra
            </div>
            <div class="credits">Designed by DENI ANDRIAN</div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="bit.ly/berkawanyuk" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-whatsapp"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/purecounter/purecounter.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>
