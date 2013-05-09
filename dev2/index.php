
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>tiny rhino</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/work.css" rel="stylesheet">
    <link href="css/about.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="ico/favicon.png">
  </head>

  <body id="home" data-spy="scroll" data-target="#nav">



    <!-- NAVBAR
    ================================================== -->
    <div id="nav" class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="#home">tiny rhino</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li><a href="#home">Home</a></li>
              <li><a href="#charge">Our Charge</a></li>
              <li><a href="#process">The Process</a></li>
              <li><a href="#aboutUs">The Team</a></li>
              <li><a href="#work">Previous Work</a></li>
              <li><a href="#contact">Contact</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>



    



    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing ">

      <!-- Three columns of text below the carousel -->
      <div id="topbit" class="row">
        <div class="span4 " >
          <h2>The Rhino Charge</h2>
          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
          <p id="nav"><a class="btn" href="#charge">View details &raquo;</a></p>
        </div><!-- /.span4 -->
        <div class="span4">
          <h2>The Process</h2>
          <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p id="nav"><a class="btn" href="#process">View details &raquo;</a></p>
        </div><!-- /.span4 -->
        <div class="span4">
          <h2>Previous Work</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p id="nav"><a class="btn" href="#work">View details &raquo;</a></p>
        </div><!-- /.span4 -->
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider" id="charge">

      <div class="featurette" >
        <img class="featurette-image pull-right" src="http://twitter.github.io/bootstrap/assets/img/examples/browser-icon-chrome.png">
        <h2 class="featurette-heading">The Charge. <span class="muted">It'll blow your mind.</span></h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
      </div>

      <hr class="featurette-divider" id="process">

      <div class="featurette">
        <img class="featurette-image pull-left" src="http://twitter.github.io/bootstrap/assets/img/examples/browser-icon-firefox.png">
        <h2 class="featurette-heading">Oh yeah, it's that good. <span class="muted">See for yourself.</span></h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
      </div>
      
      <hr class="featurette-divider" id="aboutUs">

<?php include 'about.html'; ?>

      <hr class="featurette-divider" id="work">


      <div class="featurette" >
        
<?php include 'work.php'; ?>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->

	<!--contact form -->
    <!--<div id="contact"></div>-->



    </div><!-- /.container -->
      <!-- FOOTER -->
      <div id="footer">
      	<div id="contact" class="footerContainer">
        	<div id="contactForm">
            	<form method="post" action="email.php" data-validate="parsley">
                        <h3>Name</h3>
                        <input type="text" name="name" class="text input-xlarge" data-required="true"/>
                        <div class="hidden">
                        <input type="text" name="username" class="text input-xlarge"  />
                        </div>
                        <h3>Email</h3>
                        <input type="text" name="email" class="text input-xlarge" id="email" data-trigger="change" data-required="true" data-type="email"/>

                        <h3>Message</h3>
                        <textarea name="comment" class="text input-xlarge" rows="6" data-required="true"></textarea>
						<br/>
                        <input type="submit" id="submit" value="send" name="submit" class="submit-button btn" />
                    </form>
               </div><!-- end contact-form -->
            <div id="contactDetails">
               
                    <h3>Contact Info</h3>
                
                    <p class="white"> <i class="icon-user icon-white"></i> &nbsp; +44 (0) 7595474098</p>                    
                    <p class="white"><i class="icon-envelope icon-white"></i> &nbsp; <a href="mailto:will@tiny-rhino.co.uk">will@tiny-rhino.co.uk</a></p>
                    <p class="white"><i class="icon-home icon-white"></i> &nbsp; 278a Gloucester road, Bristol, BS78PD. England</p>     
                
                <div class="social">
                 </div> <!-- end social -->
                
            </div><!-- end contact-info -->
        
        
        </div><!-- end footer -->


    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/parsley.js"></script>
<!--    <script src="js/bootstrap-alert.js"></script>
    <script src="js/bootstrap-modal.js"></script>
    <script src="js/bootstrap-dropdown.js"></script>
    <script src="js/bootstrap-scrollspy.js"></script>
    <script src="js/bootstrap-tab.js"></script>
    <script src="js/bootstrap-tooltip.js"></script>
    <script src="js/bootstrap-popover.js"></script>
    <script src="js/bootstrap-button.js"></script>
    <script src="js/bootstrap-collapse.js"></script>
    <script src="js/bootstrap-carousel.js"></script>
    <script src="js/bootstrap-typeahead.js"></script>--> 
    <script>
      !function ($) {
        $(function(){
          // carousel demo
          $('#myCarousel').carousel()
        })
      }(window.jQuery)
    </script>

    <script>
	!function ($) {
    $(function(){

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
    })
}(window.jQuery)
	</script>
    <script src="js/holder/holder.js"></script>
  </body>
</html>
