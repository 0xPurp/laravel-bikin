<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>{{ $data4->titre }}</h2>
            <p>{{ $data4->sous_titre }}</p>
        </div>

        <div class="row">
            <div class="col-lg-12 d-flex justify-content-center">
                <ul id="portfolio-flters">
                    <li data-filter="*" class="filter-active">{{ $data4->categorie1 }}</li>
                    <li data-filter=".filter-app">{{ $data4->categorie2 }}</li>
                    <li data-filter=".filter-card">{{ $data4->categorie3 }}</li>
                    <li data-filter=".filter-web">{{ $data4->categorie4 }}</li>
                </ul>
            </div>
        </div>

        <div class="row portfolio-container">

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                    <img src="{{ $data4->photoitem1 }}" class="img-fluid"
                        alt="">
                    <div class="portfolio-info">
                        <h4>{{ $data4->titreitem1 }}</h4>
                        <p>{{ $data4->descriptionitem1 }}</p>
                        <div class="portfolio-links">
                            <a href="{{ $data4->photoitem1 }}"
                                data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i
                                    class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <div class="portfolio-wrap">
                    <img src="{{ $data4->photoitem2 }}" class="img-fluid"
                        alt="">
                    <div class="portfolio-info">
                        <h4>{{ $data4->titreitem2 }}</h4>
                        <p>{{ $data4->descriptionitem2 }}</p>
                        <div class="portfolio-links">
                            <a href="{{ $data4->photoitem2 }}"
                                data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i
                                    class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                    <img src="{{ $data4->photoitem3 }}" class="img-fluid"
                        alt="">
                    <div class="portfolio-info">
                        <h4>{{ $data4->titreitem3 }}</h4>
                        <p>{{ $data4->descriptionitem3 }}</p>
                        <div class="portfolio-links">
                            <a href="{{ $data4->photoitem3 }}"
                                data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i
                                    class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                <div class="portfolio-wrap">
                    <img src="{{ $data4->photoitem4 }}" class="img-fluid"
                        alt="">
                    <div class="portfolio-info">
                        <h4>{{ $data4->titreitem4 }}</h4>
                        <p>{{ $data4->descriptionitem4 }}</p>
                        <div class="portfolio-links">
                            <a href="{{ $data4->photoitem4 }}"
                                data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i
                                    class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <div class="portfolio-wrap">
                    <img src="{{ $data4->photoitem5 }}" class="img-fluid"
                        alt="">
                    <div class="portfolio-info">
                        <h4>{{ $data4->titreitem5 }}</h4>
                        <p>{{ $data4->descriptionitem5 }}</p>
                        <div class="portfolio-links">
                            <a href="{{ $data4->photoitem5 }}"
                                data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i
                                    class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                    <img src="{{ $data4->photoitem6 }}" class="img-fluid"
                        alt="">
                    <div class="portfolio-info">
                        <h4>{{ $data4->titreitem6 }}</h4>
                        <p>{{ $data4->descriptionitem6 }}</p>
                        <div class="portfolio-links">
                            <a href="{{ $data4->photoitem6 }}"
                                data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i
                                    class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                <div class="portfolio-wrap">
                    <img src="{{ $data4->photoitem7 }}" class="img-fluid"
                        alt="">
                    <div class="portfolio-info">
                        <h4>{{ $data4->titreitem7 }}</h4>
                        <p>{{ $data4->descriptionitem7 }}</p>
                        <div class="portfolio-links">
                            <a href="{{ $data4->photoitem7 }}"
                                data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i
                                    class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                <div class="portfolio-wrap">
                    <img src="{{ $data4->photoitem8 }}" class="img-fluid"
                        alt="">
                    <div class="portfolio-info">
                        <h4>{{ $data4->titreitem8 }}</h4>
                        <p>{{ $data4->descriptionitem8 }}</p>
                        <div class="portfolio-links">
                            <a href="{{ $data4->photoitem8 }}"
                                data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i
                                    class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <div class="portfolio-wrap">
                    <img src="{{ $data4->photoitem9 }}" class="img-fluid"
                        alt="">
                    <div class="portfolio-info">
                        <h4>{{ $data4->titreitem9 }}</h4>
                        <p>{{ $data4->descriptionitem9 }}</p>
                        <div class="portfolio-links">
                            <a href="{{ $data4->photoitem9 }}"
                                data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i
                                    class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section><!-- End Portfolio Section -->


