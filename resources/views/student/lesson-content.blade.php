@extends('student.layouts.master')

@push('style')
    <style>
        .video-custom__btn {
            position: relative;
            z-index: 2;
            width: 100%;
        }

        .video-custom__btn img {
            width: 100%;
            height: auto;
        }

        .video-custom__btn .video-popup {
            width: 79px;
            height: 79px;
            background-color: rgba(var(--kidearn-black-rgb, 11, 32, 56), 0.53);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            position: absolute;
            z-index: 2;
            left: 0;
            right: 0;
            bottom: 0;
            top: 0;
            margin: auto;
            text-align: center;
            font-size: 32px;
            letter-spacing: -6px;
            color: var(--kidearn-white, #fff);
            transform: scale(1);
            transition: 400ms ease;
        }

        @media (max-width: 767px) {
            .video-custom__btn .video-popup {
                width: 60px;
                height: 60px;
                font-size: 25px;
            }
        }

        .video-custom__btn .video-popup:hover {
            transform: scale(1.1);
        }
    </style>
@endpush

@section('content')
    <section class="programs-details">
        <div class="container">
            <div class="row gutter-y-60">
                <div class="col-md-12 col-lg-8">
                    <div class="programs-details__image ">
                        <div class="video-custom__btn">

                            <img src="{{ asset('storage/' . $content->image_path) }}" alt="thumbnail_image" />
                            <a href="{{ asset('storage/' . $content->video_path) }}" class="video-popup">
                                <i class="fa fa-play"></i>
                            </a>
                        </div>
                    </div>
                    <!-- /.programs-details__image -->
                    <h3 class="programs-details__title">{{ $content->name }}</h3>
                    <!-- /.programs-details__title -->
                    <p class="programs-details__text">
                        {!! $content->description !!}
                    </p>
                    <!-- /.programs-details__text -->
                    <p class="programs-details__text">
                    </p>
                    <!-- /.programs-details__text -->
                </div>
                <!-- /.col-md-12 col-lg-8 -->
                <div class="col-md-12 col-lg-4">
                    <div class="programs-details__info">
                        <h4 class="programs-details__info__title">{{ $content->name }}</h4>
                        <!-- /.programs-details__info__title -->
                        <p class="programs-details__info__text">
                            First 
                        </p>
                        <!-- /.programs-details__info__text -->
                        <ul class="list-unstyled programs-details__info__list">
                            <li>
                                <div class="programs-details__info__list__name">Lesson</div>
                                <div class="programs-details__info__list__text">
                                    {{ $content?->lesson?->name }}
                                </div>
                                <!-- /.programs-details__info__list__text -->
                            </li>
                            <li>
                                <div class="programs-details__info__list__name">Subject</div>
                                <div class="programs-details__info__list__text">
                                    {{ $content?->lesson?->subject?->name }}
                                </div>
                                <!-- /.programs-details__info__list__text -->
                            </li>
                            <li>
                                <div class="programs-details__info__list__name">Duration</div>
                                <div class="programs-details__info__list__text">
                                    45 Minutes
                                </div>
                                <!-- /.programs-details__info__list__text -->
                            </li>
                            <li>
                                <div class="programs-details__info__list__name">
                                    Additional Resources:
                                </div>
                                <div class="programs-details__info__list__text">
                                    PDF File Download
                                </div>
                                <!-- /.programs-details__info__list__text -->
                            </li>
                            <li>
                                <a href="contact.html" class="kidearn-btn kidearn-btn--xl">
                                    <span>Enroll Your Child</span>
                                </a>
                            </li>
                        </ul>
                        <!-- /.programs-details__info__list -->
                    </div>
                    <!-- /.programs-details__info -->
                </div>
                <!-- /.col-md-12 col-lg-4 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
@endsection

@push('script')
@endpush
