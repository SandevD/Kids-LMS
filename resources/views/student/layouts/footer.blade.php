<footer class="main-footer">
    <div class="main-footer__bg"></div>
    <!-- /.main-footer__bg -->
    <img src="{{asset('assets/images/shapes/footer-s-1-1.png')}}" class="main-footer__shape-1" alt="kidearn" />
    <img src="{{asset('assets/images/shapes/footer-s-1-2.png')}}" class="main-footer__shape-2" alt="kidearn" />
    <img src="{{asset('assets/images/shapes/footer-s-1-3.png')}}" class="main-footer__shape-3" alt="kidearn" />
    <img src="{{asset('assets/images/shapes/footer-s-1-4.png')}}" class="main-footer__shape-4" alt="kidearn" />
    <div class="main-footer__top">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xl-4">
                    <div class="footer-widget footer-widget--about">
                        <a href="index.html" class="footer-widget__logo">
                            <img src="{{ asset('storage/assets/images/lyceum_logo_white.png') }}" width="160" alt="Lyceum Logo" />
                        </a>
                        <ul class="list-unstyled footer-widget__info">
                            <li>
                                <i class="icon-location2 footer-widget__info__icon"></i>
                                <a href="#">No. 3/1, Raymond Road, Nugegoda</a>
                            </li>
                            <li>
                                <i class="icon-call footer-widget__info__icon"></i>
                                <a href="">(011) 282 2387</a>
                            </li>
                            <li>
                                <i class="icon-email1 footer-widget__info__icon"></i>
                                <a href="">info@lyceum.lk</a>
                            </li>
                        </ul>
                        <!-- /.list-unstyled -->
                        <div class="footer-widget__social">
                            <a href="https://twitter.com">
                                <i class="fab fa-twitter" aria-hidden="true"></i>
                                <span class="sr-only">Twitter</span>
                            </a>
                            <a href="https://facebook.com">
                                <i class="fab fa-facebook" aria-hidden="true"></i>
                                <span class="sr-only">Facebook</span>
                            </a>
                            <a href="https://pinterest.com">
                                <i class="fab fa-pinterest-p" aria-hidden="true"></i>
                                <span class="sr-only">Pinterest</span>
                            </a>
                            <a href="https://instagram.com">
                                <i class="fab fa-instagram" aria-hidden="true"></i>
                                <span class="sr-only">Instagram</span>
                            </a>
                        </div>
                        <!-- /.footer-widget__social -->
                    </div>
                    <!-- /.footer-widget -->
                </div>
                <!-- /.col-md-6 -->
                <div class="col-md-6 col-xl-2">
                    <div class="footer-widget footer-widget--links">
                        <h2 class="footer-widget__title">Links</h2>
                        <!-- /.footer-widget__title -->
                        <ul class="list-unstyled footer-widget__links">
                            <li><a href="{{ route('student.dashboard') }}">Dashboard</a></li>
                            <li><a href="{{ route('student.subjects') }}">Subjects</a></li>
                            <li>
                                <a href="">Rewards</a>
                            </li>
                            <li>
                                <a href="">Learderboard</a>
                            </li>
                            <li><a href="">Privacy Policy</a></li>
                        </ul>
                        <!-- /.list-unstyled footer-widget__links -->
                    </div>
                    <!-- /.footer-widget -->
                </div>
                <!-- /.col-md-6 -->
                <div class="col-md-6 col-xl-2">
                    <div class="footer-widget footer-widget--links-two">
                        <h2 class="footer-widget__title">Explore</h2>
                        <!-- /.footer-widget__title -->
                        <ul class="list-unstyled footer-widget__links">
                            <li><a href="https://www.lyceum.lk/about/">About</a></li>
                            <li><a href="https://www.lyceum.lk/news/">Our News</a></li>
                            <li><a href="https://www.lyceum.lk/contact/">Contact</a></li>
                            <li><a href="">FAQ</a></li>
                        </ul>
                        <!-- /.list-unstyled footer-widget__links -->
                    </div>
                    <!-- /.footer-widget -->
                </div>
                <!-- /.col-md-6 -->
                <div class="col-md-6 col-xl-4">
                    <div class="footer-widget footer-widget--gallery">
                        <h2 class="footer-widget__title">Our Partners</h2>
                        <!-- /.footer-widget__title -->
                        <ul class="list-unstyled footer-widget__gallery">
                            <li>
                                <a class="" href="https://zuse.lk" target="_blank">
                                    <img src="{{ asset('storage/assets/images/zuse_favicon.png')}}" alt="Zuse" />
                                </a>
                            </li>
                        </ul>
                        <!-- /.list-unstyled footer-widget__gallery -->
                    </div>
                    <!-- /.footer-widget -->
                </div>
                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.main-footer__top -->
    <div class="main-footer__bottom">
        <div class="container">
            <div class="main-footer__bottom__inner">
                <p class="main-footer__copyright">
                    &copy; Copyright <span class="dynamic-year"></span> Lyceum Kids Portal. All rights reserved
                    <br/>
                    Carefully handcrafted by Zuse Technologies PVT LTD
                </p>
            </div>
            <!-- /.main-footer__inner -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.main-footer__bottom -->
</footer>
<!-- /.main-footer -->
