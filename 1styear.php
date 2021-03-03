<?php include("header.php")?>
 <style>


.gallery {
	display: flex;
	flex-wrap: wrap;
	
	margin: -1rem -1rem;
}

.gallery-item {
	
	flex: 1 0 24rem;
	
	margin: 1rem;
	box-shadow: 0.3rem 0.4rem 0.4rem rgba(0, 0, 0, 0.4);
	overflow: hidden;
}

.gallery-image {
	display: block;
	width: 100%;
	height: 100%;
	object-fit: cover;
	transition: transform 400ms ease-out;
}

.gallery-image:hover {
	transform: scale(1.15);
}


@supports (display: grid) {
	.gallery {
		display: grid;
		grid-template-columns: repeat(auto-fit, minmax(24rem, 1fr));
		grid-gap: 2rem;
	}

	.gallery,
	.gallery-item {
		margin: 0;
	}
}

	 
</style>
<div class="container-fluid" style="background-color: aliceblue;">
  <div class="row">
	  
    <img class="center-block img-responsive img-rounded" src="images/bcesb.jpg" alt="ssssss" >
	  <br>
	<br>
	  <h1 class="text-center text-primary">FIRST YEAR</h1>
</div>
	
	<br>
	<br>
<div class="row">
 
	
      <div class="col-md-8">
      <div class="">
		  
        <h3><strong> </strong></h3>
  <p>
In this year students gain basic knowledge about different science stream like Computer Science Engineering, Mechanical Engineering,Civil Engineering, Electrical And Electronic Engineering,Electrical Engineering,EEES etc. </p>
       
        </div>
  </div>
	
	
	   <div class="col-md-4">
     <div class="w3-container">
  
</div>

<div class="w3-content w3-section" style="max-width:500px">
  <img class="mySlides w3-animate-top" src="images/download.jpg" style="width:100%">
  <img class="mySlides w3-animate-bottom" src="images/bg1.jpg" style="width:100%">
  <img class="mySlides w3-animate-top" src="images/download.jpg" style="width:100%">
  <img class="mySlides w3-animate-bottom" src="images/gellary/IMG_3205.JPG" style="width:100%">
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 5000);    
}
</script>
 
  </div>
	

  </div>
  </div>
<BR>
<div class="container-fluid" style="background-color:rgba(162,22,24,0.49);">
  <div class="row">
	  <br>
    <h1 class="text-center text-primary">About H.O.D.</h1>
    <br>
</div>
<div class="row">
    <div class="col-md-4">
      <div class="">
       <img class="center-block img-responsive img-rounded" src="images/imagel.png">
		  <section  style="text-align: center; padding:inherit;">
		  	<h4><strong>Mrs. Trapti Bhatt</strong></h4>
			  <p style="font-family: 'Chewy', cursive; font-size:18px">Detail </p>
		  </section>
		  
   
      </div>
  </div>
      <div class="col-md-7">
      <div class="">
        <h3><strong>Mrs. Trapti Bhatt</strong></h3>
		  <br>
  <p style="color: black; font-size:18px">"BCE provides the students with a holistic experience for life and equip them with a congenial atmosphere to createintellectual technologists and entrepreneurs. Value education and Professional ethics are an integral part of our curriculum. Our Training and Placement cell plays a key role in improving the quality of placements in terms of job "</p>          

        </div>
  </div>
  </div>
  </div>
<br>
<div class="container-fluid">
<div id="mixedSlider">
<div class="MS-content">
 <div class="item">
                            <div class="imgTitle">
                                <!--<h2 class="blogTitle">Animals</h2>-->
                                <img src="images/teachers/1.jpg" alt="" />
                            </div>
                            <p>Teacher name</p>
                        </div>
                        <div class="item">
                            <div class="imgTitle">
                               
                                <img src="images/teachers/adarsh.jpg" alt="" />
                            </div>
                         
                        </div>
                        <div class="item">
                            <div class="imgTitle">
                                
                                <img src="images/teachers/anirudh.jpg" alt="" />
                            </div>
                         
                        </div>
                        <div class="item">
                            <div class="imgTitle">
                               
                                <img src="images/teachers/download.jpg" alt="" />
                            </div>
                           
                         
                        </div>
                        <div class="item">
                            <div class="imgTitle">
                               
                                <img src="images/teachers/mamta.jpg" alt="" />
                            </div>
                           
                           
                        </div>
                       
                    </div>
                    <div class="MS-controls">
                        <button class="MS-left"><i class="fa fa-angle-left" aria-hidden="true"></i></button>
                        <button class="MS-right"><i class="fa fa-angle-right" aria-hidden="true"></i></button>
                    </div>
                </div>
</div>

<script src="js/jquery-2.1.4.min.js"></script> 

<script>
(function($){

    // ==== BEGINS PLUGGIN ====
    $.fn.multislider = function(data, callback){

        // ==== CACHE DOM ====
        var $multislider = $(this);
        var $msContent = $multislider.find('.MS-content');
        var $msRight = $multislider.find('button.MS-right');
        var $msLeft = $multislider.find('button.MS-left');
        var $imgFirst = $msContent.find('.item:first');

        // === DETERMINE ACTION ====
        // string = method | object or nothing is to initialize
        if(typeof data === 'string'){
            getStringArgs(data);
            return $multislider;
        } else if (typeof data === 'object' || typeof data  ==='undefined'){
            init();
        }

        // ==== PLUGGIN VARIABLES ====
        var $imgLast,
        totalWidth,
        numberVisibleSlides,
        animateDistance,
        animateSlideRight,
        animateSlideLeft,
        defaults,
        settings,
        animateDuration,
        autoSlideInterval;

        // = INITIALIZE =
        function init(){
            minifyContent();        // minify html
            createSettings();       // merge defaults and user provided options
            saveData();             // add data object to DOM el with reference to animation functions, allows for methods to reference at any time
            selectAnimations();     // choose default animation
        }


        // ==== EVENT HANDLERS ====
        $msRight.on('click', animateSlideLeft);
        $msLeft.on('click', animateSlideRight);
        $multislider.on('click','.MS-right, .MS-left', resetInterval);
        $(window).on('resize', findItemWidth);


        // ==== FUNCTIONS (for days...) ====
        // =================================

        function pauseAbove(){
            if (window.innerWidth > settings.pauseAbove){ $multislider.addClass('ms-PAUSE'); }
            $(window).on('resize',function(){
                if (window.innerWidth > settings.pauseAbove){
                    $multislider.addClass('ms-PAUSE');
                } else {
                    $multislider.removeClass('ms-PAUSE');
                }
            });
        }

        function pauseBelow(){
            if (window.innerWidth < settings.pauseBelow){ $multislider.addClass('ms-PAUSE'); }
            $(window).on('resize',function(){
                if (window.innerWidth < settings.pauseBelow){
                    $multislider.addClass('ms-PAUSE');
                } else {
                    $multislider.removeClass('ms-PAUSE');
                }
            });
        }

        // used if method is called after initialization
        function getStringArgs(str){
            if (typeof $multislider.data(str) !== 'undefined'){
                $multislider.data(str)();
            } else {
                console.error("Multislider currently only accepts the following methods: next, prev, pause, play");
            }
        }

        // saves data object to DOM element
        function saveData(){
            $multislider.data({
                "pause":function(){ $multislider.addClass('ms-PAUSE'); },
                "unPause":function(){ $multislider.removeClass('ms-PAUSE'); },
                "continuous":function(){ $multislider.removeClass('ms-PAUSE'); continuousLeft(); },
                "next":function(){ overRidePause(singleLeft); },
                "nextAll":function(){ overRidePause(allLeft); },
                "prev":function(){ overRidePause(singleRight); },
                "prevAll":function(){ overRidePause(allRight); },
                "settings":settings
            });
        }

        // used when calling 'next', 'prev' methods
        function overRidePause(animation){
            if ($multislider.hasClass('ms-PAUSE')){
                $multislider.removeClass('ms-PAUSE');
                animation();
                $multislider.addClass('ms-PAUSE');
            } else {
                animation();
            }
            resetInterval();
        }

        // CRITICAL for items to be perfectly side-by-side without floating them
        function minifyContent(){
            $msContent.contents().filter(function(){
                return (this.nodeType == 3 && !/\S/.test(this.nodeValue));
            }).remove();
        }

        // updated options with defaults, measure slide widths for animation calculations, carry out setting implementations
        function createSettings() {
            defaults = settings || {
    			continuous: false,	// endless scrolling with no pauses
    			slideAll: false,	// slide all visible slides, or just one at a time
    			// autoSlide: true,	// DEPRECATED
    			interval: 2000,		// time bewteen slide animation, 0 or 'false' prevents auto-sliding
    			duration: 500,	    // duration of slide animation
    			hoverPause: true,	// pause slideshow on hover
                pauseAbove: null,   // pause above specified screen width
                pauseBelow: null    // pause below specified screen width
    		};

    		settings = $.extend({},defaults,data);

            findItemWidth();
            animateDuration = settings.duration;

            if (settings.hoverPause){pauseHover();}
            // autoSlide is being depricated | Feb 2 2017
            if (settings.continuous !== true && settings.interval !== 0 && settings.interval !== false && settings.autoSlide !== false){autoSlide();}
            if (settings.pauseAbove !== null && typeof settings.pauseAbove === 'number'){ pauseAbove(); }
            if (settings.pauseBelow !== null && typeof settings.pauseBelow === 'number'){ pauseBelow(); }
        }

        // determine between single and multi-slide animations
        function selectAnimations () {
            if (settings.continuous){
                settings.autoSlide = false;
                continuousLeft();
            } else if (settings.slideAll){
                animateSlideRight = $multislider.data('prevAll');
                animateSlideLeft = $multislider.data('nextAll');
            } else {
                animateSlideRight = $multislider.data('prev');
                animateSlideLeft = $multislider.data('next');
            }
        }

        // measure slide width, for animation calculations
        function findItemWidth(){
            reTargetSlides();
            animateDistance = $imgFirst.width();
            var left = parseInt($msContent.find('.item:first').css('padding-left'));
            var right = parseInt($msContent.find('.item:first').css('padding-right'));
            if (left !== 0){animateDistance += left;}
            if (right !== 0){animateDistance += right;}
        }

        // recursive auto-slide loop
        function autoSlide() {
            autoSlideInterval = setInterval(function(){
                if (!$multislider.hasClass('ms-PAUSE')){
                    animateSlideLeft();
                }
            }, settings.interval);
        }

        function resetInterval() {
            if (settings.interval !== 0 && settings.interval !== false && settings.continuous !== true){
                clearInterval(autoSlideInterval);
                autoSlide();
            }
        }

        // target first and last visible slides before each new animation
        function reTargetSlides(){
            $imgFirst = $msContent.find('.item:first');
            $imgLast = $msContent.find('.item:last');
        }

        // prevent animation firing if multislider is currently animating
        // all animations pass through this function, which emits events, and adds/removes animating class
        function isItAnimating(callback){
			if(!$multislider.hasClass('ms-animating') &&
               !$multislider.hasClass('ms-HOVER') &&
               !$multislider.hasClass('ms-PAUSE')){
                    $multislider.trigger('ms.before.animate'); // event!
                    $multislider.addClass('ms-animating');
                    callback();    //callback is animation
			}
		}

        // update multislider at the end of each animation
        function doneAnimating() {
			if($multislider.hasClass('ms-animating')){
				$multislider.removeClass('ms-animating');
                $multislider.trigger('ms.after.animate'); // event!
            }
		}

        // logic for pausing and restarting the multislider on hover
        function pauseHover() {
            // continuous scroll pause slightly different
            if(settings.continuous){
				$msContent.on('mouseover',function(){
					doneAnimating();
					$msContent.children('.item:first').stop();
				});
				$msContent.on('mouseout',function(){
					continuousLeft();
				});
			} else {
            // regular animation pausing
                $msContent.on('mouseover',function(){
                    $multislider.addClass('ms-HOVER');
                });
                $msContent.on('mouseout',function(){
                    $multislider.removeClass('ms-HOVER');
                });
			}
        }

        // calculate remaining animation, if stopped mid-animation and resuming
        function midAnimateResume(){
            animateDuration = settings.duration;
            var currentMargin = parseFloat($msContent.find('.item:first').css("margin-left"));
            var percentageRemaining = 1-(currentMargin/-(animateDistance-1));
            animateDuration = percentageRemaining*animateDuration;
        }

        // determine how many slides need to be moved over, if slideAll is true
        function calcNumSlidesToMove(){
            totalWidth = $msContent.width();						          // total width of .MS-content containing all visible slides
		    numberVisibleSlides = Math.floor(totalWidth/animateDistance);     // number of (visible) slides needed to be moved in each animation
        }


        // ==== ANIMATION FUNCTIONS ====
        // =============================
        function continuousLeft () {
            isItAnimating(function(){
                reTargetSlides();
                midAnimateResume();
                $imgFirst.animate(
                    {marginLeft: -(animateDistance+1)},
                    {
                        duration: animateDuration,
                        easing: "linear",
                        complete: function(){
                            $imgFirst.insertAfter($imgLast).removeAttr("style");
                            doneAnimating();
                            continuousLeft ();
                        }
                    }
                );
            });
        }

        function allLeft(){
            isItAnimating(function(){
                reTargetSlides();
                calcNumSlidesToMove();

                var $clonedItemSet = $msContent.children('.item').clone();
                var filteredClones = $clonedItemSet.splice(0, numberVisibleSlides);

                $msContent.append(filteredClones);

                $imgFirst.animate(
                    {marginLeft: -totalWidth}, {
                        duration: animateDuration,
                        easing: "swing",
                        complete: function(){
                            $($msContent.children('.item').splice(0,numberVisibleSlides)).remove();
                            doneAnimating();
                        }
                    }
                );
            });
        }

        function allRight() {
            isItAnimating(function(){
                reTargetSlides();
                calcNumSlidesToMove();

                var numberTotalSlides = $msContent.children('.item').length;
                var $clonedItemSet = $msContent.children('.item').clone();
                var filteredClones = $clonedItemSet.splice(numberTotalSlides-numberVisibleSlides,numberTotalSlides);

                $($(filteredClones)[0]).css('margin-left',-totalWidth); // give clone array negative margin before preppending
                $msContent.prepend(filteredClones);

                reTargetSlides();

                $imgFirst.animate(
                    {
                        marginLeft: 0
                    }, {
                        duration: animateDuration,
                        easing: "swing",
                        complete: function(){
                            numberTotalSlides = $msContent.find('.item').length;
                            $($msContent.find('.item').splice(numberTotalSlides-numberVisibleSlides,numberTotalSlides)).remove();
                            $imgFirst.removeAttr('style');
                            doneAnimating();
                        }
                    }
                );
            });
        }

        function singleLeft(){
            isItAnimating(function(){
                reTargetSlides();
                $imgFirst.animate(
                    {
                        marginLeft: -animateDistance
                    }, {
                        duration: animateDuration,
                        easing: "swing",
                        complete: function(){
                            $imgFirst.detach().removeAttr('style').appendTo($msContent);
                            doneAnimating();
                        }
                    }
                );
            });
        }

        function singleRight(){
            isItAnimating(function(){
                reTargetSlides();
                $imgLast.css('margin-left',-animateDistance).prependTo($msContent);
                $imgLast.animate(
                    {
                        marginLeft: 0
                    }, {
                        duration: animateDuration,
                        easing: "swing",
                        complete: function(){
                            $imgLast.removeAttr("style");
                            doneAnimating();
                        }
                    }
                );
            });
        } 
        return $multislider;
    }
})(jQuery);
</script> 
<script>
$('#basicSlider').multislider({
			continuous: true,
			duration: 1800
		});
		$('#mixedSlider').multislider({
			duration: 750,
			interval: 1800
		});
</script>



<br>

<div class="container-fluid" style="background-color: transparent;">
	 <h1 class="text-center text-primary">Department </h1>
	<br>
<br>
  <div class="gallery">

		<div class="gallery-item">
			<img class="gallery-image" src="https://images.unsplash.com/photo-1488190211105-8b0e65b80b4e?w=500&h=500&fit=crop">
		</div>

		<div class="gallery-item">
			<img class="gallery-image" src="https://images.unsplash.com/photo-1515260268569-9271009adfdb?w=500&h=500&fit=crop" >
		</div>

		<div class="gallery-item">
			<img class="gallery-image" src="https://images.unsplash.com/photo-1506045412240-22980140a405?w=500&h=500&fit=crop" >
		</div>

		<div class="gallery-item">
			<img class="gallery-image" src="https://images.unsplash.com/photo-1514041181368-bca62cceffcd?w=500&h=500&fit=crop">
		</div>

		<div class="gallery-item">
			<img class="gallery-image" src="https://images.unsplash.com/photo-1445810694374-0a94739e4a03?w=500&h=500&fit=crop">
		</div>

		<div class="gallery-item">
			<img class="gallery-image" src="https://images.unsplash.com/photo-1486334803289-1623f249dd1e?w=500&h=500&fit=crop" >
		</div>

	</div>

	</div>
<br>
<br>
<div class="container" style="background-color:;"><br>
	<div class="row">
      <div class="col-md-12">
          <div class="card card-block text-xs-left" style="margin-bottom:15px;">
          <h1 class="text-center text-primary">Department </h1>
            <div style="height: 15px"></div>
            <ul class="list-group">
              <li class="list-group-item"><a href="33">A H M Kamal,"Inserting Item to a Sorted List",USTC Teachers Annual (USTA - 2002),8(1),2002</a> <strong style="color: red">19 april</strong></li>
				
				
				 <li class="list-group-item"><a href="33">A H M Kamal,"Inserting Item to a Sorted List",USTC Teachers Annual (USTA - 2002),8(1),2002</a> <strong style="color: red">19 april</strong></li>
				
				 <li class="list-group-item"><a href="33">A H M Kamal,"Inserting Item to a Sorted List",USTC Teachers Annual (USTA - 2002),8(1),2002</a> <strong style="color: red">19 april</strong></li>
				
				 <li class="list-group-item"><a href="33">A H M Kamal,"Inserting Item to a Sorted List",USTC Teachers Annual (USTA - 2002),8(1),2002</a> <strong style="color: red">19 april</strong></li>
             
            </ul>
          </div>
      </div>
  </div>

</div>
<br>
<br>
  
  
<?php include("footer.php")?>
