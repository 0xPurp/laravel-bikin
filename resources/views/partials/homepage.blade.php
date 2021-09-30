<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">

    <div class="container d-flex flex-column align-items-center justify-content-center" data-aos="fade-up">
        <h1>{{ $data2->titrehomepage }}</h1>
        <h2>{{ $data2->sous_titrehomepage }}</h2>
        <a href="#about" class="btn-get-started scrollto">{{ $data2->btnstart }}</a>
        <img src="{{ $data2->imghomepage }}" class="img-fluid hero-img" alt="" data-aos="zoom-in"
            data-aos-delay="150">
    </div>

</section><!-- End Hero -->
<!-- ======= About Section ======= -->
<section id="about" class="about">
    <div class="container">

        <div class="row no-gutters">
            <div class="content col-xl-5 d-flex align-items-stretch" data-aos="fade-right">
                <div class="content">
                    <h3>{{ $data2->titreabout }}</h3>
                    <p>
                        {{ $data2->sous_titreabout }}
                    </p>
                    <a href="#" class="about-btn">{{ $data2->btnabout }} <i class="bx bx-chevron-right"></i></a>
                </div>
            </div>
            <div class="col-xl-7 d-flex align-items-stretch" data-aos="fade-left">
                <div class="icon-boxes d-flex flex-column justify-content-center">
                    <div class="row">
                        <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                            <i class="bx bx-receipt"></i>
                            <h4>{{ $data2->titrecard1 }}</h4>
                            <p>{{ $data2->descriptioncard1 }}</p>
                        </div>
                        <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                            <i class="bx bx-cube-alt"></i>
                            <h4>{{ $data2->titrecard2 }}</h4>
                            <p>{{ $data2->descriptioncard2 }}</p>
                        </div>
                        <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                            <i class="bx bx-images"></i>
                            <h4>{{ $data2->titrecard3 }}</h4>
                            <p>{{ $data2->descriptioncard3 }}</p>
                        </div>
                        <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                            <i class="bx bx-shield"></i>
                            <h4>{{ $data2->titrecard4 }}</h4>
                            <p>{{ $data2->descriptioncard4 }}</p>
                        </div>
                    </div>
                </div><!-- End .content-->
            </div>
        </div>

    </div>
</section><!-- End About Section -->
