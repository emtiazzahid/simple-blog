<div class="banner">
<!-- Slider-starts-Here -->
				<script src="js/responsiveslides.min.js"></script>
				 <script>
				    // You can also use "$(window).load(function() {"
				    $(function () {
				      // Slideshow 4
				      $("#slider3").responsiveSlides({
				        auto: true,
				        pager: false,
				        nav: true,
				        speed: 500,
				        namespace: "callbacks",
				        before: function () {
				          $('.events').append("<li>before event fired.</li>");
				        },
				        after: function () {
				          $('.events').append("<li>after event fired.</li>");
				        }
				      });
				
				    });
				  </script>
			<!--//End-slider-script -->
				<div  id="top" class="callbacks_container wow fadeInUp" data-wow-delay="0.5s">
					<ul class="rslides" id="slider3">
						<li>
							<div class="banner-inf">
								<h3>soluta nobis est eligendi cumque</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In lobortis, ante interdum vehicula pretium, dui enim porta
								lectus, non euismod tortor ante eu libero</p>
								<a href="single.html">See More</a>
							</div>
						</li>
						<li>
							<div class="banner-inf">
								<h3>euismod nobis est eligendi cumque</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In lobortis, ante interdum vehicula pretium, dui enim porta
								lectus, non euismod tortor ante eu libero</p>
								<a href="single.html">See More</a>
							</div>
						</li>
						<li>
							<div class="banner-inf">
								<h3>tortor nobis est eligendi cumque</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In lobortis, ante interdum vehicula pretium, dui enim porta
								lectus, non euismod tortor ante eu libero</p>
								<a href="single.html">See More</a>
							</div>
						</li>
					</ul>
				</div>
		</div>