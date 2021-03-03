  <!-- Site footer -->
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>About</h6>
			  <br>
             <img src="images/imagel.png" width="40px">
        <h3>Bansal College of Engineering</h3><br><p><b>

Hoshangabad road, Mandideep

Mandideep 462046 (M.P.)

7480295890   info@bce.ac.in</b></p>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Categories</h6>
            <ul class="footer-links">
              <li><a href="#">Home</a></li>
              <li><a href="2">Academics</a></li>
              <li><a href="">Department</a></li>
              <li><a href="">Talent Store</a></li>
              <li><a href="#gallery">Gallery</a></li>
              <li><a href="">About Us</a></li>
            </ul>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Quick Links</h6>
            <ul class="footer-links">
              <li><a href="http://scanfcode.com/about/">Online Payment</a></li>
              <li><a href="">Media</a></li>
              <li><a href="">Academic Calendar</a></li>
              <li><a href="">Privacy Policy</a></li>
              <li><a href="">Admission Enquiry</a></li>
            </ul>
          </div>
        </div>
        <hr>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p>© Sawraj-Dev Copyright © 2020-21. | Design by <a href="http://bce.ac.in">Bce</a> Developed By Prabhu Devendra</p>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="social-icons">
              <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
              <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>   
            </ul>
          </div>
        </div>
      </div>
</footer>



		
<!-- js-scripts --> 
<!-- js-files --> 
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script> 
<script type="text/javascript" src="js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
<!-- //js-files --> 
<!-- Baneer-js --> 


<!-- smooth scrolling --> 
<script src="js/SmoothScroll.min.js"></script> 
<!-- //smooth scrolling --> 
<!-- stats --> 
<script type="text/javascript" src="js/numscroller-1.0.js"></script> 
<!-- //stats --> 
<!-- moving-top scrolling --> 
<script type="text/javascript" src="js/move-top.js"></script> 
<script type="text/javascript" src="js/easing.js"></script> 
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script> 


<script type="text/javascript">
		$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
		*/								
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script> 
<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a> 
<!-- //moving-top scrolling --> 
<!-- gallery popup --> 
<script src="js/jquery.swipebox.min.js"></script> 
<script type="text/javascript">
jQuery(function($) {
	$(".swipebox").swipebox();
});
</script> 
<!-- //gallery popup --> 
<!--/ sliderscript--> 

<!-- //Baneer-js --> 
<!-- Calendar --> 
<script src="js/jquery-ui.js"></script> 
<script>
	  $(function() {
		$( "#datepicker" ).datepicker();
	 });
	</script> 
<!-- //Calendar --> 

<!-- //js-scripts -->
</body>
</html>