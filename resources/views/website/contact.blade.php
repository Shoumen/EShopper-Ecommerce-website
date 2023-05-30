@extends('layouts.website')

@section('content')

<head>
<title>Contact</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="OneTech shop project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{asset('contents/website')}}/styles/bootstrap4/bootstrap.min.css">
<link href="{{asset('contents/website')}}/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{asset('contents/website')}}/styles/contact_styles.css">
<link rel="stylesheet" type="text/css" href="{{asset('contents/website')}}/styles/contact_responsive.css">

</head>
@php
	   $basic=App\Models\Basic::where('basic_status',1)->where('basic_id',1)->firstOrFail();
	   $contactInfo=App\Models\ContactInformation::where('cont_status',1)->where('cont_id',1)->firstOrFail();
	@endphp
	<div class="contact_info">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					<div class="contact_info_container d-flex flex-lg-row flex-column justify-content-between align-items-between">

						<!-- Contact Item -->
						<div class="contact_info_item d-flex flex-row align-items-center justify-content-start">
							<div class="contact_info_image"><img src="images/contact_1.png" alt=""></div>
							<div class="contact_info_content">
								<div class="contact_info_title">Phone</div>
								<div class="contact_info_text">+88{{$contactInfo->cont_phone1}}</div>
							</div>
						</div>

						<!-- Contact Item -->
						<div class="contact_info_item d-flex flex-row align-items-center justify-content-start">
							<div class="contact_info_image"><img src="images/contact_2.png" alt=""></div>
							<div class="contact_info_content">
								<div class="contact_info_title">Email</div>
								<div class="contact_info_text">{{$contactInfo->cont_email1}}</div>
							</div>
						</div>

						<!-- Contact Item -->
						<div class="contact_info_item d-flex flex-row align-items-center justify-content-start">
							<div class="contact_info_image"><img src="images/contact_3.png" alt=""></div>
							<div class="contact_info_content">
								<div class="contact_info_title">Address</div>
								<div class="contact_info_text">{{$contactInfo->cont_add1}}</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Contact Form -->

	<div class="contact_form">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					<div class="contact_form_container">
						<div class="contact_form_title">Get in Touch</div>

						<form method="post" action="{{route('admin.contactus.submit')}}" id="contact_form">
							@csrf
							<div class="contact_form_inputs d-flex flex-md-row flex-column justify-content-between align-items-between">
								<input type="text" id="contact_form_name" class="contact_form_name input_field" placeholder="Your name" name="name" required="required" data-error="Name is required.">
								<input type="text" id="contact_form_email" class="contact_form_email input_field" placeholder="Your email" name="email" required="required" data-error="Email is required.">
								<input type="text" id="contact_form_phone" class="contact_form_phone input_field" placeholder="Your phone number"name="phone">
							</div>
							<div>
								<div class="contact_form_inputs d-flex flex-md-row flex-column justify-content-between align-items-between">
									<input type="text" id="contact_form_subject" class="form-control form_control" placeholder="Message Subject"name="subject">
								</div>
							</div>

							<div class="contact_form_text">
								<textarea id="contact_form_message" class="text_field contact_form_message" name="message" rows="4" placeholder="Message" name="message" required="required" data-error="Please, write us a message."></textarea>
							</div>

							<div class="contact_form_button">
								<button type="submit" class="button contact_submit_button">Send Message</button>
							</div>
						</form>

					</div>
				</div>
			</div>
		</div>
		<div class="panel"></div>
	</div>

	<!-- Map -->

	<div class="contact_map">
		<div id="google_map" class="google_map">
			<div class="map_container">
				<div id="map"></div>
			</div>
		</div>
	</div>

	

<script src="{{asset('contents/website')}}/js/jquery-3.3.1.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="{{asset('contents/website')}}/js/contact_custom.js"></script>

@endsection