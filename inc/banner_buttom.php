<div class="banner-bottom">
				<ul id="flexiselDemo1">			
					<li>
						<div class="banner-bottom-grid">
							<img src="images/1.jpg" alt=" " class="img-responsive" />
							<p>At vero eos et accusamus et iusto odio dignissimos ducimus 
								qui blanditiis praesentium voluptatum deleniti atque corrupti 
								quos dolores et quas molestias excepturi sint occaecati
								cupiditate non provident</p>
							<div class="more">
								<a href="single.html" class="hvr-bounce-to-bottom sint">Read More</a>
							</div>
						</div>
					</li>
					<li>
						<div class="banner-bottom-grid">
							<img src="images/2.jpg" alt=" " class="img-responsive" />
							<p>At vero eos et accusamus et iusto odio dignissimos ducimus 
								qui blanditiis praesentium voluptatum deleniti atque corrupti 
								quos dolores et quas molestias excepturi sint occaecati
								cupiditate non provident</p>
							<div class="more">
								<a href="single.html" class="hvr-bounce-to-bottom sint">Read More</a>
							</div>
						</div>
					</li>
					<li>
						<div class="banner-bottom-grid">
							<img src="images/3.jpg" alt=" " class="img-responsive" />
							<p>At vero eos et accusamus et iusto odio dignissimos ducimus 
								qui blanditiis praesentium voluptatum deleniti atque corrupti 
								quos dolores et quas molestias excepturi sint occaecati
								cupiditate non provident</p>
							<div class="more">
								<a href="single.html" class="hvr-bounce-to-bottom sint">Read More</a>
							</div>
						</div>
					</li>
				</ul>
				<script type="text/javascript">
							$(window).load(function() {
								$("#flexiselDemo1").flexisel({
									visibleItems: 3,
									animationSpeed: 1000,
									autoPlay: false,
									autoPlaySpeed: 3000,    		
									pauseOnHover: true,
									enableResponsiveBreakpoints: true,
									responsiveBreakpoints: { 
										portrait: { 
											changePoint:480,
											visibleItems: 1
										}, 
										landscape: { 
											changePoint:640,
											visibleItems:2
										},
										tablet: { 
											changePoint:768,
											visibleItems: 3
										}
									}
								});
								
							});
					</script>
					<script type="text/javascript" src="js/jquery.flexisel.js"></script>
			</div>