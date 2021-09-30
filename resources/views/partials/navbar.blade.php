<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

        <h1 class="logo"><a href="#">{{ $data1->nomsite }}</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="#hero">{{ $data1->btnhome }}</a></li>
                <li><a class="nav-link scrollto" href="#about">{{ $data1->btnabout }}</a></li>
                <li><a class="nav-link scrollto" href="#services">{{ $data1->btnservices }}</a></li>
                <li><a class="nav-link scrollto " href="#portfolio">{{ $data1->btnportfolio }}</a></li>
                <li><a class="nav-link scrollto" href="#team">{{ $data1->btnteam }}</a></li>
                <li><a class="nav-link scrollto" href="#contact">{{ $data1->btncontact }}</a></li>
                <li><a class="getstarted scrollto" href="#about">{{ $data1->btngetstarted }}</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->