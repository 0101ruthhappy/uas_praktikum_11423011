@extends('layout.template')

@section('title', 'DEL Badminton')

@section('header5', 'header5')

@section('active-tentang', 'active')

@section('content')
    <div class="back">
        <h2>Tentang</h2>
    </div>
    <div class="sap_tabs">
        <div class="container">

            <div style="display: flex; justify-content: center; align-items:center;">

                <img src="{{ asset('assets2/images/5.jpg') }}" class="img-responsive" style="width: 400px; height:300px;" alt="" />
                <img src="{{ asset('assets2/images/6.jpg') }}" class="img-responsive" style="width: 400px; height:300px;" alt="" />
                <img src="{{ asset('assets2/images/7.jpg') }}" class="img-responsive" style="width: 400px; height:300px;" alt="" />
                <img src="{{ asset('assets2/images/8.jpg') }}" class="img-responsive" style="width: 400px; height:300px;" alt="" />
            
            </div>

        </div>
    </div>
    <!---->
	<!---->
	<div class="container" style="margin-bottom: 30px;">
		<div class="contact">
            
			<div class=" contact-top-in">
				<h3>View On Map</h3>
				<div class="map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14749.309104373695!2d99.13697320872467!3d2.38237384438265!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x302e00fd478a27a7%3A0x6f264b5a9504af8f!2sSitoluama%2C%20Laguboti%2C%20Toba%2C%20North%20Sumatra!5e0!3m2!1sen!2sid!4v1715844785765!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
						frameborder="0" style="border:0" allowfullscreen></iframe>

				</div>

				<p><i class="far fa-map"></i> Sitoluama, Laguboti, Toba, Sumatera Utara </p>

			</div>
		</div>
	</div>

@endsection