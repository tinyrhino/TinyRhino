      
        
        <footer id="contactus" class="footer background-black">

            <div id="contact" class="container marketing">
                <div class="featurette">
                    
                    <h2 class="featurette-heading">And lastly, Contact us. <span class="muted">Checkmate.</span></h2>
                    
                    <legend>&nbsp;</legend>

                    <div class="row top-buffer-medium">

                        <div id="contactForm" class="span6">  
                            <form method="post"  data-validate="parsley" id="emailForm" action="javascript:email()">
                                <fieldset>
                                    <label>Name</label>
                                    <input class="span5" name="name" type="text" placeholder="John Doe"  data-trigger="change" data-required="true">
                                        <div class="hidden">
                                            <input type="text" name="username" class="text input-xlarge"  />
                                        </div>
                                    <label>Email</label>
                                    <input class="span5" name="email" type="email" id="email" data-trigger="change" data-required="true" data-type="email" placeholder="Johndoe@example.com">
                                    <label>Message</label>
                                    <textarea class="span5" rows="5"></textarea>
                                    <label></label>
                                    <button type="submit" id="submitEmail" value="send" name="submit" class="btn btn-primary">Send it</button>
                                </fieldset>
                            </form>       
                        </div><!--end sspan-->

                         <div class="span6 top-buffer-xsmall">  


                    <p class="white"><i class="icon-user icon-white"></i> &nbsp; +44 (0) 7595474098</p>                    
                    <p class="white"><i class="icon-envelope icon-white"></i> &nbsp; 
                        <a href="mailto:will@tiny-rhino.co.uk?subject=Contact from tiny rhino site.">info@tiny-rhino.co.uk</a>
                    </p>
                    <p class="white"><i class="icon-home icon-white"></i> &nbsp; 278a Gloucester road, Bristol, BS78PD. England</p>     
                

                        </div>




                    </div>   <!--end row -->   
                     <legend>&nbsp;</legend>  

                     <p class="pull-right"><div id="nav" class="pull-right"><a href="#home">Back to top</a></div></p>
        <p>&copy; 2013 Tiny Rhino. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>



                </div>
            </div><!--end container-->
        </footer>




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
			  function email() {
			
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
			  }


    
    <!-- script to make the carousel work  -->


          // carousel demo
          $('#myCarousel').carousel();
		  $('[rel=tooltip]').tooltip() 
    </script>
  </body>
</html>