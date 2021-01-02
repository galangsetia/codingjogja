<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta Tags -->
    <meta name="description" content="Landing page template built with HTML and Bootstrap 4 for presenting training courses, classes, workshops and for convincing visitors to register using the form.">
    <meta name="author" content="Inovatik">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
    <meta property="og:site_name" content="" />
    <!-- website name -->
    <meta property="og:site" content="" />
    <!-- website link -->
    <meta property="og:title" content="" />
    <!-- title shown in the actual shared post -->
    <meta property="og:description" content="" />
    <!-- description shown in the actual shared post -->
    <meta property="og:image" content="" />
    <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="" />
    <!-- where do you want your post to link to -->
    <meta property="og:type" content="article" />

    <!-- Website Title -->
    <title>Corso - Training Course Landing Page Template</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,600,700,700i&display=swap" rel="stylesheet">
    <link href="<?= base_url("assets/home/") ?>css/bootstrap.css" rel="stylesheet">
    <link href="<?= base_url("assets/home/") ?>css/fontawesome-all.css" rel="stylesheet">
    <link href="<?= base_url("assets/home/") ?>css/swiper.css" rel="stylesheet">
    <link href="<?= base_url("assets/home/") ?>css/magnific-popup.css" rel="stylesheet">
    <link href="<?= base_url("assets/home/") ?>css/styles.css" rel="stylesheet">

    <!-- Favicon  -->
    <link rel="icon" href="<?= base_url("assets/home/") ?>images/favicon.png">
</head>

<body data-spy="scroll" data-target=".fixed-top"><a href="body" class="back-to-top page-scroll" style="display: inline;">Back to Top</a>

    <!-- Preloader -->
    <div class="spinner-wrapper" style="display: none;">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->


    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top top-nav-collapse">

        <!-- Text Logo - Use this if you don't have a graphic logo -->
        <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Corso</a> -->

        <!-- Image Logo -->
        <a class="navbar-brand logo-image" href="index.html"><img src="<?= base_url("assets/home/") ?>images/logo.svg" alt="alternative"></a>

        <!-- Mobile Menu Toggle Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-awesome fas fa-bars"></span>
            <span class="navbar-toggler-awesome fas fa-times"></span>
        </button>
        <!-- end of mobile menu toggle button -->

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">
            
                <li class="nav-item">
                    <a class="nav-link page-scroll active" href="<?php echo base_url(). 'Daftar'; ?>">Daftar</a>
                </li>



            </ul>
            <span class="nav-item social-icons">
                <span class="fa-stack">
                    <a href="#your-link">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-facebook-f fa-stack-1x"></i>
                    </a>
                </span>
            <span class="fa-stack">
                    <a href="#your-link">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-twitter fa-stack-1x"></i>
                    </a>
                </span>
            </span>
        </div>
    </nav>
    <!-- end of navbar -->
    <!-- end of navigation -->


    <!-- Header -->
    <header id="header" class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-container" style="margin-bottom: 200px;">

                        <h1>Coding Joga Course</h1>
                        <p class="p-large">Bimbel Coding Terpercaya di Jogja, tingkatkan skill IT anda bersama kami</p>
               
                    </div>
                    <!-- end of text-container -->
                </div>
                <!-- end of col -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container -->

        <!-- Image Slider -->
        <div class="outer-container">
            <div class="slider-container">
                <div class="swiper-container image-slider-1 swiper-container-horizontal">
                    <div class="swiper-wrapper" style="transform: translate3d(-1772px, 0px, 0px); transition-duration: 0ms;">
                        <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next" data-swiper-slide-index="2" style="width: 886px;">
                            <img class="img-fluid" src="<?= base_url("assets/home/") ?>images/details-slide-3.jpg" alt="alternative">
                        </div>

                        <!-- Slide -->
                        <div class="swiper-slide swiper-slide-prev" data-swiper-slide-index="0" style="width: 886px;">
                            <img class="img-fluid" src="<?= base_url("assets/home/") ?>images/cod1.jpg" alt="alternative">
                        </div>
                        <!-- end of slide -->

                        <!-- Slide -->
                        <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="1" style="width: 886px;">
                            <img class="img-fluid" src="<?= base_url("assets/home/") ?>images/cod2.jpg" alt="alternative">
                        </div>
                        <!-- end of slide -->

                        <!-- Slide -->
                        <div class="swiper-slide swiper-slide-next" data-swiper-slide-index="2" style="width: 886px;">
                            <img class="img-fluid" src="<?= base_url("assets/home/") ?>images/cod3.jpg" alt="alternative">
                        </div>
                        <!-- Slide -->
                        <div class="swiper-slide swiper-slide-next" data-swiper-slide-index="2" style="width: 886px;">
                            <img class="img-fluid" src="<?= base_url("assets/home/") ?>images/cod4.jpg" alt="alternative">
                        </div>
                        <!-- Slide -->
                        <div class="swiper-slide swiper-slide-next" data-swiper-slide-index="2" style="width: 886px;">
                            <img class="img-fluid" src="<?= base_url("assets/home/") ?>images/cod5.jpeg" alt="alternative">
                        </div>
                        <!-- end of slide -->

                        <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" data-swiper-slide-index="0" style="width: 886px;">
                            <img class="img-fluid" src="<?= base_url("assets/home/") ?>images/details-slide-1.jpg" alt="alternative">
                        </div>
                    </div>
                    <!-- end of swiper-wrapper -->

                    <!-- Add Arrows -->
                    <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide"></div>
                    <div class="swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide"></div>
                    <!-- end of add arrows -->

                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                <!-- end of swiper-container -->
            </div>
            <!-- end of slider-container -->
        </div>
        <!-- end of outer-container -->
        <!-- end of image slider -->

    </header>
    <!-- end of header -->
    <!-- end of header -->


    <!-- Registration -->

    <!-- end of form-1 -->
    <!-- end of registration -->


    <!-- Partners -->
    <div class="slider-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">


                    <!-- Image Slider -->
                    <div class="slider-container">
                        <div class="swiper-container image-slider-2 swiper-container-horizontal">
                            <div class="swiper-wrapper" style="transform: translate3d(-1804px, 0px, 0px); transition-duration: 0ms;">
                                <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="2" style="width: 205.5px; margin-right: 20px;">
                                    <img class="img-fluid" src="<?= base_url("assets/home/") ?>images/customer-logo-3.png" alt="alternative">
                                </div>
                                <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" data-swiper-slide-index="3" style="width: 205.5px; margin-right: 20px;">
                                    <img class="img-fluid" src="<?= base_url("assets/home/") ?>images/customer-logo-4.png" alt="alternative">
                                </div>
                                <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="4" style="width: 205.5px; margin-right: 20px;">
                                    <img class="img-fluid" src="<?= base_url("assets/home/") ?>images/customer-logo-5.png" alt="alternative">
                                </div>
                                <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next" data-swiper-slide-index="5" style="width: 205.5px; margin-right: 20px;">
                                    <img class="img-fluid" src="<?= base_url("assets/home/") ?>images/customer-logo-6.png" alt="alternative">
                                </div>
                                <div class="swiper-slide" data-swiper-slide-index="0" style="width: 205.5px; margin-right: 20px;">
                                    <img class="img-fluid" src="<?= base_url("assets/home/") ?>images/customer-logo-1.png" alt="alternative">
                                </div>
                                <div class="swiper-slide" data-swiper-slide-index="1" style="width: 205.5px; margin-right: 20px;">
                                    <img class="img-fluid" src="<?= base_url("assets/home/") ?>images/customer-logo-2.png" alt="alternative">
                                </div>
                                <div class="swiper-slide" data-swiper-slide-index="2" style="width: 205.5px; margin-right: 20px;">
                                    <img class="img-fluid" src="<?= base_url("assets/home/") ?>images/customer-logo-3.png" alt="alternative">
                                </div>
                                <div class="swiper-slide swiper-slide-prev" data-swiper-slide-index="3" style="width: 205.5px; margin-right: 20px;">
                                    <img class="img-fluid" src="<?= base_url("assets/home/") ?>images/customer-logo-4.png" alt="alternative">
                                </div>
                                <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="4" style="width: 205.5px; margin-right: 20px;">
                                    <img class="img-fluid" src="<?= base_url("assets/home/") ?>images/customer-logo-5.png" alt="alternative">
                                </div>
                                <div class="swiper-slide swiper-slide-next" data-swiper-slide-index="5" style="width: 205.5px; margin-right: 20px;">
                                    <img class="img-fluid" src="<?= base_url("assets/home/") ?>images/customer-logo-6.png" alt="alternative">
                                </div>
                                <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="0" style="width: 205.5px; margin-right: 20px;">
                                    <img class="img-fluid" src="<?= base_url("assets/home/") ?>images/customer-logo-1.png" alt="alternative">
                                </div>
                                <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="1" style="width: 205.5px; margin-right: 20px;">
                                    <img class="img-fluid" src="<?= base_url("assets/home/") ?>images/customer-logo-2.png" alt="alternative">
                                </div>
                                <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="2" style="width: 205.5px; margin-right: 20px;">
                                    <img class="img-fluid" src="<?= base_url("assets/home/") ?>images/customer-logo-3.png" alt="alternative">
                                </div>
                                <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" data-swiper-slide-index="3" style="width: 205.5px; margin-right: 20px;">
                                    <img class="img-fluid" src="<?= base_url("assets/home/") ?>images/customer-logo-4.png" alt="alternative">
                                </div>
                            </div>
                            <!-- end of swiper-wrapper -->
                            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                        <!-- end of swiper container -->
                    </div>
                    <!-- end of slider-container -->
                    <!-- end of image slider -->

                </div>
                <!-- end of col -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container -->
    </div>
    <!-- end of slider-1 -->
    <!-- end of partners -->


    <!-- Instructor -->

    <!-- end of basic-1 -->
    <!-- end of instructor -->


    <!-- Description -->
    <div id="description" class="basic-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Belajar Teknologi Bersama Kami</h2>
                </div>
                <!-- end of col -->
            </div>
            <!-- end of row -->
            <div class="row">
                <div class="col-lg-6">
                    <ul class="list-unstyled li-space-lg first">
                        <li class="media">
                            <i class="bullet">1</i>
                            <div class="media-body">
                                <h4>Materi Pembelajaran terbaru</h4>
                                <p>setiap kelas yang kami berikan selalu mengikuti trend saat ini dan menyesuaikan dengan kebutuhan dunia kerja</p>
                            </div>
                        </li>
                        <li class="media">
                            <i class="bullet">2</i>
                            <div class="media-body">
                                <h4>Merchandise Coding Jogja</h4>
                                <p>Bonus 1 Buku Note Book coding jogja , Stiker , ID CARD peserta , Tootbage coding Jogja , 1 Pen coding jogja </p>
                            </div>
                        </li>
                        <li class="media">
                            <i class="bullet">3</i>
                            <div class="media-body">
                                <h4>Pengajar terpilih dan terbaik</h4>
                                <p>Para pengajar coding jogja sudah terjamin kulitas skill dan pendidikannya serta pengalaman di dunia kerja</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- end of col -->
                <div class="col-lg-6">
                    <ul class="list-unstyled li-space-lg second">
                        <li class="media">
                            <i class="bullet">4</i>
                            <div class="media-body">
                                <h4>Fasilitas Kelas Moderen</h4>
                                <p>Ruang kelas Ber - AC , LCD , Projector , Komputer , Dispenser , Coffe Machine</p>
                            </div>
                        </li>
                        <li class="media">
                            <i class="bullet">5</i>
                            <div class="media-body">
                                <h4>Bimbingan Konsultasi Gratis</h4>
                                <p>Selama bersetatus aktif dapat konsultasi dengan Pengajar gratis di luar jam pembelajaran</p>
                            </div>
                        </li>
                        <li class="media">
                            <i class="bullet">6</i>
                            <div class="media-body">
                                <h4>Sertifikat Resmi</h4>
                                <p>Bukti kelulusan kelas dan mempermudah dalam mencari pekerjaan </p>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- end of col -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container -->
    </div>
    <!-- end of basic-2 -->
    <!-- end of description -->


    <!-- Students -->
    <div class="basic-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <h2>Pengajar Dari perushaan ternama</h2>
                        <p>Belajar IT demi masa depan yang lebih baik dan tetap bersaing di dunia kerja</p>
                        <a class="btn-solid-reg popup-with-move-anim" href="#details-lightbox">CEK Pengajar</a>
                    </div>
                    <!-- end of text-container -->
                </div>
                <!-- end of col -->
                <div class="col-lg-6">
                    <img class="img-fluid" src="<?= base_url("assets/home/") ?>images/students.jpg" alt="alternative">
                </div>
                <!-- end of col -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container -->
    </div>
    <!-- end of basic-3 -->
    <!-- end of students -->


    <!-- Details Lightbox -->
    <div id="details-lightbox" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="container">
            <div class="row">
                <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
                <div class="col-lg-8">
                    <div class="image-container">
                        <img class="img-fluid" src="<?= base_url("assets/home/") ?>images/details-lightbox.jpg" alt="alternative">
                    </div>
                    <!-- end of image-container -->
                </div>
                <!-- end of col -->
                <div class="col-lg-4">
                    <h3>Pengajar Terbaik kami</h3>
                    <hr>
                    <h5>2020</h5>
                   
                    <ul class="list-unstyled li-space-lg">
                        <li class="media">
                            <i class="fas fa-square"></i>
                            <div class="media-body">Mr.A - Dicoding</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-square"></i>
                            <div class="media-body">Mr.B - Web Programming Unpas</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-square"></i>
                            <div class="media-body">Mr.C - Codepolitan</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-square"></i>
                            <div class="media-body">Mr.D - Niagahoster</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-square"></i>
                            <div class="media-body">Mr.E - Petanikode</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-square"></i>
                            <div class="media-body">Mr.F - Malasngoding</div>
                        </li>
                    </ul>
                 <a class="btn-outline-reg mfp-close as-button" href="#screenshots">BACK</a>
                </div>
                <!-- end of col -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container -->
    </div>
    <!-- end of lightbox-basic -->
    <!-- end of details lightbox -->



    <!-- Takeaways -->
    <div class="cards">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Pilihan Kelas</h2>
                    <p class="p-heading">Kelas dengan materi terupdate dan relevan dengan dunia kerja saat ini</p>
                </div>
                <!-- end of col -->
            </div>
            <!-- end of row -->
            <div class="row" style="margin-top: -100px;">
                <div class="col-lg-12">

                <center>
					<h1>

				
						<?php
							echo  " 
 									<option value='' disabled selected></option>";
							foreach ($kelas->result() as $row_kelas) {
								echo  "<option value='" . $row_kelas->id_kelas . "'>" . $row_kelas->nama_kelas . "</option>";
							}
							echo "  
							";
						
							?>
								</h1>
				</center>
			


                </div>
                <!-- end of col -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container -->
    </div>
    <!-- end of cards -->
    <!-- end of takeaways -->


 


    <!-- Date -->
    <div id="date" class="basic-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-container">
                        <h2>PROMO ! Daftar Kelas Periode Juni - Juli</h2>
                        <p>Free Tshirt dan Tumbler Coding Jogja</p>
                        <a class="btn-solid-lg page-scroll" href="<?php echo base_url(). 'Daftar'; ?>">Daftar Sekarang</a>
                    </div>
                    <!-- end of text-container -->
                </div>
                <!-- end of col -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container -->
    </div>
    <!-- end of basic-5 -->
    <!-- end of date -->


    <!-- Newsletter -->
    <div class="form-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3>Stay updated with Us</h3>

                   
                    <!-- end of newsletter form -->

                    <!-- Social Links -->
                    <div class="icon-container">
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-facebook-f fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-twitter fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-pinterest-p fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-instagram fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-linkedin-in fa-stack-1x"></i>
                            </a>
                        </span>
                    </div>
                    <!-- end of icon-container -->
                    <!-- end of social icons -->

                </div>
                <!-- end of col -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container -->
    </div>
    <!-- end of form-2 -->
    <!-- end of newsletter -->


  


    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="footer-col first">
                        <h5>About CODING JOGJA</h5>
                        <p class="p-small">We're passionate about teaching people how to do better in technology</p>
                    </div>
                </div>
                <!-- end of col -->
                <div class="col-md-3">
                    <div class="footer-col second">
                        <h5>Links</h5>
                        <ul class="list-unstyled li-space-lg p-small">
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body"><a href="terms-conditions.html">Terms &amp; Conditions</a></div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body"><a href="privacy-policy.html">Privacy Policy</a></div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body"><a href="article-details.html">Article Details</a></div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- end of col -->
                <div class="col-md-3">
                    <div class="footer-col third">
                        <h5>Links</h5>
                        <ul class="list-unstyled li-space-lg p-small">
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body"><a href="article-details.html">Article Details</a></div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body"><a href="terms-conditions.html">Terms &amp; Conditions</a></div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body"><a href="privacy-policy.html">Privacy Policy</a></div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- end of col -->
                <div class="col-md-3">
                    <div class="footer-col fourth">
                        <h5>Social Media</h5>
                        <p class="p-small">For news &amp; updates follow us</p>
                        <a href="#your-link">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#your-link">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#your-link">
                            <i class="fab fa-pinterest-p"></i>
                        </a>
                        <a href="#your-link">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#your-link">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#your-link">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
                <!-- end of col -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container -->
    </div>
    <!-- end of footer -->
    <!-- end of footer -->


    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">Copyright © 2020 <a href="#">CODING JOGJA</a> - All rights reserved</p>
                </div>
                <!-- end of col -->
            </div>
            <!-- enf of row -->
        </div>
        <!-- end of container -->
    </div>
    <!-- end of copyright -->
    <!-- end of copyright -->


    <!-- Scripts -->
    <script src="<?= base_url("assets/home/") ?>js/jquery.min.js"></script>
    <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="<?= base_url("assets/home/") ?>js/popper.min.js"></script>
    <!-- Popper tooltip library for Bootstrap -->
    <script src="<?= base_url("assets/home/") ?>js/bootstrap.min.js"></script>
    <!-- Bootstrap framework -->
    <script src="<?= base_url("assets/home/") ?>js/jquery.easing.min.js"></script>
    <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="<?= base_url("assets/home/") ?>js/jquery.countdown.min.js"></script>
    <!-- The Final Countdown plugin for jQuery -->
    <script src="<?= base_url("assets/home/") ?>js/swiper.min.js"></script>
    <!-- Swiper for image and text sliders -->
    <script src="<?= base_url("assets/home/") ?>js/jquery.magnific-popup.js"></script>
    <!-- Magnific Popup for lightboxes -->
    <script src="<?= base_url("assets/home/") ?>js/validator.min.js"></script>
    <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="<?= base_url("assets/home/") ?>js/scripts.js"></script>
    <!-- Custom scripts -->


</body>

</html>
