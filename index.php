<!-- //header -->
	<?php include 'inc/header.php' ?>
	<?php include 'config/config.php' ?>
	<?php include 'lib/Database.php' ?>
	<?php include 'helper/Format.php' ?>
<!-- //header -->


<!-- header-bottom -->
	<div class="header-bottom">
		<div class="header-bottom-top">
			<ul>
				<li><a href="#" class="g"> </a></li>
				<li><a href="#" class="p"> </a></li>
				<li><a href="#" class="facebook"> </a></li>
				<li><a href="#" class="twitter"> </a></li>
			</ul>
		</div>
		<div class="clearfix"> </div>

<!-- banner -->
		<?php include 'inc/banner_top.php' ?>
<!-- //banner -->

<!-- banner-bottom -->
			<?php include 'inc/banner_buttom.php' ?>
<!-- //banner-bottom -->




<!-- blog -->
			<div class="blog">
				<div class="blog-left"><!--Start of left grid posts  -->
					<div class="blog-left-grid">

				
				<?php

				$db = new Database();

				//pagination
					$per_page_total_post = 3;
					if (isset($_GET["page"])) {
						$page = $_GET["page"];
					}else { 
						$page = 1;
					}
					$start_from = ($page-1) * $per_page_total_post;
				//pagination

				$query = "SELECT * FROM tbl_post limit $start_from, $per_page_total_post";

				$post = $db->select($query);
				if ($post) {
					while ($result = $post->fetch_assoc()) {

				?>
				<?php $fm = new Format(); ?>   <!--for chaning the default date format-->


						<div class="blog-left-grid-left">
							<h3><a href="single.php?id=<?php echo $result['id']; ?>"> <?php echo $result['title']; ?></a></h3>
							<p>by <span><?php echo $result['author']; ?></span> | <?php echo $fm->date($result['date']) ; ?> </p>
						</div>
						<div class="blog-left-grid-right">
							<a href="#" class="hvr-bounce-to-bottom non">20 Comments</a>
						</div>
						<div class="clearfix"> </div>
						<a href="single.html"><img src="images/<?php echo $result['image']; ?> " alt=" " class="img-responsive" style="height:50%;width:60%; "/></a>
						<?php echo $fm->testShorten($result['body']); ?>
						<div class="rd-mre">
						<a href="single.php?id=<?php echo $result['id']; ?>" class="hvr-bounce-to-bottom quod">Read More</a>
						</div>

<?php
} ?> <!--//ending while loop  -->

<!--pagination -->
<?php 
$query = "select * from tbl_post";
$result  = $db->select($query);
$total_rows = mysqli_num_rows($result);
$total_pages = ceil($total_rows/$per_page_total_post);
	echo "<nav>";
	echo "<ul class='pagination pagination-lg'><li class='active'><a href='index.php?page=1'>".'First Page'."</a></li>";
		for ($i=1; $i <= $total_pages ; $i++) { 
			echo "<li><a href='index.php?page=".$i."'>".$i."</a></li>";
		}
	?>
	<?php echo "<li class='active'><a href='index.php?page=$total_pages'>".'Last Page'."</a></li></ul>"?>
<!--pagination  -->

<?php } //ending if condition
else
{
	header("Location:404.php");
}
?>

						</div>
					</div><!--End of left grid posts  -->
 


					
				<div class="blog-right">
					<div class="sap_tabs">	
					<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
						  <ul class="resp-tabs-list">
							  <li class="resp-tab-item grid1" aria-controls="tab_item-0" role="tab"><span>Popular</span></li>
							  <li class="resp-tab-item grid2" aria-controls="tab_item-1" role="tab"><span>Recent</span></li>
							  <li class="resp-tab-item grid3" aria-controls="tab_item-2" role="tab"><span>Comments</span></li>
							  <div class="clear"></div>
						  </ul>				  	 
							<div class="resp-tabs-container">
								<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
									<div class="facts">
									  <div class="tab_list">
										<a href="images/7-.jpg" class="b-link-stripe b-animate-go   swipebox"  title="">
											<img src="images/7.jpg" alt=" " class="img-responsive" />
										</a>
									  </div>
									  <div class="tab_list1">
										<a href="#">excepturi sint occaecati</a>
										<p>June 30,2015 <span>Nam libero tempore, cum soluta nobis.</span></p>
									  </div>
									  <div class="clearfix"> </div>
									</div>
									<div class="facts">
									   <div class="tab_list">
										<a href="images/8-.jpg" class="b-link-stripe b-animate-go   swipebox"  title="">
											<img src="images/8.jpg" alt=" " class="img-responsive" />
										</a>
									  </div>
									  <div class="tab_list1">
										<a href="#">excepturi sint occaecati</a>
										<p>June 30,2015<span>Nam libero tempore, cum soluta nobis.</span></p>
									  </div>
									  <div class="clearfix"> </div>
									</div>
									<div class="facts">
									   <div class="tab_list">
										<a href="images/9-.jpg" class="b-link-stripe b-animate-go   swipebox"  title="">
											<img src="images/9.jpg" alt=" " class="img-responsive" />
										</a>
									  </div>
									  <div class="tab_list1">
										<a href="#">excepturi sint occaecati</a>
										<p>June 30,2015<span>Nam libero tempore, cum soluta nobis.</span></p>
									  </div>
									  <div class="clearfix"> </div>
									</div>
									<div class="facts">
									   <div class="tab_list">
										<a href="images/10-.jpg" class="b-link-stripe b-animate-go   swipebox"  title="">
											<img src="images/10.jpg" alt=" " class="img-responsive" />
										</a>
									  </div>
									  <div class="tab_list1">
										<a href="#">excepturi sint occaecati</a>
										<p>June 30,2015<span>Nam libero tempore, cum soluta nobis.</span></p>
									  </div>
									  <div class="clearfix"> </div>
									</div>
								</div>
								<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
									<div class="facts">
									  <div class="tab_list">
										<a href="images/8-.jpg" class="b-link-stripe b-animate-go   swipebox"  title="">
											<img src="images/8.jpg" alt=" " class="img-responsive" />
										</a>
									  </div>
									  <div class="tab_list1">
										<a href="#">excepturi sint occaecati</a>
										<p>June 30,2015<span>Nam libero tempore, cum soluta nobis.</span></p>
									  </div>
									  <div class="clearfix"> </div>
									</div>
									<div class="facts">
									   <div class="tab_list">
										<a href="images/9-.jpg" class="b-link-stripe b-animate-go   swipebox"  title="">
											<img src="images/9.jpg" alt=" " class="img-responsive" />
										</a>
									  </div>
									  <div class="tab_list1">
										<a href="#">excepturi sint occaecati</a>
										<p>June 30,2015<span>Nam libero tempore, cum soluta nobis.</span></p>
									  </div>
									  <div class="clearfix"> </div>
									</div>
									<div class="facts">
									   <div class="tab_list">
										<a href="images/10-.jpg" class="b-link-stripe b-animate-go   swipebox"  title="">
											<img src="images/10.jpg" alt=" " class="img-responsive" />
										</a>
									  </div>
									  <div class="tab_list1">
										<a href="#">excepturi sint occaecati</a>
										<p>June 30,2015<span>Nam libero tempore, cum soluta nobis.</span></p>
									  </div>
									  <div class="clearfix"> </div>
									</div>
									<div class="facts">
									   <div class="tab_list">
										<a href="images/7-.jpg" class="b-link-stripe b-animate-go   swipebox"  title="">
											<img src="images/7.jpg" alt=" " class="img-responsive" />
										</a>
									  </div>
									  <div class="tab_list1">
										<a href="#">excepturi sint occaecati</a>
										<p>June 30,2015<span>Nam libero tempore, cum soluta nobis.</span></p>
									  </div>
									  <div class="clearfix"> </div>
									</div>
								</div>
								<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
									<div class="facts">
									  <div class="tab_list">
										<a href="images/9-.jpg" class="b-link-stripe b-animate-go   swipebox"  title="">
											<img src="images/9.jpg" alt=" " class="img-responsive" />
										</a>
									  </div>
									  <div class="tab_list1">
										<a href="#">excepturi sint occaecati</a>
										<p>June 30,2015<span>Nam libero tempore, cum soluta nobis.</span></p>
									  </div>
									  <div class="clearfix"> </div>
									</div>
									<div class="facts">
									   <div class="tab_list">
										<a href="images/10-.jpg" class="b-link-stripe b-animate-go   swipebox"  title="">
											<img src="images/10.jpg" alt=" " class="img-responsive" />
										</a>
									  </div>
									  <div class="tab_list1">
										<a href="#">excepturi sint occaecati</a>
										<p>June 30,2015<span>Nam libero tempore, cum soluta nobis.</span></p>
									  </div>
									  <div class="clearfix"> </div>
									</div>
									<div class="facts">
									   <div class="tab_list">
										<a href="images/7-.jpg" class="b-link-stripe b-animate-go   swipebox"  title="">
											<img src="images/7.jpg" alt=" " class="img-responsive" />
										</a>
									  </div>
									  <div class="tab_list1">
										<a href="#">excepturi sint occaecati</a>
										<p>June 30,2015<span>Nam libero tempore, cum soluta nobis.</span></p>
									  </div>
									  <div class="clearfix"> </div>
									</div>
									<div class="facts">
									   <div class="tab_list">
										<a href="images/8-.jpg" class="b-link-stripe b-animate-go   swipebox"  title="">
											<img src="images/8.jpg" alt=" " class="img-responsive" />
										</a>
									  </div>
									  <div class="tab_list1">
										<a href="#">excepturi sint occaecati</a>
										<p>June 30,2015<span>Nam libero tempore, cum soluta nobis.</span></p>
									  </div>
									  <div class="clearfix"> </div>
									</div>
								</div>
							</div>
						 <script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
							<script type="text/javascript">
								$(document).ready(function () {
									$('#horizontalTab').easyResponsiveTabs({
										type: 'default', //Types: default, vertical, accordion           
										width: 'auto', //auto or any width like 600px
										fit: true   // 100% fit in a container
									});
								});
							   </script>
						<link rel="stylesheet" href="css/swipebox.css">
						<script src="js/jquery.swipebox.min.js"></script> 
							<script type="text/javascript">
								jQuery(function($) {
									$(".swipebox").swipebox();
								});
							</script>
					</div>
					</div>
					<div class="newsletter">
						<h3>Subscribe To Our Newsletter</h3>
						<form>
							<input type="text" value="Email Address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email Address';}" required="">
							<input type="submit" value="Send">
						</form>
					</div>
					<div class="four-fig">
						<div class="four-fig1">
							<a href="images/11-.jpg" class="b-link-stripe b-animate-go   swipebox"  title="">
								<img src="images/11.jpg" class="img-responsive" alt=" " />
							</a>
						</div>
						<div class="four-fig1">
							<a href="images/14-.jpg" class="b-link-stripe b-animate-go   swipebox"  title="">
								<img src="images/14.jpg" class="img-responsive" alt=" " />
							</a>
						</div>
						<div class="four-fig1">
							<a href="images/10-.jpg" class="b-link-stripe b-animate-go   swipebox"  title="">
								<img src="images/21.jpg" class="img-responsive" alt=" " />
							</a>
						</div>
						<div class="four-fig1">
							<a href="images/8-.jpg" class="b-link-stripe b-animate-go   swipebox"  title="">
								<img src="images/22.jpg" class="img-responsive" alt=" " />
							</a>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="pgs">
						<h3>Pages</h3>
						<ul>
							<li><a href="#">doloribus asperiores repellat</a></li>
							<li><a href="#">Itaque earum rerum hic tenetur</a></li>
							<li><a href="#">deserunt mollitia laborum et dolorum</a></li>
							<li><a href="#">facilis est et expedita distinctio</a></li>
							<li><a href="#">occaecati cupiditate non provident</a></li>
							<li><a href="#">deserunt mollitia laborum et dolorum</a></li>
						</ul>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
<!-- //blog -->
	</div>
<!-- //header-bottom -->
		</div>
	</div>
<!-- //banner-body -->


<!-- footer -->
	<?php include 'inc/footer.php' ?>
<!-- footer -->