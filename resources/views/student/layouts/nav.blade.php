<header class="main-header sticky-header sticky-header--normal" style="z-index: 99 !important;">
    <div class="container-fluid">
        <div class="main-header__inner">
            <div class="main-header__logo">
                <a href="index.html">
                    <img src="{{ asset('storage/assets/images/lyceum_logo_512.png') }}" alt="Kidearn HTML"
                        width="160" />
                </a>
            </div>
            <!-- /.main-header__logo -->

            <nav class="main-header__nav main-menu">
                <ul class="main-menu__list">
                    <li>
                        <a href="{{ route('guest.home') }}">Home</a>
                    </li>
                    <li>
                        <a href="{{ route('student.subjects') }}">Subjects</a>
                    </li>
                    <li>
                        <a href="{{ route('dashboard') }}">Points</a>
                    </li>
                    <li>
                        <a href="{{ route('dashboard') }}">Awards</a>
                    </li>
                    <li>
                        <a href="{{ route('profile.edit') }}">Profile</a>
                    </li>
                    <li>
                        <a href="{{ route('profile.edit') }}">Contact Us</a>
                    </li>
                </ul>
            </nav>
            <!-- /.main-header__nav -->
            <div class="main-header__right">
                <div class="mobile-nav__btn mobile-nav__toggler">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <!-- /.mobile-nav__toggler -->
                <a class="main-header__call">
                    <i class="icon-trophy main-header__call__icon"></i>
                    <span class="main-header__call__content">
                        <span class="main-header__call__number">Total Points</span>
                        <!-- /.main-header__call__number -->
                        <span class="main-header__call__text">1500</span><!-- /.main-header__call__text -->
                    </span><!-- /.main-header__call__content -->
                </a>
                <a href="contact.html" class="kidearn-btn main-header__btn">
                    <span>Log Out</span> </a><!-- /.thm-btn main-header__btn -->
            </div>
            <!-- /.main-header__right -->
        </div>
        <!-- /.main-header__inner -->
    </div>
    <!-- /.container-fluid -->
</header>
<!-- /.main-header -->
