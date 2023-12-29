@extends('student.layouts.master')

@push('style')
@endpush

@section('content')
    <section class="video-two">
        <div class="video-two__bg" style="background-image: url(assets/images/shapes/video-bg-2.png)"></div>
        <div class="video-two__shape kidearn-splax"
            data-para-options='{"orientation": "left", "scale": 1.6, "delay": ".6", "transition": "cubic-bezier(0,0,0,1)", "overflow": true}'>
            <img src="assets/images/shapes/video-2-shape-1.png" alt="kidearn" />
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 wow fadeInLeft" data-wow-delay="100ms">
                    <div class="video-two__content">
                        <h3 class="video-two__content__title">
                            Subjects: Where Minds Ignite!
                        </h3>
                        <a href="#subjects" class="kidearn-btn">
                            <span>View All Subjects</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="video-two__btn-shape wow fadeInUp" data-wow-delay="200ms">
                        <div class="video-two__btn kidearn-tilt"
                            data-tilt-options='{ "glare": false, "maxGlare": 0, "maxTilt": 5, "speed": 700, "scale": 1 }'>
                            <img src="assets/images/backgrounds/video-bg-2.jpg" alt="kidearn" />
                            <a href="https://www.youtube.com/watch?v=0MuL8fd3pb8" class="video-popup">
                                <i class="fa fa-play"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.page-header -->

    <section class="program-one">
        <div class="program-one__bg kidearn-splax"
            data-para-options='{
		"orientation": "up",
		"scale": 2.5,
		"overflow": true
		}'>
            <img src="assets/images/shapes/program-bg-shape.png" alt="kidearn" />
        </div>
        <div class="container">
            {{-- <div class="sec-title text-center">
                <h6 class="sec-title__tagline">Our Programs</h6>
                <h3 class="sec-title__title">
                    We meet kids at their level<br />
                    regardless of their age
                </h3>
            </div> --}}
            <!-- /.sec-title -->
            <div class="row">
                @forelse ($subjects as $subject)
                    <div class="col-lg-3 col-md-6" id="subjects">
                        <div class="program-one__item wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms"
                            style="--accent-color: #f25334">
                            <div class="program-one__item__shape">
                                <svg class="program-one__item__shape-one" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 32 43">
                                    <path
                                        d="M11.0817 6.98831C-9.7901 23.3302 2.35379 52.1177 18.5511 39.5735C34.7647 27.0458 39.1287 -14.9434 11.0817 6.98831Z" />
                                </svg>
                                <svg class="program-one__item__shape-two" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 15 21">
                                    <path
                                        d="M5.28824 3.20713C-4.67276 11.0063 1.12287 24.745 8.85298 18.7583C16.5909 12.7795 18.6736 -7.25972 5.28824 3.20713Z" />
                                </svg>
                            </div>
                            <div class="program-one__item__bg"></div>
                            <div class="program-one__item__image">
                                <img src="https://fastly.picsum.photos/id/35/536/354.jpg?hmac=jp_Ypjavu2-qfJva-2dR-Mwusv5WWX1CqL5j_o0rPbg" alt="Toddler" />
                            </div>
                            <!-- /.program-one__item__image -->
                            <div class="program-one__item__content">
                                <h3 class="program-one__item__title">
                                    <a href="programs-d-toddler.html">{{ $subject->name }}</a>
                                </h3>
                                <!-- /.program-one__item__title -->
                                <div class="program-one__item__age" style="font-size: 20px !important;">Grade {{ auth()->user()->grade_id }}</div>
                                <!-- /.program-one__item__age -->
                                <a class="program-one__item__rm" href="{{ route('student.subject', $subject->id) }}"><span
                                        class="icon-right-arrow"></span></a><!-- /.program-one__item__text -->
                            </div>
                            <!-- /.program-one__item__content -->
                        </div>
                        <!-- /.program-one__item__one -->
                    </div>
                @empty
                @endforelse
            </div>
        </div>
    </section>
@endsection

@push('script')
@endpush
