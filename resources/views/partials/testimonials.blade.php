<!-- ======= Testimonials Section ======= -->
<section id="testimonials" class="testimonials section-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>{{ $data6->titre }}</h2>
            <p>{{ $data6->sous_titre }}</p>
        </div>

        <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            {{ $data6->avis1 }}
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                        <img src="{{ $data6->photoavis1 }}"
                            class="testimonial-img" alt="">
                        <h3>{{ $data6->nomavis1 }}</h3>
                        <h4>{{ $data6->workavis1 }}</h4>
                    </div>
                </div><!-- End testimonial item -->


                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            {{ $data6->avis2 }}
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                        <img src="{{ $data6->photoavis2 }}"
                            class="testimonial-img" alt="">
                        <h3>{{ $data6->nomavis2 }}</h3>
                        <h4>{{ $data6->workavis2 }}</h4>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            {{ $data6->avis3 }}
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                        <img src="{{ $data6->photoavis3 }}"
                            class="testimonial-img" alt="">
                        <h3>{{ $data6->nomavis3 }}</h3>
                        <h4>{{ $data6->workavis3 }}</h4>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            {{ $data6->avis4 }}
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                        <img src="{{ $data6->photoavis4  }}"
                            class="testimonial-img" alt="">
                        <h3>{{ $data6->nomavis4 }}</h3>
                        <h4>{{ $data6->workavis4 }}</h4>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            {{ $data6->avis5 }}
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                        <img src="{{ asset('assets/img/testimonials/testimonials-5.jpg') }}"
                            class="testimonial-img" alt="">
                        <h3>{{ $data6->nomavis5 }}</h3>
                        <h4>{{ $data6->workavis5 }}</h4>
                    </div>
                </div><!-- End testimonial item -->

            </div>
            <div class="swiper-pagination"></div>
        </div>

    </div>
</section>
<!-- End Testimonials Section -->