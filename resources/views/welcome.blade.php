@extends('layouts.guest.main')
@section('content')
    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

        <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

            <div class="carousel-item active">
                <img src="assets/ebizpage/img/hero-carousel/hero-carousel-1.jpg" alt="">
                <div class="carousel-container">
                    <h2>Integritas</h2>
                    <p class="text-center">Kami mematuhi standar etika tertinggi dalam semua kegiatan kami.</p>
                </div>
            </div><!-- End Carousel Item -->

            <div class="carousel-item">
                <img src="assets/ebizpage/img/hero-carousel/hero-carousel-2.jpg" alt="">
                <div class="carousel-container">
                    <h2>Keselamatan</h2>
                    <p class="text-center">Keselamatan karyawan dan masyarakat adalah prioritas utama kami.</p>
                </div>
            </div><!-- End Carousel Item -->

            <div class="carousel-item">
                <img src="assets/ebizpage/img/hero-carousel/hero-carousel-3.jpg" alt="">
                <div class="carousel-container">
                    <h2>Inovasi</h2>
                    <p class="text-center">Kami berinvestasi dalam teknologi dan proses inovatif untuk meningkatkan
                        efisiensi dan keberlanjutan.</p>
                </div>
            </div><!-- End Carousel Item -->

            <div class="carousel-item">
                <img src="assets/ebizpage/img/hero-carousel/hero-carousel-4.jpg" alt="">
                <div class="carousel-container">
                    <h2>Tanggung Jawab Sosial</h2>
                    <p class="text-center">Kami berkomitmen untuk memberikan dampak positif pada
                        masyarakat dan lingkungan tempat kami beroperasi.</p>
                </div>
            </div><!-- End Carousel Item -->

            <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

            <ol class="carousel-indicators"></ol>

        </div>

    </section><!-- /Hero Section -->

    <!-- Featured Services Section -->
    <section id="featured-services" class="featured-services section dark-background">

        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon flex-shrink-0"><i class="bi bi-briefcase"></i></div>
                    <div>
                        <h4 class="title">Emisi Karbon</h4>
                        <p class="description">Mengurangi emisi karbon dan jejak lingkungan dari operasi kami.</p>
                    </div>
                </div>
                <!-- End Service Item -->

                <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon flex-shrink-0"><i class="bi bi-card-checklist"></i></div>
                    <div>
                        <h4 class="title">Energi</h4>
                        <p class="description">Mengembangkan proyek energi terbarukan untuk masa depan yang lebih hijau.</p>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="300">
                    <div class="icon flex-shrink-0"><i class="bi bi-bar-chart"></i></div>
                    <div>
                        <h4 class="title">Investasi</h4>
                        <p class="description">Berinvestasi dalam komunitas lokal melalui program tanggung jawab sosial
                            perusahaan.</p>
                    </div>
                </div><!-- End Service Item -->

            </div>

        </div>

    </section><!-- /Featured Services Section -->

    <!-- About Section -->
    <section id="about" class="about section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>About Us</h2>
            <p>
                PT Pertama adalah perusahaan perminyakan terkemuka yang berfokus pada eksplorasi, produksi,
                dan distribusi minyak dan gas bumi. Kami berdedikasi untuk menyediakan energi yang
                berkelanjutan dan andal bagi masyarakat global dengan mematuhi standar keselamatan dan
                lingkungan tertinggi.
            </p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
                    <p class="who-we-are">Who We Are</p>
                    <h3>Kami percaya bahwa keberlanjutan adalah kunci untuk masa depan yang lebih baik</h3>
                    <p class="fst-italic">
                        Sejak didirikan pada tahun 2013, PT. Pertama Untuk Rakyat telah berkembang menjadi salah
                        satu pemain utama di industri perminyakan. Dengan pengalaman bertahun-tahun, kami telah
                        berhasil mengelola berbagai proyek besar di seluruh dunia, dari hulu hingga hilir.
                    </p>
                    <h5>Visi</h5>
                    <ul>
                        <li><i class="bi bi-check-circle"></i> <span></span>
                            Menjadi pemimpin dalam industri perminyakan global dengan berfokus pada inovasi,
                            keberlanjutan, dan tanggung jawab sosial.
                        </li>
                    </ul>
                    <h5>Misi</h5>
                    <ul>
                        <li><i class="bi bi-check-circle"></i> <span></span>
                            Menghasilkan dan menyediakan energi yang bersih dan aman, sambil
                            memaksimalkan nilai bagi pemegang saham dan berkontribusi positif bagi masyarakat dan
                            lingkungan.
                        </li>
                    </ul>
                </div>

                <div class="col-lg-6 about-images" data-aos="fade-up" data-aos-delay="200">
                    <div class="row gy-4">
                        <div class="col-lg-6">
                            <img src="assets/ebizpage/img/about-company-1.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-6">
                            <div class="row gy-4">
                                <div class="col-lg-12">
                                    <img src="assets/ebizpage/img/about-company-2.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="col-lg-12">
                                    <img src="assets/ebizpage/img/about-company-3.jpg" class="img-fluid" alt="">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </section><!-- /About Section -->

    <!-- Services Section -->
    <section id="organisasi" class="services section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Struktur Organisasi</h2>
            <p>Berikut ini adalah struktur organisasi dari perusaahan Pertama Untuk Rakyat.</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-4">

                <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item d-flex position-relative h-100">
                        <i class="bi bi-briefcase icon flex-shrink-0"></i>
                        <div>
                            <h4 class="title"><a href="#" class="stretched-link">Divisi
                                    Eksplorasi</a></h4>
                            <p class="description"> Bertanggung jawab untuk menemukan cadangan minyak dan gas baru</p>
                        </div>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-item d-flex position-relative h-100">
                        <i class="bi bi-card-checklist icon flex-shrink-0"></i>
                        <div>
                            <h4 class="title"><a href="#" class="stretched-link">Divisi Produksi</a>
                            </h4>
                            <p class="description">Mengelola operasi produksi minyak dan gas</p>
                        </div>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-item d-flex position-relative h-100">
                        <i class="bi bi-bar-chart icon flex-shrink-0"></i>
                        <div>
                            <h4 class="title"><a href="#" class="stretched-link">Divisi Pemurnian &
                                    Distribusi</a></h4>
                            <p class="description">Mengurus pemurnian minyak mentah dan distribusi produk minyak dan gas
                            </p>
                        </div>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-item d-flex position-relative h-100">
                        <i class="bi bi-binoculars icon flex-shrink-0"></i>
                        <div>
                            <h4 class="title"><a href="#" class="stretched-link">Divisi Keuangan &
                                    Administrasi</a>
                            </h4>
                            <p class="description">Mengelola keuangan, sumber daya manusia, dan administrasi perusahaan</p>
                        </div>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="service-item d-flex position-relative h-100">
                        <i class="bi bi-brightness-high icon flex-shrink-0"></i>
                        <div>
                            <h4 class="title"><a href="#" class="stretched-link">Divisi Keuangan &
                                    Lingkungan</a></h4>
                            <p class="description"> Menjaga kepatuhan terhadap standar keselamatan dan lingkungan</p>
                        </div>
                    </div>
                </div><!-- End Service Item -->

            </div>

        </div>

    </section><!-- /Services Section -->

    <!-- Stats Section -->
    <section id="stats" class="stats section light-background">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">

                <div class="col-lg-4 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="{{ $client }}"
                            data-purecounter-duration="1" class="purecounter"></span>
                        <p>Klien</p>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-4 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="{{ $projectCount }}"
                            data-purecounter-duration="1" class="purecounter"></span>
                        <p>Project</p>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-4 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="{{ $productCount }}"
                            data-purecounter-duration="1" class="purecounter"></span>
                        <p>Produk</p>
                    </div>
                </div><!-- End Stats Item -->

            </div>

        </div>

    </section><!-- /Stats Section -->

    <!-- Services Section -->
    <section id="services" class="services section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Produk/Layanan</h2>
            <p>Semua</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-4">

                @foreach ($product as $item)
                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="service-item d-flex position-relative h-100">
                            <i class="bi bi-binoculars icon flex-shrink-0"></i>
                            <div>
                                <h4 class="title"><a href="service-details.html" class="stretched-link">{{ $item->name }}</a></h4>
                                <p class="description">{{ $item->description }}</p>
                            </div>
                        </div>
                    </div><!-- End Service Item -->
                @endforeach

            </div>

        </div>

    </section><!-- /Services Section -->

    <!-- Contact Section -->
    <section id="loker" class="contact section light-background">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Lowongan Pekerjaan</h2>
            <p>Kami menerima rekrutmen baru untuk dapat bekerja dalam posisi berikut ini:</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4" data-aos="fade-up" data-aos-delay="200">

                <div class="col-lg-4 text-center">
                    <div class="info-item d-flex flex-column justify-content-center align-items-center">
                        <i class="bi bi-geo-alt"></i>
                        <h3>Costumer Service</h3>
                        <p>Menangani pertanyaan, keluhan, dan permintaan pelanggan, serta memastikan kepuasan pelanggan
                            dengan produk atau layanan</p>
                    </div>
                </div><!-- End Info Item -->

                <div class="col-lg-4 text-center">
                    <div class="info-item d-flex flex-column justify-content-center align-items-center info-item-borders">
                        <i class="bi bi-telephone"></i>
                        <h3>Marketing</h3>
                        <p>Mengembangkan strategi untuk mempromosikan produk atau layanan, meningkatkan brand awareness, dan
                            menarik pelanggan</p>
                    </div>
                </div><!-- End Info Item -->

                <div class="col-lg-4 text-center">
                    <div class="info-item d-flex flex-column justify-content-center align-items-center">
                        <i class="bi bi-envelope"></i>
                        <h3>Graphic Designer</h3>
                        <p>Membuat desain visual untuk berbagai media, termasuk iklan, kemasan, dan materi promosi, sesuai
                            dengan identitas brand</p>
                    </div>
                </div><!-- End Info Item -->

            </div>

        </div>

    </section><!-- /Contact Section -->

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Portfolio</h2>
            <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

                <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                    <li data-filter="*" class="filter-active">Semua</li>
                </ul><!-- End Portfolio Filters -->

                <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

                    @foreach ($project as $item)
                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                            <img src="assets/images/project/{{ $item->image_url }}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>{{ $item->title }}</h4>
                                <p>{{ $item->cateogry }}</p>
                                <a href="assets/images/project/{{ $item->image_url }}" title="{{ $item->description }}"
                                    data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i
                                        class="bi bi-zoom-in"></i></a>
                            </div>
                        </div><!-- End Portfolio Item -->
                    @endforeach

                </div><!-- End Portfolio Container -->

            </div>

        </div>

    </section><!-- /Portfolio Section -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Testimoni Klien</h2>
            <p>Beirkut ini adalah testimoni dari klien yang pernah bekerja sama dengan kami!</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="swiper init-swiper">
                <script type="application/json" class="swiper-config">
            {
            "loop": true,
            "speed": 600,
            "autoplay": {
                "delay": 5000
            },
            "slidesPerView": "auto",
            "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
            }
            }
        </script>
                <div class="swiper-wrapper">

                    @foreach ($testimoni as $item)
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/images/testimonials/{{ $item->image_url }}"
                                    style="width: 90px; height: 90px" class="testimonial-img" alt="">
                                <h3>{{ $item->client_name }}</h3>
                                <h4>{{ $item->company }}</h4>
                                @php
                                    $rating = $item->rating;
                                @endphp

                                <div class="stars">
                                    @for ($i = 0; $i < $rating; $i++)
                                        <i class="bi bi-star-fill"></i>
                                    @endfor
                                </div>
                            </div>
                        </div><!-- End testimonial item -->
                    @endforeach

                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>

    </section><!-- /Testimonials Section -->

    <!-- Team Section -->
    <section id="team" class="team section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Team</h2>
            <p class="text-secondary">Berikut ini adalah tim profesional yang ada dalam perusahaan kami!</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="member">
                        <img src="assets/ebizpage/img/team/team-1.jpg" class="img-fluid" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4>Walter White</h4>
                                <span>Chief Executive Officer</span>
                            </div>
                        </div>
                    </div>
                </div><!-- End Team Member -->

                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="member">
                        <img src="assets/ebizpage/img/team/team-2.jpg" class="img-fluid" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4>Sarah Jhonson</h4>
                                <span>Product Manager</span>
                            </div>
                        </div>
                    </div>
                </div><!-- End Team Member -->

                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="member">
                        <img src="assets/ebizpage/img/team/team-3.jpg" class="img-fluid" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4>William Anderson</h4>
                                <span>CTO</span>
                            </div>
                        </div>
                    </div>
                </div><!-- End Team Member -->

                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="member">
                        <img src="assets/ebizpage/img/team/team-4.jpg" class="img-fluid" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4>Amanda Jepson</h4>
                                <span>Accountant</span>
                            </div>
                        </div>
                    </div>
                </div><!-- End Team Member -->

            </div>

        </div>

    </section><!-- /Team Section -->

    <!-- Faq Section -->
    <section id="faq" class="faq section light-background">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Frequently Asked Questions</h2>
            <p>Berikut ini adalah pertanyaan yang sering ditanyakan kepada kami</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row">

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

                    <div class="faq-container">

                        <div class="faq-item">
                            <h3>Apa Fokus Utama Perusahaan Ini?</h3>
                            <div class="faq-content">
                                <p>PT Pertama berfokus pada eksplorasi, produksi, dan distribusi minyak dan gas bumi dengan
                                    komitmen terhadap keberlanjutan dan standar keselamatan serta lingkungan tertinggi.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item">
                            <h3>Kapan PT> Pertama Didirikan?</h3>
                            <div class="faq-content">
                                <p>PT Pertama didirikan pada tahun 2013, dan sejak itu telah berkembang menjadi salah satu
                                    pemain utama di industri perminyakan.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item">
                            <h3>Dimana PT. Pertama Beroperasi?</h3>
                            <div class="faq-content">
                                <p>PT Pertama mengelola berbagai proyek besar di seluruh dunia, mencakup sektor hulu hingga
                                    hilir dalam industri minyak dan gas bumi.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                    </div>

                </div><!-- End Faq Column-->

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">

                    <div class="faq-container">

                        <div class="faq-item">
                            <h3>Apa Kontribusi Perusahaan?</h3>
                            <div class="faq-content">
                                <p>PT Pertama berkomitmen untuk berkontribusi positif kepada masyarakat melalui berbagai
                                    inisiatif sosial, termasuk program tanggung jawab sosial perusahaan (CSR) yang berfokus
                                    pada pendidikan, kesehatan, dan pelestarian lingkungan..</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item">
                            <h3>Bagaimana Perusahaan Menghapapi Tantangan?</h3>
                            <div class="faq-content">
                                <p>PT Pertama aktif dalam mengembangkan teknologi dan praktik yang mendukung produksi energi
                                    bersih, serta berinvestasi dalam energi terbarukan untuk mengurangi dampak terhadap
                                    perubahan iklim.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item">
                            <h3>Apakah Perusahaan Memiliki Kolaborasi?</h3>
                            <div class="faq-content">
                                <p>Ya, PT Pertama terbuka untuk kemitraan dan kolaborasi yang sejalan dengan visi dan misi
                                    perusahaan, terutama yang mendukung inovasi dan keberlanjutan dalam industri energi.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                    </div>

                </div><!-- End Faq Column-->

            </div>

        </div>

    </section><!-- /Faq Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Contact</h2>
            <p>Jika anda memiliki pertanyaan lebih lanjut, silahkan hubungi kami!</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4" data-aos="fade-up" data-aos-delay="200">

                <div class="col-lg-4">
                    <div class="info-item d-flex flex-column justify-content-center align-items-center">
                        <i class="bi bi-geo-alt"></i>
                        <h3>Alamat</h3>
                        <p>Jln. Pertama Untuk Rakyat</p>
                    </div>
                </div><!-- End Info Item -->

                <div class="col-lg-4">
                    <div class="info-item d-flex flex-column justify-content-center align-items-center info-item-borders">
                        <i class="bi bi-telephone"></i>
                        <h3>Telfon Kami</h3>
                        <p>+1 5589 55488 55</p>
                    </div>
                </div><!-- End Info Item -->

                <div class="col-lg-4">
                    <div class="info-item d-flex flex-column justify-content-center align-items-center">
                        <i class="bi bi-envelope"></i>
                        <h3>Email Kami</h3>
                        <p>pertamauntukrakyat@example.com</p>
                    </div>
                </div><!-- End Info Item -->

            </div>

        </div>

    </section><!-- /Contact Section -->
@endsection
