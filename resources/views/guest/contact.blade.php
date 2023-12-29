@extends('guest.layouts.master')
@push('style')
@endpush

@section('content')
<section class="page-header">
    <div class="page-header__bg"></div>
    <!-- /.page-header__bg -->
    <div class="container">
        <h2 class="page-header__title">Contact</h2>
        <ul class="kidearn-breadcrumb list-unstyled">
            <li><a href="index.html">Home</a></li>
            <li><span>Contact</span></li>
        </ul><!-- /.thm-breadcrumb list-unstyled -->
    </div><!-- /.container -->
</section><!-- /.page-header -->

<section class="contact-one">
	<div class="container">
		<div class="sec-title text-center">
	
	<h6 class="sec-title__tagline">Contact with us</h6><!-- /.sec-title__tagline -->
	
	<h3 class="sec-title__title">Feel free to contact our staff <br> anytime</h3><!-- /.sec-title__title -->
</div><!-- /.sec-title -->
		<form class="contact-one__form contact-form-validated form-one" action="inc/sendemail.php">
			<div class="form-one__group">
				<div class="form-one__control ">
					<input type="text" name="name" placeholder="Your name">
				</div><!-- /.form-one__control  -->
				<div class="form-one__control ">
					<input type="email" name="email" placeholder="Email address">
				</div><!-- /.form-one__control  -->
				<div class="form-one__control ">
					<input type="text" name="phone" placeholder="Your phone">
				</div><!-- /.form-one__control  -->
				<div class="form-one__control ">
					<div class="form-one__control__select">
						<label class="sr-only" for="language-select">Select Grade</label>
						<!-- /#language-select.sr-only -->
						<select class="selectpicker" id="language-select">
							<option value="Select Grades">Select Grade</option>
							<option value="Select Grade 1">Grade 1</option>
							<option value="Select Grade 2">Grade 2</option>
							<option value="Select Grade 3">Grade 3</option>
							<option value="Select Grade 4">Grade 4</option>
							<option value="Select Grade 5">Grade 5</option>
						</select>
					</div><!-- /.main-menu__language -->

				</div><!-- /.form-one__control  -->
				<div class="form-one__control form-one__control--full">
					<textarea name="message" placeholder="Write  a message"></textarea><!-- /# -->
				</div><!-- /.form-one__control -->
				<div class="form-one__control form-one__control--full text-center">
					<button type="submit" class="kidearn-btn kidearn-btn--xl"><span>Send a Message</span></button>
				</div><!-- /.form-one__control -->
			</div><!-- /.form-one__group -->
		</form>
	</div><!-- /.container -->
</section><!-- /.contact-one -->
<section class="contact-info-one">
	<div class="container">
		<div class="contact-info-one__inner">
			<div class="row">
				<div class="col-md-12 col-lg-4">
					<div class="contact-info-one__item">
						<i class="icon-telephone contact-info-one__icon"></i>
						<p class="contact-info-one__text">Have any question?</p>
						<h3 class="contact-info-one__title">
							<a href="tel:+23(000)-8050">Free 0112 822 387</a>
						</h3><!-- /.contact-info-one__title -->
					</div><!-- /.contact-info-one__item -->
				</div><!-- /.col-md-12 -->
				<div class="col-md-12 col-lg-4">
					<div class="contact-info-one__item" style="--accent-color: #2390FF;">
						<i class="icon-email contact-info-one__icon"></i>
						<p class="contact-info-one__text">Send Email</p>
						<h3 class="contact-info-one__title">
							<a href="mailto:info@lyceum.lk">info@lyceum.lk</a>
						</h3><!-- /.contact-info-one__title -->
					</div><!-- /.contact-info-one__item -->
				</div><!-- /.col-md-12 -->
				<div class="col-md-12 col-lg-4">
					<div class="contact-info-one__item" style="--accent-color: #75C137;">
						<i class="icon-location-fill contact-info-one__icon"></i>
						<p class="contact-info-one__text">Visit Anytime</p>
						<h3 class="contact-info-one__title">
							<a href="#">No 3, 1 Raymond Rd, Nugegoda</a>
						</h3><!-- /.contact-info-one__title -->
					</div><!-- /.contact-info-one__item -->
				</div><!-- /.col-md-12 -->
			</div><!-- /.row -->
		</div><!-- /.contact-info-one__inner -->
	</div><!-- /.container -->
</section><!-- /.contact-info-one -->

<section class="contact-map">
	<div class="container-fluid">
		<div class="google-map google-map__contact">
  <iframe title="template google map"
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13714.046563694159!2d79.87397164543277!3d6.873819882045601!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25a66fffffffb%3A0x73f5d2e7cc774e61!2sLyceum%20International%20School!5e0!3m2!1sen!2slk!4v1696238594192!5m2!1sen!2slk"
    class="map__contact" allowfullscreen></iframe>
</div>
<!-- /.google-map -->
	</div><!-- /.container-fluid -->
</section><!-- /.contact-map -->
@endsection

@push('script')
@endpush
