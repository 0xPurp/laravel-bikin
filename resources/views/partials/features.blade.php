<!-- ======= Features Section ======= -->
<section id="features" class="features" data-aos="fade-up">
    <div class="container">
        <div class="section-title">
            <h2>{{ $data3->titrefeatures }}</h2>
            <p>{{ $data3->soustitrefeatures }}</p>
        </div>
        <div class="row content">
            <div class="col-md-5" data-aos="fade-right" data-aos-delay="100">
                <img src="{{ $data3->imgfeature1 }}" class="img-fluid" alt="">
            </div>
            <div class="col-md-7 pt-4" data-aos="fade-left" data-aos-delay="100">
                <h3>{{ $data3->titrefeature1 }}</h3>
                <p class="fst-italic">
                    {{ $data3->descriptionfeature1 }}
                </p>
                <ul>
                    <li><i class="bi bi-check"></i> {{ $data3->item1feature1 }}
                    </li>
                    <li><i class="bi bi-check"></i>{{ $data3->item2feature1 }}</li>
                    <li><i class="bi bi-check"></i>{{ $data3->item3feature1 }}</li>
                </ul>
            </div>
        </div>
        <div class="row content">
            <div class="col-md-5 order-1 order-md-2" data-aos="fade-left">
                <img src="{{ $data3->imgfeature2 }}" class="img-fluid" alt="">
            </div>
            <div class="col-md-7 pt-5 order-2 order-md-1" data-aos="fade-right">
                <h3>{{ $data3->titrefeature2 }}</h3>
                <p class="fst-italic">
                    {{ $data3->descriptionfeature2 }}
                </p>
                <p>
                    {{ $data3->textfeature2 }}
                </p>
            </div>
        </div>
        <div class="row content">
            <div class="col-md-5" data-aos="fade-right">
                <img src="{{ $data3->imgfeature3 }}" class="img-fluid" alt="">
            </div>
            <div class="col-md-7 pt-5" data-aos="fade-left">
                <h3>{{ $data3->titrefeature3 }}</h3>
                <p>{{ $data3->descriptionfeature3 }}</p>
                <ul>
                    <li><i class="bi bi-check"></i>{{ $data3->item1feature3 }}</li>
                    <li><i class="bi bi-check"></i>{{ $data3->item2feature3 }}</li>
                    <li><i class="bi bi-check"></i>{{ $data3->item3feature3 }}</li>
                </ul>
            </div>
        </div>
        <div class="row content">
            <div class="col-md-5 order-1 order-md-2" data-aos="fade-left">
                <img src="{{ $data3->imgfeature4 }}" class="img-fluid" alt="">
            </div>
            <div class="col-md-7 pt-5 order-2 order-md-1" data-aos="fade-right">
                <h3>{{ $data3->titrefeature4 }}</h3>
                <p class="fst-italic">
                    {{ $data3->descriptionfeature4 }}
                </p>
                <p>
                    {{ $data3->textfeature4 }}
                </p>
            </div>
        </div>
    </div>
</section>
<!-- End Features Section -->