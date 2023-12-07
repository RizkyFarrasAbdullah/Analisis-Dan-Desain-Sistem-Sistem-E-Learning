<!--================Home Banner Area =================-->
<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background="">
        </div>
        <div class="container">
            <div class="banner_content text-center">
                <h2 data-aos="fade-up" data-aos-duration="1600">Tentang Learnify</h2>
                <div data-aos="fade-up" data-aos-duration="1800" class="page_link">
                    <a href="<?= base_url('welcome') ?>">Beranda</a>
                    <a href="">Tentang</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Home Banner Area =================-->

<!--================About Area =================-->
<section class="about_area p_60">
    <div class="container">
        <div class="main_title">
            <h2 data-aos="fade-up" data-aos-duration="1600" style="font-size: 33px !important;">Tentang Learnify - Web Edukasi Open Source</h2>
            <p data-aos="fade-up" data-aos-duration="1800">Learnify adalah Web Edukasi Open-Source yang dibuat oleh <a href="">Rizky Farras Abdullah.</a> Website
                pembelajaran dimana para siswa dapat belajar dimana saja dan kapan saja.
                Guru dapat mengupload video dirinya sendiri sedang mengajar, sehingga tanpa takut adanya jam
                kosong atau pun keadaan yang tidak terduga apapun karena Learnify dapat diakses dimana saja dan
                kapan saja.
            </p>
        </div>
        <div class="row about_inner">
            <div class="col-lg-6">
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Visi
                                <i class="lnr lnr-chevron-down"></i>
                                <i class="lnr lnr-chevron-up"></i>
                            </button>
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                            “Berprestasi dilandasi Iman, Taqwa dan Berbudaya Lingkungan serta Berwawasan Global”.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Misi
                                <i class="lnr lnr-chevron-down"></i>
                                <i class="lnr lnr-chevron-up"></i>
                            </button>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                            Mewujudkan sumber daya manusia yang beriman, produktif, kreatif, inofatif dan efektif.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Tujuan
                                <i class="lnr lnr-chevron-down"></i>
                                <i class="lnr lnr-chevron-up"></i>
                            </button>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                            Tercapainya sumber daya manusia yang beriman, produktif, kreatif, inofatif dan efektif.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingfour">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                Manfaat
                                <i class="lnr lnr-chevron-down"></i>
                                <i class="lnr lnr-chevron-up"></i>
                            </button>
                        </div>
                        <div id="collapsefour" class="collapse" aria-labelledby="headingfour" data-parent="#accordionExample">
                            <div class="card-body">
                                Dapat memberikan siswa suatu ilmu yang dapat berguna di kemudian hari.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="video_area" id="video">
                    <img class="img-fluid" src="<?= base_url('assets/') ?>img/gandok.jpeg" alt="" />
                    <a class="popup-youtube" href="https://www.youtube.com/watch?v=LbJ9wtvLjLg">
                        <img src="<?= base_url('assets/') ?>img/icon/video-icon-1.png" alt="" />
                    </a>
                </div>
            </div>
        </div>
        <div class="about_details" data-aos="fade-up" data-aos-duration="1600">
            <p>
            SMA Negeri 1 Rengasdengklok, merupakan salah satu Sekolah Menengah Atas Negeri yang ada di kabupaten Karawang Provinsi Jawa Barat, Indonesia. Sama dengan SMA pada umumnya di Indonesia masa pendidikan sekolah di SMAN 1 Rengasdengklok ditempuh dalam waktu tiga tahun pelajaran, mulai dari Kelas X sampai Kelas XII. Didirikan pada tahun 1982.
            </p>
        </div>
    </div>
</section>
<!--================End About Area =================-->

<!--================Team Area =================-->
<section class="team_area p_20">
    <div class="container">
        <div class="main_title">
            <h2 data-aos="fade-up" data-aos-duration="1800">Testimonial Para Siswa Learnify</h2>
            <p data-aos="fade-up" data-aos-duration="2000"Berikut testimoni dari para siswa dan siswi sman 1 rengasdengklok tentang web learnify.</p>
        </div>
        <section class="testimonials_area p_20">
            <div class="container">
                <div class="testi_slider owl-carousel">
                    <div class="item">
                        <div class="testi_item">
                            <img src="<?= base_url('assets/') ?>img/testimonials/testi-2.png" alt="">
                            <h4>Rizky</h4>
                            <ul class="list">
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                            </ul>
                            <p>websitenya bagus, guru yang mengajar dapat menyampaikan materi dengan baik, terima kasih learnify.</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testi_item">
                            <img src="<?= base_url('assets/') ?>img/testimonials/testi-2.png" alt="">
                            <h4>Taupik Hidayat</h4>
                            <ul class="list">
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                            </ul>
                            <p>Merciful revaluation burying love ultimate value inexpedient ubermensch. Holiest madness victorious morality hope endless christian madness. Love dead fearful transvaluation marvelous. Oneself right ideal abstract endless faith deceptions zarathustra grandeur law ubermensch free. Abstract chaos snare play truth ultimate good self. God overcome sexuality pious abstract good decieve revaluation aversion good. Virtues chaos overcome society holiest truth.</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testi_item">
                            <img src="<?= base_url('assets/') ?>img/testimonials/testi-1.png" alt="">
                            <h4>Diki Ramdani</h4>
                            <ul class="list">
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                            </ul>
                            <p>Merciful revaluation burying love ultimate value inexpedient ubermensch. Holiest madness victorious morality hope endless christian madness. Love dead fearful transvaluation marvelous. Oneself right ideal abstract endless faith deceptions zarathustra grandeur law ubermensch free. Abstract chaos snare play truth ultimate good self. God overcome sexuality pious abstract good decieve revaluation aversion good. Virtues chaos overcome society holiest truth.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>
<!--================End Team Area =================-->

<!--================Impress Area =================-->
<section class="impress_area p_120">
    <div class="container">
        <div class="impress_inner text-center">
            <h2 data-aos="fade-up" data-aos-duration="1800">LOGIN SEBAGAI GURU DAN UPLOAD MATERI & VIDEO SEKARANG</h2>
            <p data-aos="fade-up" data-aos-duration="2000">Untuk guru-guru di SMAN 1 Rengasdengklok mohon untuk melakukan pendaftaran dan login sehingga dapat memberikan ilmu kepada siswa dan siswi.
            </p>
            <a data-aos="fade-up" data-aos-duration="2200" class="main_btn" href="<?= base_url('welcome/guru') ?>">Login Sebagai Guru <span class="lnr lnr-arrow-right text-black"></span></a>
        </div>
    </div>
</section>
<!--================End Impress Area =================-->