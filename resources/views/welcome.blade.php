<x-main>

    @section('title', 'Welcome')
    <div class="container-xxl py-5 bg-primary hero-header mb-5">
        <div class="container my-5 py-5 px-lg-5">
            <div class="row g-5 py-5">
                <div class="col-lg-6 text-center text-lg-start">
                    <h1 class="text-white mb-4 animated zoomIn text-center">Hey 👍 Welcome</h1>
                    <p class="text-white pb-3 animated zoomIn text-center">Welcome to this wonderful space. My Name is Obioma Onwuka, a big fan of technology. I specialize in backend development using PHP and Laravel.</p>
                    <center>

                        <a href="/url_shortener" class="btn btn-light py-sm-3 px-sm-5 rounded-pill me-3 animated slideInLeft">Shorten Url</a>
                    <a href="/password_generator" class="btn btn-outline-light py-sm-3 px-sm-5 rounded-pill animated slideInRight">Generate Password</a>

                    </center>
                </div>
                <div class="col-lg-6 text-center text-lg-start">
                    <img class="img-fluid" src="img/hero.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Navbar & Hero End -->



    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container px-lg-5">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                        <h6 class="position-relative d-inline text-primary ps-4">Projects Insight 💼</h6>
                        <h2 class="mt-2">The URL GENERATOR and the PASSWORD GENERATOR</h2>
                    </div>
                    <p class="mb-4 text-center">This space contains two awesome projects: URL SHORTENER and PASSWORD GENERATOR. I am working to add a control panel for the URL GENERATOR, to enable you have insights of your generated URLS. On the other hand, I wish to let you know that the PASSWORD GENERATOR project doesn't store passwords generated in this project.</p>
                    <p class="mb-4 text-center">Please reach out to me though the available channels for further information. 🤝</p>
                
                </div>
                <div class="col-lg-6">
                    <img class="img-fluid wow zoomIn" data-wow-delay="0.5s" src="img/about.jpg">
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Newsletter Start -->
    <div class="container-xxl bg-primary newsletter my-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container px-lg-5">
            <div class="row align-items-center" style="height: 250px;">
                <div class="col-12 col-md-6">
                    <h3 class="text-white">Clone Project From Github</h3>
                    <small class="text-white">Of course you can get your hands on this project from my github profile. Feel free to customeize to your taste and put to use in your way.</small>
                    <div class="position-relative w-100 mt-3">
                        <a href="https://github.com/obioma-onwuka/url_shortner_master" target = "_blank" class="btn btn-light py-sm-3 px-sm-5 rounded-pill me-3 animated slideInLeft">Github Clone</a>
                    </div>
                </div>
                <div class="col-md-6 text-center mb-n5 d-none d-md-block">
                    <img class="img-fluid mt-5" style="height: 250px;" src="img/newsletter.png">
                </div>
            </div>
        </div>
    </div>
    <!-- Newsletter End -->

    <!-- Portfolio Start -->
    <div class="container-xxl py-5" id = "projects">
        <div class="container px-lg-5">
            <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="position-relative d-inline text-primary ps-4">Our Projects</h6>
                <h2 class="mt-2">We have built some nice projects</h2>
            </div>
            
            <div class="row g-4 portfolio-container">
                <div class="col-lg-6 col-md-6 portfolio-item first wow zoomIn" data-wow-delay="0.1s">
                    <div class="position-relative rounded overflow-hidden">
                        <img class="img-fluid w-100" src="img/obt_password_gen.png" alt="">
                        <div class="portfolio-overlay">
                            <a class="btn btn-light" href="img/obt_password_gen.png" data-lightbox="portfolio"><i class="fa fa-plus fa-2x text-primary"></i></a>
                            <div class="mt-auto">
                                <small class="text-white"><i class="fa fa-folder me-2"></i>Personal</small>
                                <a class="h5 d-block text-white mt-1 mb-0" href="">Password Generator</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 portfolio-item second wow zoomIn" data-wow-delay="0.3s">
                    <div class="position-relative rounded overflow-hidden">
                        <img class="img-fluid w-100" src="img/obt_url_short.png" alt="">
                        <div class="portfolio-overlay">
                            <a class="btn btn-light" href="img/obt_url_short.png" data-lightbox="portfolio"><i class="fa fa-plus fa-2x text-primary"></i></a>
                            <div class="mt-auto">
                                <small class="text-white"><i class="fa fa-folder me-2"></i>Personal</small>
                                <a class="h5 d-block text-white mt-1 mb-0" href="">Url SHortener</a>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- Portfolio End -->



</x-main>