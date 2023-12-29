@extends('student.layouts.master')

@push('style')
@endpush

@section('content')
    <section class="event-faqs">
        <div class="sec-title text-center">
            <h6 class="sec-title__tagline">Learn, Grow, Succeed</h6>
            <!-- /.sec-title__tagline -->

            <h3 class="sec-title__title">
                Science - All Lessons - {{ auth()->user()->grade->name }}
            </h3>
            <!-- /.sec-title__title -->
        </div>
        <div class="container">
            <div class="row gutter-y-60">
                <!-- /.col-md-12 -->
                <div class="col-12">
                    <div class="event-faqs__accordion kidearn-accrodion" data-grp-name="kidearn-accrodion">
                        @forelse ($lessons as $lesson)
                            <div class="accrodion" style="--accent-color: #f25334">
                                <div class="accrodion-title" style="border: 1px solid #000; border-radius: 10px;">
                                    <h4>

                                        {{ $lesson->name }}
                                        <span class="accrodion-title__icon"></span><!-- /.accrodion-title__icon -->
                                    </h4>
                                </div>
                                <!-- /.accordian-title -->
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <div class="container">
                                            <div class="row gutter-y-30">
                                                @forelse ($lesson->contents as $content)
                                                    <a href="{{ route('lesson.content', $content->id) }}">
                                                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                                                            <div class="service-one__item service-one__item--order"
                                                                style="--accent-color: #26a6a1">
                                                                <div class="service-one__item__image-wrapper">
                                                                    <div class="service-one__item__image kidearn-tilt"
                                                                        data-tilt-options='{ "glare": false, "maxGlare": 0, "maxTilt": 7, "speed": 700, "scale": 1 }'>
                                                                        <img src="https://picsum.photos/seed/536/250/234"
                                                                            alt="kidearn" />
                                                                    </div>
                                                                    <div class="service-one__item__ball"></div>
                                                                </div>
                                                                <h4 class="service-one__item__title"
                                                                    style="margin-bottom: 1rem;">{{ $content->name }}
                                                                </h4>
                                                            </div>
                                                        </div>
                                                    </a>
                                                @empty
                                                @endforelse
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.accordian-content -->
                                </div>
                            </div>
                        @empty
                        @endforelse
                    </div>
                </div>
                <!-- /.col-md-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
@endsection

@push('script')
@endpush
