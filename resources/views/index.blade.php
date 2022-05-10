<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    @include('partials/css')
    <link rel="stylesheet" href="{{asset('admin/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="/css/style.css">
    <title>Ghani | {{ $title }}</title>
  </head>
  <body class="bg-light">
    @include('partials.navbar')
    
    <!-- Home Section -->
    <section class="home py-5" id="home">
        <div class="container-lg">
            <div class="row min-vh-100 align-items-center align-content-center">
                <div class="col-md-6">
                    <div class="home-img text-center">
                        <!--<img src="{{asset('admin/images/profile.png')}}" class="rounded-circle mw-100" alt="profile img">-->
                    </div>

                </div>
                <div class="col-md-6 order-md-first">
                    <div class="home-text">
                        <p class="text-muted mb-1">Hello I'm</p>
                        <h1 class="text-danger text-uppercase fs-1 fw-bold">Web Developer</h1>
                        <h2 class="fs-4">{{$nama}}</h2>
                        <p>{{$deskripsi}}</p>
                        <a href="#portfolio" class="btn btn-danger px-3 mt-3">My Work</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Home Section End -->

    <!-- About Section Start -->
    <section class="about py-5" id="about">
        <div class="container-lg py-4">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center">
                        <h2 class="font fw-bold mb-5" id="about">About Me</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($about_index as $abt)
                <div class="col-md-6">
                    <div class="about-text">
                        <h3 calss="fs-4 mb-5">This is my overall perfomance while finishing my clients project.</h3>
                        <p class="text-muted">Let the number tells my quality.</p>
                    </div>
                    <div class="row text-center text-uppercase my-3">
                        <div class="col-sm-4">
                            <div class="fact-item">
                                <h4 class="fs-1 fw-bold">{{$abt->projek_selesai}}</h4>
                                <p class="text-muted">Projects Completed</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="fact-item">
                                <h4 class="fs-1 fw-bold">{{$abt->client_senang}}</h4>
                                <p class="text-muted">Happy Clients</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="fact-item">
                                <h4 class="fs-1 fw-bold">{{$abt->review_positif}}</h4>
                                <p class="text-muted">Positive Reviews</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 d-flex align-items-center">
                            <a href="#" class="btn px-3 btn-danger me-5">Download CV</a>
                            <div class="social-links">
                                <a href="#" class="text-dark me-2"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" class="text-dark me-2"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="text-dark me-2"><i class="fab fa-instagram"></i></a>
                                <a href="#" class="text-dark me-2"><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-5 mt-md-0">
                    <div class="skill-item mb-4">
                        <h3 class="fs-6">HTML</h3>
                        <div class="progress" style="height: 5px;">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: {{$abt->skill_html}}%;" aria-valuenow="{{$abt->skill_html}}" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="skill-item mb-4">
                        <h3 class="fs-6">CSS</h3>
                        <div class="progress" style="height: 5px;">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: {{$abt->skill_css}}%;" aria-valuenow="{{$abt->skill_css}}" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="skill-item mb-4">
                        <h3 class="fs-6">Javascript</h3>
                        <div class="progress" style="height: 5px;">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: {{$abt->skill_javascript}}%;" aria-valuenow="{{$abt->skill_javascript}}" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="skill-item mb-4">
                        <h3 class="fs-6">PHP</h3>
                        <div class="progress" style="height: 5px;">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: {{$abt->skill_php}}%;" aria-valuenow="{{$abt->skill_php}}" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- About Section End -->

    <!-- Service Section Start -->
    <section class="services py-5" id="services">
        <div class="container-lg py-4">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center">
                        <h2 class="font fw-bold mb-5">Services</h2>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                @foreach ($services_index as $srvs)
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="service-item shadow-sm p-4 rounded bg-white">
                        <div class="icon my-3 text-danger">
                            <i class="{{$srvs->ikon}}"></i>
                        </div>
                        <h3 class="fs-5 py-2">{{$srvs->pekerjaan}}</h3>
                        <p class="text-muted">{{$srvs->desc_pekerjaan}}</p>
                    </div>
                </div>
                @endforeach
            </div>
    </section>
    <!-- Service Section End -->

    <!-- Portfolio Section Start -->
    <section class="portfolio py-5" id="portfolio">
        <div class="container-lg py-4">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center">
                        <h2 class="font fw-bold mb-5" id="portfolio">Portfolio</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($portfolio_index as $prtf)
                <div class="col-md-6 col-lg-4">
                    <div class="portfolio-item">
                        <img src="{{asset('admin/images/portfolio/'. $prtf->gambar )}}" class="w-100 img-thumbnail" alt="portfolio-item">
                        <h3 class="fs-5 my-2">{{$prtf->nama}}</h3>
                        <p class="text-danger mb-4">{{$prtf->deskripsi}}</a></p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Portfolio Section End -->

    <!-- Freelancer Section Start -->
    <section class="freelancer-available bg-danger py-5">
        <div class="container-lg py-4">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <p class="text-light fs-5">Do you have any project ?</p>
                    <h2 class="fs-1 text-white mb-4">I'm Available For Freelancer Projects</h2>
                    <a href="#contact" class="btn btn-outline-light">Hire Me</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Freelancer Section End -->

    <!-- Testimonial Section Start-->
    <section class="testimonials py-5" id="testimonials">
        <div class="container-lg py-4">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center">
                        <h2 class="font fw-bold mb-5">Testimonials</h2>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                @foreach ($testimonials_index as $tsml)
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="service-item shadow-sm p-4 mb-3 rounded bg-white">
                        <div class="testi-author-info d-flex align-items-center">
                            <img src="{{asset('admin/images/testimonials/'.$tsml->profil)}}" class="img-thumbnail rounded-circle" alt="author img">
                            <div class="author ms-3">
                                <h3 class="fs-6 mb-1 text-left">{{$tsml->nama}}</h3>
                                <p class="text-muted m-0 text-left">{{$tsml->pekerjaan}}</p>
                            </div>
                        </div>
                        <p class="text-muted text-left mt-3">
                            "{{$tsml->ulasan}}"
                        </p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Testimonial Section End-->
    
    <!-- Contact Section Start-->
    <section class="contact" id="contact">
        <div class="container-lg py-4 mb-5">
            <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title text-center">
                    <h2 class="font fw-bold mb-5">Contact Us</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5">
                <div class="contact-item d-flex">
                    <div class="icon fs-4 text-danger">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="text ms-3">
                        <h3 class="fs-5">Email</h3>
                        <p class="text-muted">{{$email}}</p>
                    </div>
                </div>
                <div class="contact-item d-flex">
                    <div class="icon fs-4 text-danger">
                        <i class="fas fa-phone"></i>
                    </div>
                    <div class="text ms-3">
                        <h3 class="fs-5">Phone</h3>
                        <p class="text-muted">{{$phone}}</p>
                    </div>
                </div>
                <div class="contact-item d-flex">
                    <div class="icon fs-4 text-danger">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="text ms-3">
                        <h3 class="fs-5">Address</h3>
                        <p class="text-muted">{{$address}}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="contact-form">
                    <form action="{{route('contacts.store')}}" method="post">
                        {{csrf_field()}}
                        <div class="row">
                            <div class="col-lg-6 mb-4">
                                <input type="text" placeholder="Silahkan masukkan nama anda" name ="nama" class="form-control form-control-lg fs-6 border-0 shadow-sm"> 
                            </div>
                            <div class="col-lg-6 mb-4">
                                <input type="text" placeholder="Silahkan masukkan email anda" name ="email" class="form-control form-control-lg fs-6 border-0 shadow-sm"> 
                            </div>
                            <div class="col-lg-12 mb-4">
                                <textarea rows="5" type="text" name ="pesan" placeholder="Silahkan masukkan email anda" class="form-control form-control-lg fs-6 border-0 shadow-sm"></textarea> 
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <button type="submit" class="btn btn-danger px-3">Kirim </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End-->
    
    <footer class="footer border-top py-4">
        <div class="container-lg ">
            <div class="row">
                <div class="col-lg-12">
                    <p class="m-0 text-center text-muted">&copy; 2022 Ahmad Aufa Ghani</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="{{asset('admin/js/bootstrap.bundle.min.js')}}"></script>
    @include('partials/script')
  
  </body>
</html>