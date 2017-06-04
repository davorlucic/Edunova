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
              <h1 class="welcome_text">Contact Page</h1>    
        </header>
   
   <!-- ######################## Section ######################## -->
      
      <section class="section_light">
            

      <div class="row">
        <div class="six columns">
          <h3>Address</h3>

          <p><strong>Business INC</strong></p>

          <p>Telephone: 99 88 77 66<br />
          E-mail: mail@doe.com</p><!-- // MAILCHIMP SUBSCRIBE CODE \\ -->

          <p><a href="#">Subscribe to Newsletter</a></p>
          <!-- \\ MAILCHIMP SUBSCRIBE LINK // -->

          <p><strong>Office: mon-fri 10.00 - 16.30</strong><br />
          <em>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin dictum porttitor lacus.</em></p>
          
          <!-- Contact Form -->
          
          
          <h3>Contact Form</h3>

          <!-- Row Layout for forms -->
          <form>
            <label>This is a label.</label>
            <input type="text" placeholder="Standard Input" />
            <label>Address</label>
            <input type="text" class="twelve" placeholder="Street" />
            <div class="row">
              <div class="six columns">
                <input type="text" placeholder="City" />
              </div>
              <div class="three columns">
                <input type="text" placeholder="State" />
              </div>
              <div class="three columns">
                <input type="text" placeholder="ZIP" />
              </div>
            </div>
            <textarea placeholder="Message"></textarea>
            <input type="submit" value="Submit" class="button success" />
          </form>
          
        </div>

        <div class="six columns">
          <h3>Where to find us</h3><iframe src=
          "http://maps.google.no/maps?f=q&amp;source=s_q&amp;hl=no&amp;geocode=&amp;q=Dieter+Schneider,+Hafstadvegen+34,+F%C3%B8rde&amp;aq=0&amp;oq=hafstadvegen+34+&amp;sll=61.450282,5.85535&amp;sspn=0.008368,0.027874&amp;g=hafstadvegen+34&amp;ie=UTF8&amp;hq=Dieter+Schneider,&amp;hnear=Hafstadvegen+34,+6800+F%C3%B8rde,+Sogn+og+Fjordane&amp;t=m&amp;ll=61.453106,5.857172&amp;spn=0.009536,0.019913&amp;z=15&amp;iwloc=A&amp;output=embed"
          style="width:400px; height:375px; border:0"></iframe><br />
          <small><a style="color: #0000ff; text-align: left;" href=
          "http://maps.google.no/maps?f=q&amp;source=embed&amp;hl=no&amp;geocode=&amp;q=Dieter+Schneider,+Hafstadvegen+34,+F%C3%B8rde&amp;aq=0&amp;oq=hafstadvegen+34+&amp;sll=61.450282,5.85535&amp;sspn=0.008368,0.027874&amp;g=hafstadvegen+34&amp;ie=UTF8&amp;hq=Dieter+Schneider,&amp;hnear=Hafstadvegen+34,+6800+F%C3%B8rde,+Sogn+og+Fjordane&amp;t=m&amp;ll=61.453106,5.857172&amp;spn=0.009536,0.019913&amp;z=15&amp;iwloc=A">
          Enlarge map</a></small>
        </div>
      </div>

        </section>
        
		<!-- end section -->
		
<!-- ######################## Footer ######################## -->  
              
	<?php include_once 'footer.php' ?>
    
<!-- ######################## Scripts ######################## -->
    
    <?php include_once 'scripts.php'; ?>
  
</body>
</html>