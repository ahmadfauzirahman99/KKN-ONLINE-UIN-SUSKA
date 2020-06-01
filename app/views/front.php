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
<nav class="navbar navbar-expand-lg fixed-top navbar-custom sticky sticky-dark navbar-light nav-dark">
    <div class="container">
        <!-- LOGO -->
        <a class="navbar-brand logo" href="<?= $this->url->get('') ?>">
            <img src="<?= $this->url->get('images/logo-dark.png') ?>" alt="" class="" height="21">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="mdi mdi-menu"></i>
        </button>
        <div class="collapse navbar-collapse" >
            <ul class="navbar-nav ml-auto navbar-center" >
                <li class="nav-item active">
                    <a href="#home" class="nav-link">Beranda</a>
                </li>

                <li class="nav-item">
                    <a href="#about" class="nav-link">Tentang LPPM</a>
                </li>
                <li class="nav-item">
                    <a href="<?= $this->url->get('berita') ?>"  class="nav-link">Berita</a>
                </li>
                <li class="nav-item">
                    <a href=""  class="nav-link">KKN ONLINE</a>
                </li>
                <li class="nav-item">
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
                <div class="mb-4">
                    <a href="layout-one-1.html"><img src="images/logo-light.png" alt="" class="logo-light" height="22"/></a>
                    <a href="layout-one-1.html"><img src="images/logo-dark.png" alt="" class="logo-dark"
                                                     height="22"/></a>
                </div>
                <p class="footer-desc f-15">Rimba Panjang, Tambang, Kampar Regency, Riau 28293</p>
                <ul class="footer-icons list-inline f-20 mb-0 mt-4">
                    <li class="list-inline-item mr-3"><a href="#" class=""><i class="mdi mdi-facebook"></i></a></li>
                    <li class="list-inline-item mr-3"><a href="#" class=""><i class="mdi mdi-twitter"></i></a></li>
                    <li class="list-inline-item mr-3"><a href="#" class=""><i class="mdi mdi-instagram"></i></a></li>
                    <li class="list-inline-item"><a href="#" class=""><i class="mdi mdi-linkedin"></i></a></li>
                </ul>
            </div>
            <div class="col-lg-7 offset-lg-1">
                <div class="row mt-lg-0">
                    <div class="col-md-6 mt-4 mt-lg-0">
                        <h5 class="footer-list-title f-18 font-weight-normal mb-3">Company</h5>
                        <ul class="list-unstyled company-sub-menu">
                            <li><a href="">About</a></li>
                            <li><a href="">Service</a></li>
                            <li><a href="">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 mt-4 mt-lg-0">
                        <h5 class="footer-list-title f-18 font-weight-normal mb-3">Further Information</h5>
                        <ul class="list-unstyled company-sub-menu">
                            <li><a href="">Term & Condition</a></li>
                            <li><a href="">Privacy Policy</a></li>
                        </ul>
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
    const url = "<?= $this->url->get() ?>module/admin/login"

</script>

</body>
</html>