
<!-- Hero Start -->
<section class="hero-3-bg position-relative d-flex align-items-center" id="home"
         style="background: linear-gradient(rgba(0,0,0,.3), rgba(0,0,0,.3)), url(<?= $this->url->get('img/lppm.jpg')  ?>); background-repeat: no-repeat; max-width: 100%; height: auto; background-attachment: fixed;
                 background-size: cover;">
    <div class="container" >
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="hero-title">
<!--                    <span class="badge badge-primary text-uppercase mb-4">Something Amazing</span>-->
                    <h1 class="title font-weight-normal text-muted mb-2 text-white">LPPM UIN SUSKA RIAU 2020</h1>
<!--                    <h1 class="title text-muted font-weight-normal mb-4">Selamat Datang Di <span-->
<!--                            class="title">LPPM</span>-->
<!--                    </h1>-->
                    <p class="text-muted mb-2 pb-2 text-white">Portal Penelitian dan Pengabdian Kepada Masyarakat</p>
                    <a href="" class="btn btn-primary btn-sm">Read More <span class="ml-2 right-icon">&#8594;</span></a>
                </div>
            </div>
            <div class="col-lg-5 offset-lg-1">
                <div class="mt-5 mt-lg-0">
                    <div class="card">

                        <div class="card-body p-4">

                            <div class="text-center mb-4">
                                <h4 class="text-uppercase mt-0"><b>Hi!</b> Silahkan Masuk</h4>
                            </div>

                            <form action="<?= $this->url->get('proses/login') ?>" method="post">

                                <div class="form-group mb-3">
                                    <label for="emailaddress">Kode Akun / Nik / Nim / Email</label>
                                    <input class="form-control" type="text" id="emailaddress" name="masuk[]" required=""
                                           placeholder="Masukan Kode Akun / Nik / Nim">
                                </div>

                                <div class="form-group mb-3">
                                    <label for="password">Password</label>
                                    <input class="form-control" type="password" required="" name="masuk[]" id="password"
                                           placeholder="Masukan password">
                                </div>

                                <div class="form-group mb-3">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="checkbox-signin" checked>
                                        <label class="custom-control-label" for="checkbox-signin">Remember me</label>
                                    </div>
                                </div>

                                <div class="form-group mb-0 text-center">
                                    <button class="btn btn-primary btn-block" type="submit"> Log In</button>
                                </div>

                            </form>

                        </div> <!-- end card-body -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero End -->

<!-- Kkn Online Start -->
<section class="section bg-light" id="kknonline">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8">
                <div class="text-center mb-5">
                    <h4 class="text-uppercase mb-0">KKN ONLINE</h4>
                    <div class="my-3">
                        <img src="<?= $this->url->get('images/title-border.png')  ?>" alt="" class="img-fluid mx-auto d-block">
                    </div>
                    <p class="text-muted f-14">Cek KKN Kamu Disini</p>
                    <div class="card">

                        <div class="card-body p-4">

                            <form action="" method="post">

                                <div class="form-group mb-3">
                                    <label for="emailaddress">Kode Akun / Nik / Nim / Email</label>
                                    <input class="form-control" type="text" id="emailaddress" name="masuk[]" required=""
                                           placeholder="Masukan Kode Akun / Nik / Nim">
                                </div>

                                <div class="form-group mb-0 text-center">
                                    <button class="btn btn-primary btn-block" type="submit">CEK</button>
                                </div>

                            </form>

                        </div> <!-- end card-body -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Kkn Online End -->

<!-- Berita Start -->
<section class="section bg-light" id="berita">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8">
                <div class="text-center">
                    <h4 class="text-uppercase mb-0">Berita</h4>
                    <div class="my-3">
                        <img src="<?= $this->url->get('images/title-border.png')  ?>" alt="" class="img-fluid mx-auto d-block">
                    </div>
                    <p class="text-muted f-14"></p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6 mb-4">
                <div class="card h-100">
                    <a href="#"><img class="card-img-top" src="<?= $this->url->get('img/post-3.jpg')  ?>" alt=""></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="#">Project One</a>
                        </h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="card h-100">
                    <a href="#"><img class="card-img-top" src="<?= $this->url->get('img/post-3.jpg')  ?>" alt=""></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="#">Project Two</a>
                        </h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit aliquam aperiam nulla perferendis dolor nobis numquam, rem expedita, aliquid optio, alias illum eaque. Non magni, voluptates quae, necessitatibus unde temporibus.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="card h-100">
                    <a href="#"><img class="card-img-top" src="<?= $this->url->get('img/post-3.jpg')  ?>" alt=""></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="#">Project Three</a>
                        </h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="card h-100">
                    <a href="#"><img class="card-img-top" src="<?= $this->url->get('img/post-3.jpg')  ?>" alt=""></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="#">Project Four</a>
                        </h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit aliquam aperiam nulla perferendis dolor nobis numquam, rem expedita, aliquid optio, alias illum eaque. Non magni, voluptates quae, necessitatibus unde temporibus.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="card h-100">
                    <a href="#"><img class="card-img-top" src="<?= $this->url->get('img/post-3.jpg')  ?>" alt=""></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="#">Project Five</a>
                        </h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="card h-100">
                    <a href="#"><img class="card-img-top" src="<?= $this->url->get('img/post-3.jpg')  ?>" alt=""></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="#">Project Six</a>
                        </h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit aliquam aperiam nulla perferendis dolor nobis numquam, rem expedita, aliquid optio, alias illum eaque. Non magni, voluptates quae, necessitatibus unde temporibus.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8">
                <div class="text-center">
                    <div class="my-3">
                        <button class="btn btn-primary btn-block" type="submit">Baca Berita Lebih Banyak</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- Berita us End -->

<!-- Tentang Start -->
<section class="section bg-light" id="about">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8">
                <div class="text-center mb-5">
                    <h4 class="text-uppercase mb-0">Tentang</h4>
                    <div class="my-3">
                        <img src="<?= $this->url->get('images/title-border.png')  ?>" alt="" class="img-fluid mx-auto d-block">
                    </div>
                    <p class="text-muted f-14">Visi:
                        Terwujudnya Lembaga Penelitian dan Pengabdian kepada Masyarakat
                        UIN Sultan Syarif Kasim Riau sebagai lembaga model dalam bidang penelitian integrasi keilmuan di
                        dunia tahun 2033</p>
                </div>
            </div>
        </div>

        <div class="row align-items-center">
            <div class="col-lg-5">
                <img src="<?= $this->url->get('img/Pictures.jpg') ?>" alt="" class="img-fluid mx-auto d-block">
            </div>
            <div class="col-lg-6 offset-lg-1">
                <div class="text-muted mt-5 mt-lg-0">
                    <h2 class="title mb-4">LPPM UIN Suska Riau adalah Lembaga Penelitian dan Pengabdian kepada Masyarakat Universitas Islam Negeri Sultan Syarif Kasim Riau.</h2>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- Tentang End -->

<Section class="section counter-bg" style="display:none ">
    <div class="counter-bg-overlay"></div>
    <div class="container">
        <div class="row align-items-center" id="counter">
        </div>
    </div>
</Section>
<!-- Clients Start -->
<section class="section bg-light" id="clients" style="display: none">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8">
                <div class="text-center mb-5">
                    <h4 class="text-uppercase mb-0">Our Clients</h4>
                    <div class="my-3">
                        <img src="images/title-border.png" alt="" class="img-fluid mx-auto d-block">
                    </div>
                    <p class="text-muted f-14">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                        accusantium doloremque laudantium.</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="testi-content text-center m-3 p-4 position-relative">
                        <div class="testi-icon"><i class="mdi mdi-format-quote-open"></i></div>
                        <p class="text-muted mb-4 position-relative f-15">Et harum quidem that rerum facilis expedita
                            distinctio nam at what libero tempore cum soluta nobis est eligendi.</p>
                        <img src="images/users/1.jpg" alt="" class="img-fluid mx-auto d-block rounded-circle user-img">
                        <h5 class="title mb-1 mt-4">Jane Banta</h5>
                        <p class="text-muted mb-2 f-15">Web Developer</p>
                        <ul class="list-unstyled f-15 text-warning mb-0">
                            <li class="list-inline-item mr-1"><i class="mdi mdi-star"></i></li>
                            <li class="list-inline-item mr-1"><i class="mdi mdi-star"></i></li>
                            <li class="list-inline-item mr-1"><i class="mdi mdi-star"></i></li>
                            <li class="list-inline-item mr-1"><i class="mdi mdi-star"></i></li>
                            <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                        </ul>
                    </div>
                </div>
                <!-- owl item and -->
                <div class="item">
                    <div class="testi-content text-center m-3 p-4 position-relative">
                        <div class="testi-icon"><i class="mdi mdi-format-quote-open"></i></div>
                        <p class="text-muted mb-4 position-relative f-15">At vero eos et accusamus et iusto odio
                            dignissimos ducimus qui blanditiis praesentium voluptatum. 😍</p>
                        <img src="images/users/2.jpg" alt="" class="img-fluid mx-auto d-block rounded-circle user-img">
                        <h5 class="title mb-1 mt-4">Manuel Allen</h5>
                        <p class="text-muted mb-2 f-15">Graphic Designer</p>
                        <ul class="list-unstyled f-15 text-warning mb-0">
                            <li class="list-inline-item mr-1"><i class="mdi mdi-star"></i></li>
                            <li class="list-inline-item mr-1"><i class="mdi mdi-star"></i></li>
                            <li class="list-inline-item mr-1"><i class="mdi mdi-star"></i></li>
                            <li class="list-inline-item mr-1"><i class="mdi mdi-star"></i></li>
                            <li class="list-inline-item"><i class="mdi mdi-star-outline"></i></li>
                        </ul>
                    </div>
                </div>
                <!-- owl item and -->
                <div class="item">
                    <div class="testi-content text-center m-3 p-4 position-relative">
                        <div class="testi-icon"><i class="mdi mdi-format-quote-open"></i></div>
                        <p class="text-muted mb-4 position-relative f-15">Temporibus autem quibusdam et aut officiis
                            debitis aut rerum necessitatibus saepe eveniet ut et voluptates.</p>
                        <img src="images/users/3.jpg" alt="" class="img-fluid mx-auto d-block rounded-circle user-img">
                        <h5 class="title mb-1 mt-4">Hattie Fuller</h5>
                        <p class="text-muted mb-2 f-15">Web Designer</p>
                        <ul class="list-unstyled f-15 text-warning mb-0">
                            <li class="list-inline-item mr-1"><i class="mdi mdi-star"></i></li>
                            <li class="list-inline-item mr-1"><i class="mdi mdi-star"></i></li>
                            <li class="list-inline-item mr-1"><i class="mdi mdi-star"></i></li>
                            <li class="list-inline-item mr-1"><i class="mdi mdi-star-outline"></i></li>
                            <li class="list-inline-item"><i class="mdi mdi-star-outline"></i></li>
                        </ul>
                    </div>
                </div>
                <!-- owl item and -->
                <div class="item">
                    <div class="testi-content text-center m-3 p-4 position-relative">
                        <div class="testi-icon"><i class="mdi mdi-format-quote-open"></i></div>
                        <p class="text-muted mb-4 position-relative f-15">Nemo enim ipsam voluptatem quia voluptas sit
                            aspernatur aut odit aut fugit, sed quia consequuntur magni dolores. 😘</p>
                        <img src="images/users/4.jpg" alt="" class="img-fluid mx-auto d-block rounded-circle user-img">
                        <h5 class="title mb-1 mt-4">James Clark</h5>
                        <p class="text-muted mb-2 f-15">PHP Developer</p>
                        <ul class="list-unstyled f-15 text-warning mb-0">
                            <li class="list-inline-item mr-1"><i class="mdi mdi-star"></i></li>
                            <li class="list-inline-item mr-1"><i class="mdi mdi-star"></i></li>
                            <li class="list-inline-item mr-1"><i class="mdi mdi-star"></i></li>
                            <li class="list-inline-item mr-1"><i class="mdi mdi-star"></i></li>
                            <li class="list-inline-item"><i class="mdi mdi-star-outline"></i></li>
                        </ul>
                    </div>
                </div>
                <!-- owl item and -->
                <div class="item">
                    <div class="testi-content text-center m-3 p-4 position-relative">
                        <div class="testi-icon"><i class="mdi mdi-format-quote-open"></i></div>
                        <p class="text-muted mb-4 position-relative f-15"> Quis autem vel eum iure reprehenderit qui in
                            ea voluptate velit esse quam nihil molestiae consequatur vel illum.</p>
                        <img src="images/users/5.jpg" alt="" class="img-fluid mx-auto d-block rounded-circle user-img">
                        <h5 class="title mb-1 mt-4">Marie Perkins</h5>
                        <p class="text-muted mb-2 f-15">UI/UX Designer</p>
                        <ul class="list-unstyled f-15 text-warning mb-0">
                            <li class="list-inline-item mr-1"><i class="mdi mdi-star"></i></li>
                            <li class="list-inline-item mr-1"><i class="mdi mdi-star"></i></li>
                            <li class="list-inline-item mr-1"><i class="mdi mdi-star"></i></li>
                            <li class="list-inline-item mr-1"><i class="mdi mdi-star"></i></li>
                            <li class="list-inline-item"><i class="mdi mdi-star-outline"></i></li>
                        </ul>
                    </div>
                </div>
                <!-- owl item and -->
                <div class="item">
                    <div class="testi-content text-center m-3 p-4 position-relative">
                        <div class="testi-icon"><i class="mdi mdi-format-quote-open"></i></div>
                        <p class="text-muted mb-4 position-relative f-15">Et harum quidem that rerum facilis expedita
                            distinctio nam at what libero tempore cum soluta nobis est eligendi. 😜</p>
                        <img src="images/users/6.jpg" alt="" class="img-fluid mx-auto d-block rounded-circle user-img">
                        <h5 class="title mb-1 mt-4">Daniel Clark</h5>
                        <p class="text-muted mb-2 f-15">Graphic Designer</p>
                        <ul class="list-unstyled f-15 text-warning mb-0">
                            <li class="list-inline-item mr-1"><i class="mdi mdi-star"></i></li>
                            <li class="list-inline-item mr-1"><i class="mdi mdi-star"></i></li>
                            <li class="list-inline-item mr-1"><i class="mdi mdi-star"></i></li>
                            <li class="list-inline-item mr-1"><i class="mdi mdi-star-outline"></i></li>
                            <li class="list-inline-item"><i class="mdi mdi-star-outline"></i></li>
                        </ul>
                    </div>
                </div>
                <!-- owl item and -->
                <div class="item">
                    <div class="testi-content text-center m-3 p-4 position-relative">
                        <div class="testi-icon"><i class="mdi mdi-format-quote-open"></i></div>
                        <p class="text-muted mb-4 position-relative f-15">Itaque earum rerum hic tenetur a sapiente
                            delectus, ut aut reiciendis voluptatibus maiores that alias consequatur.</p>
                        <img src="images/users/3.jpg" alt="" class="img-fluid mx-auto d-block rounded-circle user-img">
                        <h5 class="title mb-1 mt-4">Helen Jones</h5>
                        <p class="text-muted mb-2 f-15">Web Designer</p>
                        <ul class="list-unstyled f-18 text-warning mb-0">
                            <li class="list-inline-item mr-1"><i class="mdi mdi-star"></i></li>
                            <li class="list-inline-item mr-1"><i class="mdi mdi-star"></i></li>
                            <li class="list-inline-item mr-1"><i class="mdi mdi-star"></i></li>
                            <li class="list-inline-item mr-1"><i class="mdi mdi-star"></i></li>
                            <li class="list-inline-item"><i class="mdi mdi-star-outline"></i></li>
                        </ul>
                    </div>
                </div>
                <!-- owl item and -->
            </div>
        </div>
    </div>
</section>
<!-- Clients End -->
<section class="section" id="<?= $this->url->get('module/admin/login') ?>" style="display: none">
</section>
<!-- contact Us Start -->
<section class="section" id="contact" style="display: none">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8">
                <div class="text-center mb-5">
                    <h4 class="text-uppercase mb-0">Get In Touch</h4>
                    <div class="my-3">
                        <img src="images/title-border.png" alt="" class="img-fluid mx-auto d-block">
                    </div>
                    <p class="text-muted f-14">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                        accusantium doloremque laudantium.</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4">
                <div class="contact-address">
                    <h4 class="title mb-4">Kontak Info</h4>
                    <p class="text-muted f-15">Rimba Panjang, Tambang, Kampar Regency, Riau 28293</p>
                    <p class="text-muted f-15 mb-4">Sultan Syarif Kasim II State Islamic University</p>
                </div>
                <div class="row" style="display: none">
                    <div class="col-md-6">
                        <div class="contact-address">
                            <h5 class="title f-18">Address - A</h5>
                            <p class="text-muted f-15">3165 Roosevelt Wilson Riverside, CA 92507</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="contact-address">
                            <h5 class="title f-18">Address - B</h5>
                            <p class="text-muted f-15">1121 Bombardier Way Southfield, MI 48075</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-7 offset-lg-1">
                <div class="custom-form mt-4 mt-lg-0">
                    <div id="message"></div>
                    <form method="post" action="php/contact.php" name="contact-form" id="contact-form">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group app-label">
                                    <label for="name">Name</label>
                                    <input name="name" id="name" type="text" class="form-control"
                                           placeholder="Enter your name..">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group app-label">
                                    <label for="email">Email address</label>
                                    <input name="email" id="email" type="email" class="form-control"
                                           placeholder="Enter your email..">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group app-label">
                                    <label for="subject">Subject</label>
                                    <input type="text" class="form-control" id="subject" placeholder="Enter Subject.."/>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group app-label">
                                    <label for="comments">Message</label>
                                    <textarea name="comments" id="comments" rows="3" class="form-control"
                                              placeholder="Enter message.."></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <button type="submit" id="submit" name="send" class="btn btn-primary">Send Message <i
                                        class="mdi mdi-telegram ml-2"></i></button>
                                <div id="simple-msg"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact Us End -->