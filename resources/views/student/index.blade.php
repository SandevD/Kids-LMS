@extends('student.layouts.master')

@push('style')
@endpush

@section('content')
    <section class="about-four">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 wow fadeInLeft" data-wow-delay="300ms">
                    <div class="about-four__image">
                        <div class="about-four__image__shape1">
                            <img src="{{ asset('assets/images/shapes/about-4-shape-1.png')}}" alt="kidearn" />
                        </div>
                        <div class="about-four__image__one kidearn-tilt"
                            data-tilt-options='{ "glare": false, "maxGlare": 0, "maxTilt": 3, "speed": 700, "scale": 1 }'>
                            <img src="{{ asset('storage/assets/images/subject_cover.jpg')}}" alt="kidearn" />
                            <div class="about-four__image__one-bottom"></div>
                        </div>
                        <div class="about-four__image__two wow fadeInUp" data-wow-delay="500ms">
                            <img src="{{ asset('storage/assets/images/grade_1.jpg')}}" alt="grade" />
                        </div>
                        <div class="about-four__image__bg-shape">
                            <img src="{{ asset('assets/images/shapes/about-4-shape-2.png')}}" alt="kidearn" />
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 wow fadeInRight" data-wow-delay="200ms">
                    <div class="about-four__content">
                        <div class="sec-title text-left">

                            <h6 class="sec-title__tagline">Welcome</h6><!-- /.sec-title__tagline -->

                            <h3 class="sec-title__title">Hi, {{ auth()->user()->name }}</h3>
                            <!-- /.sec-title__title -->
                        </div><!-- /.sec-title -->
                        <p class="about-four__content__text">
                            You are now logged in!
                        </p>
                        <div class="about-four__info" style="--accent-color: #F25334;">
                            <div class="about-four__info__icon"><span class="icon-trophy1"></span></div>
                            <h3 class="about-four__info__title">Reach Goals</h3>
                            <p class="about-four__info__text">Earn points and win rewards as you complete lessons.</p>
                        </div>
                        <div class="about-four__info" style="--accent-color: #2390FF;">
                            <div class="about-four__info__icon"><span class="icon-interest-rate"></span></div>
                            <h3 class="about-four__info__title">Productivity</h3>
                            <p class="about-four__info__text">Measure your success rates with the use of our analytics.</p>
                        </div>
                        <a href="{{ route('student.subjects') }}" class="kidearn-btn">
                            <span>View Subjects</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="cta-one cta-one--about-page">
        <div class="container">
            <div class="cta-one__inner">
                <div class="cta-one__shape1 kidearn-splax"
                    data-para-options='{"orientation": "right", "scale": 1.5, "delay": ".4", "transition": "cubic-bezier(0,0,0,1)", "overflow": true
        }'>
                    <img src="{{ asset('assets/images/shapes/cta-shape-1.png')}}" alt="kidearn" />
                </div>
                <div class="cta-one__shape2 kidearn-splax"
                    data-para-options='{"orientation": "down", "scale": 1.5, "delay": ".4", "transition": "cubic-bezier(0,0,0,1)", "overflow": true
        }'>
                    <img src="{{ asset('assets/images/shapes/cta-shape-2.png')}}" alt="kidearn" />
                </div>
                <div class="row">
                    <div class="col-lg-6 wow fadeInLeft" data-wow-delay="100ms">
                        <div class="cta-one__content">
                            <h3 class="cta-one__title">FAQ's<br/> All you need to know!</h3><!-- /.cta-one__title -->
                            <a href="about.html" class="kidearn-btn"><span>Read More</span></a>
                        </div><!-- /.cta-one__content -->
                    </div>
                    <div class="col-lg-6">
                        <div class="cta-one__one wow fadeInUp" data-wow-delay="300ms">
                            <img src="{{ asset('storage/assets/images/faq.jpg')}}" alt="kidearn" />
                            <div class="cta-one__one__text">All in<br> One</div>
                        </div>
                        <div class="cta-one__thumb">
                            <div class="cta-one__thumb__two"><img src="{{ asset('assets/images/shapes/cta-2.png')}}" alt="kidearn" />
                            </div>
                        </div><!-- /.cta-one__thumb -->
                    </div>
                </div>
            </div><!-- /.cta-one__inner -->
        </div><!-- /.container-fluid -->
    </section>
@endsection

@push('script')
@endpush
