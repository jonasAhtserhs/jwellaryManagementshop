@extends('home/layout/master')
@section('content')

<div class="banner">
		<div class="container">
			  <script src="js/responsiveslides.min.js"></script>
  <script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	nav: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>


			<div  id="top" class="callbacks_container">
			<ul class="rslides" id="slider">
			    <li>
					
						<div class="banner-text">
							<h3>Lorem Ipsum is not simply dummy  </h3>
						<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor .</p>
						<a href="single.html">Learn More</a>
						</div>
				
				</li>
				<li>
					
						<div class="banner-text">
							<h3>There are many variations </h3>
						<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor .</p>
												<a href="single.html">Learn More</a>

						</div>
					
				</li>
				<li>
						<div class="banner-text">
							<h3>Sed ut perspiciatis unde omnis</h3>
						<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor .</p>
								<a href="single.html">Learn More</a>

						</div>
					
				</li>
			</ul>
		</div>

	</div>
	</div>
	<!-- *********************************** BANNER TEXT ENDS HERERE *******************-->

<!--***************************************CONTENT SECTION GOES HERE ***********************************************-->
<div class="content">
	<div class="container">
	<div class="content-top">
		<h1>NEW RELEASED</h1>
		<div class="grid-in">
			<div class="col-md-4 grid-top">
				<a href="single.html" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="{{ asset('site/images/pi.jpg') }}" alt="">
							<div class="b-wrapper">
									<h3 class="b-animate b-from-left    b-delay03 ">
										<span>T-Shirt</span>	
									</h3>
								</div>
				</a>
		

			<p><a href="single.html">Contrary to popular</a></p>
			</div>
			<div class="col-md-4 grid-top">
				<a href="single.html" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="{{asset('site/images/pi1.jpg') }}" alt="">
					<div class="b-wrapper">
									<h3 class="b-animate b-from-left    b-delay03 ">
										<span>Shoe</span>	
									</h3>
								</div>
				</a>
			<p><a href="single.html">classical Latin</a></p>
			</div>
			<div class="col-md-4 grid-top">
				<a href="single.html" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="{{asset('site/images/pi2.jpg') }}" alt="">
					<div class="b-wrapper">
									<h3 class="b-animate b-from-left    b-delay03 ">
										<span>Bag</span>	
									</h3>
								</div>
				</a>
			<p><a href="single.html">undoubtable</a></p>
			</div>
					<div class="clearfix"> </div>
		</div>
		<div class="grid-in">
			<div class="col-md-4 grid-top">
				<a href="single.html" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="{{asset('site/images/pi3.jpg') }}" alt="">
					<div class="b-wrapper">
									<h3 class="b-animate b-from-left    b-delay03 ">
										<span>Shirt</span>	
									</h3>
								</div>
				</a>
			<p><a href="single.html">suffered alteration</a></p>
			</div>
			<div class="col-md-4 grid-top">
				<a href="single.html" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="{{asset('site/images/pi4.jpg') }} " alt="">
					<div class="b-wrapper">
									<h3 class="b-animate b-from-left    b-delay03 ">
										<span>Bag</span>	
									</h3>
								</div>
				</a>
			<p><a href="single.html">Content here</a></p>
			</div>
			<div class="col-md-4 grid-top">
				<a href="single.html" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="{{asset('site/images/pi5.jpg') }}" alt="">
					<div class="b-wrapper">
									<h3 class="b-animate b-from-left    b-delay03 ">
										<span>Shoe</span>	
									</h3>
								</div>
				</a>
			<p><a href="single.html">readable content</a></p>
			</div>
					<div class="clearfix"> </div>
		</div>
	</div>
	<div class="content-bottom">
		<ul>
			<li><a href="#"><img class="img-responsive" src="{{asset('site/images/lo.png') }}" alt=""></a></li>
			<li><a href="#"><img class="img-responsive" src="{{asset('site/images/lo1.png') }}" alt=""></a></li>
			<li><a href="#"><img class="img-responsive" src="{{asset('site/images/lo2.png') }}" alt=""></a></li>
			<li><a href="#"><img class="img-responsive" src="{{asset('site/images/lo3.png') }}" alt=""></a></li>
			<li><a href="#"><img class="img-responsive" src="{{asset('site/images/lo4.png') }}" alt=""></a></li>
			<li><a href="#"><img class="img-responsive" src="{{asset('site/images/lo5.png') }}" alt=""></a></li>
		<div class="clearfix"> </div>
		</ul>
	</div>
</div>

@stop