<!-- ======= Footer ======= -->
<footer id="footer">

    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 footer-contact">
                    <h3>{{ $data9->titre }}</h3>
                    <p>
                        {{ $data9->adress }} <br>
                        {{ $data9->ville }}<br>
                        {{ $data9->pays }} <br><br>
                        <strong>{{ $data9->phonebold }}</strong>{{ $data9->phone }}<br>
                        <strong>{{ $data9->mailbold }}</strong> {{ $data9->mail }}<br>
                    </p>
                </div>

                <div class="col-lg-2 col-md-6 footer-links">
                    <h4>{{ $data9->linksbold }}</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">{{ $data9->link1 }}</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">{{ $data9->link2 }}</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">{{ $data9->link3 }}</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">{{ $data9->link4 }}</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">{{ $data9->link5 }}</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>{{ $data9->servicebold }}</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">{{ $data9->service1 }}</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">{{ $data9->service2 }}</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">{{ $data9->service3 }}</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">{{ $data9->service4 }}</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">{{ $data9->service5 }}</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6 footer-newsletter">
                    <h4>{{ $data9->newsletterbold }}</h4>
                    <p>{{ $data9->newsletter }}</p>
                    <form action="" method="post">
                        <input type="email" name="email"><input type="submit" value="{{ $data9->btnnews }}">
                    </form>
                </div>

            </div>
        </div>
    </div>

    <div class="container d-md-flex py-4">

        <div class="me-md-auto text-center text-md-start">
            <div class="copyright">
                &copy; {{ $data9->copyright1 }}<strong><span>{{ $data9->desginedlink }}</span></strong>{{ $data9->designed2 }}</div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bikin-free-simple-landing-page-template/ -->
                {{ $data9->designed1 }}<a href="{{ $data9->designedlink }}">{{ $data9->designed2 }}</a>
            </div>
        </div>
        <div class="social-links text-center text-md-right pt-3 pt-md-0">
            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
    </div>
</footer><!-- End Footer -->