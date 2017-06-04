<!DOCTYPE html>

<html class="no-js" lang="en">

	<head>
		<?php include_once 'head.php'; ?>
	</head>
	<body>

		<div style="clear:both; height:25px"></div>

		<div class="two columns">

			<div class="panel">

				<a href="index.php"><img src="images/logo.png" alt="desc" style="border:none; margin-bottom:25px" /></a>

				<ul class="nav-bar vertical">

					<li>
						<a href="index.php">Home</a>
					</li>

					<li class="has-flyout">
						<a href="#">Example Pages</a><a href="#" class="flyout-toggle"></a>

						<ul class="flyout">

							<li class="has-flyout">
								<a href="blog_single.php">Blog Single Page</a>
							</li>
							<li class="has-flyout">
								<a href="contact.php">Contact Page</a>
							</li>

						</ul>

					</li>

					<li class="">
						<a href="portfolio.php">Portfolio Gallery</a>
					</li>
					<li class="">
						<a href="tiles.php">Tiles</a>
					</li>

				</ul>

			</div>

		</div>

		<!-- page wrap -->
		<div class="ten columns">
			<!-- page wrap -->

			<div id="container">

				<!-- photo -->
				<div class='box_fluid col_fluid'>
					<a href="#"><img src='images/pin1.jpg' alt="desc" ></a>
					<div class='box_fluid_inner'>
						<h4><strong>Adipiscing Elit</strong></h4>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vel ligula vel felis pretium gravida...
						</p>
					</div>
					<div class="box_comment">
						<p>
							Amazing Picture!
					</div>
					<div class="box_comment">
						<p>
							Love this!
					</div>
					<div class="box_comment">
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit?
					</div>
				</div>

				<!-- photo -->
				<div class='box_fluid col_fluid'>
					<a href="#"><img src='images/pin1.jpg' alt="desc" /></a>
					<div class='box_fluid_inner'>
						<h4><strong>Adipiscing Elit</strong></h4>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vel ligula vel felis pretium gravida...
						</p>
					</div>
					<div class="box_comment">
						<p>
							Amazing Picture!
					</div>
					<div class="box_comment">
						<p>
							Love this!
					</div>
					<div class="box_comment">
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit?
					</div>
				</div>

				<!-- photo -->
				<div class='box_fluid col_fluid'>
					<a href="#"><img src='images/pin1.jpg' alt="desc" /></a>
					<div class='box_fluid_inner'>
						<h4><strong>Adipiscing Elit</strong></h4>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vel ligula vel felis pretium gravida...
						</p>
					</div>
					<div class="box_comment">
						<p>
							Amazing Picture!
					</div>
					<div class="box_comment">
						<p>
							Love this!
					</div>
					<div class="box_comment">
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit?
					</div>
				</div>

			</div>
			<!-- end Masonry container -->

			<script type="text/javascript">
				//<![CDATA[
				$('ul#menu3').nav - bar();
				//]]>
			</script>

		</div>
		<!-- end page wrap) -->
		<!-- Included JS Files (Compressed) -->
		<script src="javascripts/foundation.min.js" type="text/javascript"></script>
		<!-- Initialize JS Plugins -->
		<script src="javascripts/app.js" type="text/javascript"></script>
		<!-- Masonry for galleries -->
		<script src="javascripts/masonry.js" type="text/javascript"></script>
		<script type="text/javascript">
			//<![CDATA[
			$(function() {

				$('#container').masonry({
					itemSelector : '.box_fluid',
					// set columnWidth a fraction of the container width
					columnWidth : function(containerWidth) {
						return containerWidth / 3;
						isResizable:true
					}
				});

			});
			//]]>
		</script>
		<!-- END Masonry -->
	</body>
</html>