<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <?= $this->tag->getTitle(); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="LPPM UIN SUSKA RIAU"/>
    <meta name="keywords" content="ahmad fauzi rahman, lppm, kkn, penelitian"/>
    <meta content="AHMAD FAUZI RAHMAN" name="author"/>
    <!-- favicon -->
    <?php
    echo $this->tag->stylesheetLink("css/owl.carousel.min.css");
    echo $this->tag->stylesheetLink("css/owl.carousel.min.css");
    echo $this->tag->stylesheetLink("css/bootstrap.min.css");
    echo $this->tag->stylesheetLink("css/materialdesignicons.min.css");
    echo $this->tag->stylesheetLink("css/style.min.css");
    ?>

    <style>
        .navbar-light .navbar-nav li a {
            color: #ffffff !important;
        }

        .active{
            color: #5eff66 !important;
        }

        .navbar-light .navbar-nav li.active a, .navbar-light .navbar-nav li a:hover, .navbar-light .navbar-nav li a:active {
            color: #ffbb13 !important;
        }
    </style>

</head>

<body>

<!-- Loader -->
<div id="preloader">
    <div id="status">
        <div class="sk-chase">
            <div class="sk-chase-dot"></div>
            <div class="sk-chase-dot"></div>
            <div class="sk-chase-dot"></div>
            <div class="sk-chase-dot"></div>
            <div class="sk-chase-dot"></div>
            <div class="sk-chase-dot"></div>
        </div>
    </div>
</div>

<!--Navbar Start-->
<nav class="navbar navbar-expand-lg fixed-top navbar-custom sticky sticky-dark navbar-light">
    <div class="container">
        <!-- LOGO -->
        <a class="navbar-brand logo" href="<?= $this->url->get('') ?>">
            <img src="<?= $this->url->get('img/uinsuska2.png') ?>" alt="" class="" height="50">
            UNIVERSITAS ISLAM NEGERI SULTAN SYARIF KASIM
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="mdi mdi-menu"></i>
        </button>
        <div class="collapse navbar-collapse" >
            <ul class="navbar-nav ml-auto navbar-center" >
                <li class="nav-item active text-white">
                    <a href="#home" class="nav-link text-white">Beranda</a>
                </li>
                <li class="nav-item text-white">
                    <a href="#kknonline"  class="nav-link">KKN ONLINE</a>
                </li>
                <li class="nav-item text-white">
                    <a href="#berita"  class="nav-link">Berita</a>
                </li>
                <li class="nav-item text-white">
                    <a href="#about" class="nav-link">Tentang LPPM</a>
                </li>
                <li class="nav-item text-white">
                    <a href="<?= $this->url->get('module/admin/login') ?>" target="_blank" class="nav-link" id="login" onclick="login()">Login</a>

                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- Navbar End -->
<?= $this->getContent('') ?>

<!-- Footer Start -->
<section class="footer">
    <div class="container">
        <div class="row mb-4">
            <div class="col-lg-4 col-sm-6">
                <h5 class="footer-list-title f-18 font-weight-normal mb-3">ALAMAT KAMI</h5>
                <p class="footer-desc f-15">Gedung Islamic Center</p>
                <p class="footer-desc f-15">UIN Sultan Syarif Kasim Riau</p>
                <p class="footer-desc f-15">Jl. H.R. Soebrantas K.M. 15.5</p>
                <p class="footer-desc f-15">Rimba Panjang, Tambang, Kampar Regency, Riau 28292</p>
                <h5 class="footer-list-title font-weight-normal">LINK</h5>
                <ul class="list-unstyled company-sub-menu">
                    <li><a href="">Website</a></li>
                    <li><a href="">iRaise</a></li>
                    <!--                            <li><a href="">Contact Us</a></li>-->
                </ul>
<!--                <ul class="footer-icons list-inline f-20 mb-0 mt-4">-->
<!--                    <li class="list-inline-item mr-3"><a href="#" class=""><a href="layout-one-1.html"><img src="img/uinsuska2.png" alt="" class="logo-light" height="50"/></a></li>-->
<!--                    <li class="list-inline-item mr-3"><a href="#" class=""><i class="mdi mdi-twitter"></i></a></li>-->
<!--                    <li class="list-inline-item mr-3"><a href="#" class=""><i class="mdi mdi-instagram"></i></a></li>-->
<!--                    <li class="list-inline-item"><a href="#" class=""><i class="mdi mdi-linkedin"></i></a></li>-->
<!--                </ul>-->
            </div>
            <div class="col-lg-7 offset-lg-1">
                <div class="row mt-lg-0">
                    <div class="col-md-6 mt-4 mt-lg-0">
                        <h5 class="footer-list-title f-18 font-weight-normal mb-3">PANDUAN PENDAFTARAN KKN</h5>
                        <ul class="list-unstyled company-sub-menu">
                            <li><a href="">Unduh Dokumen Panduan</a></li>
                            <li><a href="">Unduh Dokumen Panduan PDL</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 mt-4 mt-lg-0">
                        <h5 class="footer-list-title f-18 font-weight-normal mb-3">HUBUNGI KAMI</h5>
                        <p class="footer-desc f-15">Email: lppm@uin-suska.ac.id</p>
                        <p class="footer-desc f-15">Fan Page: <a href="">LPPM UIN Suska Riau</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 mt-3">
                <div class="text-center footer-alt my-3">
                    <p class="f-15">2019 © Ahmad Fauzi Rahman ST, MTA. Make It Love</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Footer End -->
<?php
echo $this->tag->javascriptInclude('js/jquery.min.js');
echo $this->tag->javascriptInclude('js/bootstrap.bundle.min.js');
echo $this->tag->javascriptInclude('js/scrollspy.min.js');
echo $this->tag->javascriptInclude('js/jquery.easing.min.js');
echo $this->tag->javascriptInclude('js/counter.int.js');
echo $this->tag->javascriptInclude('js/owl.carousel.min.js');
echo $this->tag->javascriptInclude('js/app.js');
?>
<script>
    const url = "<?= $this->url->get() ?>"
</script>

</body>
</html>