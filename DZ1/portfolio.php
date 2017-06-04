<!DOCTYPE html>

<html class="no-js" lang="en">

<head>
	<?php include_once 'head.php'; ?>
</head>

<body>

<!-- ######################## Main Menu ######################## -->

	<?php include_once 'mainmenu.php'; ?>
      
      
<!-- ######################## Header ######################## -->
        
        <header>
              <h1 class="welcome_text">Responsive Masonry Portfolio</h1>    
        </header>
      
      
<!-- ######################## Gallery Section ######################## -->
      
      <section class="section_light">
      
      <div class="row">
 
        
		<div id="container">
        
			<!-- photo -->
			<div class='box photo col2'>
				<a href="#"><img src='images/prod_thumb.png' alt="desc" /></a>
                <h4 style="text-align:center"><strong>Job Name</strong></h4>
                <p><small>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vel ligula vel felis pretium gravida...</small></p>
                <p style="text-align:center"><a href="#" class="button small radius">Details &raquo;</a></p>
			</div>
            
			<!-- photo -->
			<div class='box photo col2'>
				<a href="#"><img src='images/prod_thumb.png' alt="desc" /></a>
                <h4 style="text-align:center"><strong>Job Name</strong></h4>
                <p><small>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vel ligula vel felis pretium gravida...</small></p>
                <p style="text-align:center"><a href="#" class="button small radius">Details &raquo;</a></p>
			</div>
            
			<!-- photo -->
			<div class='box photo col2'>
				<a href="#"><img src='images/prod_thumb.png' alt="desc" /></a>
                <h4 style="text-align:center"><strong>Job Name</strong></h4>
                <p><small>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vel ligula vel felis pretium gravida...</small></p>
                <p style="text-align:center"><a href="#" class="button small radius">Details &raquo;</a></p>
			</div>
            
			<!-- photo -->
			<div class='box photo col2'>
				<a href="#"><img src='images/prod_thumb.png' alt="desc" /></a>
                <h4 style="text-align:center"><strong>Job Name</strong></h4>
                <p><small>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vel ligula vel felis pretium gravida...</small></p>
                <p style="text-align:center"><a href="#" class="button small radius">Details &raquo;</a></p>
			</div>


		</div> <!-- end Masonry container -->
		</div>
        </section>
        
		<!-- end section -->
		
<!-- ######################## Footer ######################## -->  
      
        
	<?php include_once 'footer.php' ?>


		<!-- Included JS Files (Compressed) -->
		<script src="javascripts/foundation.min.js" type="text/javascript">
		</script>
		<!-- Initialize JS Plugins -->
		<script src="javascripts/app.js" type="text/javascript">
		</script>
		<!-- Masonry for galleries -->
		<script src="javascripts/masonry.js" type="text/javascript">
		</script>
		<script type="text/javascript">
//<![CDATA[
      $(function(){
        var $container = $('#container');
        $container.imagesLoaded( function(){
          $container.masonry({
            itemSelector : '.box',
                        isFitWidth: true,
                        isAnimated: true
          });
        });
      });
  //]]>
  </script>
		<!-- END Masonry -->
		</body>
		</html>