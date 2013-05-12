      <div id="footer">
      	<div id="contact" class="footerContainer">
        	<div id="contactForm">
            	<form method="post"  data-validate="parsley" id="emailForm">
                        <h3>Name</h3>
                        <input type="text" name="name" class="text input-xlarge" data-trigger="change" data-required="true"/>
                        <div class="hidden">
                        <input type="text" name="username" class="text input-xlarge"  />
                        </div>
                        <h3>Email</h3>
                        <input type="text" name="email" class="text input-xlarge" id="email" data-trigger="change" data-required="true" data-type="email"/>

                        <h3>Message</h3>
                        <textarea name="comment" class="text input-xlarge" rows="6" data-required="true" data-trigger="change"></textarea>
						<br/>
                        <input type="submit" id="submitEmail" value="send" name="submit" class="submit-button btn" />
                    </form>
               </div><!-- end contact-form -->
            <div id="contactDetails">
               
                    <h3>Contact Info</h3>
                
                    <p class="white"><i class="icon-user icon-white"></i> &nbsp; +44 (0) 7595474098</p>                    
                    <p class="white"><i class="icon-envelope icon-white"></i> &nbsp; 
                    	<a href="mailto:will@tiny-rhino.co.uk?subject=Contact from tiny rhino site.">will@tiny-rhino.co.uk</a>
                    </p>
                    <p class="white"><i class="icon-home icon-white"></i> &nbsp; 278a Gloucester road, Bristol, BS78PD. England</p>     
                
                <div class="social">
                 </div> <!-- end social -->
                
            </div><!-- end contact-info -->

        
        </div><!-- end footer -->


    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/parsley.js"></script>
    <script src="js/charge.js"></script>

    

	<!-- script to make the navigation scroll -->
    <script type="text/javascript">

        var $root = $('html, body');

        $('#nav a').click(function() {
            var href = $.attr(this, 'href');
            $root.animate({
                scrollTop: $(href).offset().top
            }, 500, function () {
                window.location.hash = href;
            });
            return false;

        });



              // AJAX submit
			  $("#emailForm").submit(function() {
			
				var url = "email.php"; 
			
				$.ajax({
					   type: "POST",
					   url: url,
					   data: $("#emailForm").serialize(),
					   success: function(data)
					   {
						   $('#emailForm')[0].reset();
						   $('#contactForm').prepend('<h1 class="text-success" id="messageSent">Message sent!</h1>');
						   $("#messageSent").fadeIn("slow");
						   window.location.href = '#contact';
						   
					   }
					 });
			
				return false; // avoid to execute the actual submit of the form.
			});


    
    <!-- script to make the carousel work  -->


          // carousel demo
          $('#myCarousel').carousel();

    </script>
  </body>
</html>