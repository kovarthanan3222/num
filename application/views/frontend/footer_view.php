<footer class="foot_back_ground">
	<!-- <div class="container">
	<div class="footer_contact">
	<div class="col-sm-6"> © Copyright 2015 NewUrbanMechanic </div>
	<div class="col-sm-6 tex-align_left"> Powerded by binaryswan</div>
	</div>
	</div> -->
	
	<div class="container">
            <div class="row">
                <div class="col-md-12">
                    
                    <div class="col-sm-3">
                        <p class="footer_header ">Get in touch</p>
                        
                        <ul class="footer_list">
                            <li><a href="#"> <i class="fa fa-phone"></i> Telephones: +1 777 55-32-21</a></li>
                            <li><a href="#"> <i class="fa fa-envelope-o"></i> E-mail: contacts@miracle.com</a></li>
                            <li><a href="#"> <i class="fa fa-skype"></i> Skype: angelotours</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-2">
                        <p class="footer_header">ABOUT</p>
                        
                        <ul class="footer_list_b">
                            <li><a href="#">About Us</a></li>
                            
                            <li><a target="_blank" href="#">Privacy Policy</a></li>
                            <li><a target="_blank" href="#">Terms of Service</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-2">
                        <p class="footer_header">SUPPORT</p>
                        
                        <ul class="footer_list_b">
                            
                            <li><a href="#">Help Center</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </div>

                    <div class="col-sm-5">
                        <p class="footer_header">newsletter sign up</p>
                        
                       
					<form  role="form" novalidate="true">
                    <div class="news_mail"> 
						<input type="email" required="" placeholder="your email" name="emailid" id="email" class="form-control">
						<button class="news_send">SIGN UP</button>
                    </div>
                    </form>
					
					<div class="footer-social">
						<a class="fa fa-facebook" href="#"></a>
						<a class="fa fa-google-plus" href="#"></a>
						<a class="fa fa-tumblr" href="#"></a>
						<a class="fa fa-linkedin" href="#"></a>
					</div>
					
                    </div>
                    
                </div>
            </div>

           
        </div>
		
	</footer>
<section class="footer_copy">

<div class="copy_right">
<div class="container">
<div class="row">
<div class="col-sm-8">
<p class="copyright">(c)2016 newurbanmechanic.com - Book Your Mechanic On-line</p>
</div>
<div class="col-sm-4 text-right">
<a href="http://binaryswan.com/" style="color:#bababa" target="_blank">Powered by Binaryswan</a>
</div>
</div>
</div>
</div>
	<!-- <p class="text-center copyright">(c)2016 newurbanmechanic.com - Motorbike and Car Servicing Simplified | Book Your Mechanic Online</p> -->
</section>


	<!-- !!!!!! Java Script !!!!!!! -->

	<script src="js/swiper.min.js"></script>

	<script src="js/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
	<!--<script src="js/animation.js" type="text/javascript"></script>-->
  <script>
         $(function() {
            $( "#datepicker-home" ).datepicker();
            $( "#datepicker-13" ).datepicker();
           // $( "#datepicker-13" ).datepicker("show");
         });
      </script>
	
	<script>
	$(document).ready(function(){
	$(".day").click(function(){
			$(".dropdown-menu").hide();
		});
		
	$(".day.active").click(function(){
			$(".dropdown-menu").hide();
		});
	});
	</script>

	<script>
	$(document).ready(function(){
	$('.dropdown-menu').blur();
	});
	</script>
	
	

	
	<script>
	var num = 100; //number of pixels before modifying styles
	$(window).bind('scroll', function () {
	if ($(window).scrollTop() > num) {
	$('.clearfix').addClass('menufixed');

	} else {
	$('.clearfix').removeClass('menufixed');
	}
	});
	</script>

	
	 <script>  

    // Vertical slider
    $("#v-slider").slider({
        range: "min",
        min: 1999,
        max: 2031,
        value: 2010,
        slide: function (event, ui) {
            $("#amount").val(ui.value);
        }
    });
    $("#amount").val($("#v-slider").slider("value"));

  </script>  
      
	<script>
    $(document).ready(function(e){
    $('.search-panel .dropdown-menu').find('a').click(function(e) {
			e.preventDefault();
			var param = $(this).attr("href").replace("#","");
			var concept = $(this).text();
			$('.search-panel span#search_concept').text(concept);
			$('.input-group #search_param').val(param);
		});
	});
	</script>
	
	<script type="text/javascript">
	jQuery(window).load(function() {
	 jQuery("#load").fadeOut("slow");
	 jQuery("#load").delay(500).fadeOut();
	})
	</script>
		
	<script>
    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        paginationClickable: true,
		speed: 1000,
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
		autoplay: 7000,
		loop: true,
        spaceBetween: 0
    });	
    </script>
	
	
	


<script>
    var swiper = new Swiper('.swiper-aa', {
        pagination: '.swiper-pagination',
        paginationClickable: true
    });
    </script>

	<script>//----------------> insurance radio button hide show
	$(document).ready(function() {
		$("input[name$='cars']").click(function() {
			var test = $(this).val();

			$("div.desc").hide();
			$("#Cars" + test).show();
		});
	});
	</script>

	
	<script src="js/owl.carousel.min.js"></script>

    <script>
   $('.shop_detailes').owlCarousel({
   items:1,
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:1000,
    autoplayHoverPause:true
})
    </script>

	<script>
	$('.offers_slid').owlCarousel({
    loop:true,
    margin:10,
    responsiveClass:true,
	items: 3,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
	})
	</script>
	
	<script>
	$(document).ready(function() {
	$(".feed_back").owlCarousel({
	navigation : true,
	slideSpeed : 300,
	paginationSpeed : 400,
	singleItem : true
	});
	});
	</script>
	
		<script>// ----------------------------- mack an appointment checkbox for petrol disel  
	$('input[type="checkbox"]').on('change', function() {
    $('input[name="' + this.name + '"]').not(this).prop('checked', false);
	});
	</script>
	

	<!--<script src="js/bootstrap-datepicker.js" type="text/javascript"></script>
	<script type="text/javascript"> //-------------- Date picker
	$('.datepicker').datepicker()
	.datepicker('hide')
	
	</script>-->

	
<script>
	$(document).ready(function () {
		
		if( /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ) {
  $('.selectpicker').selectpicker('mobile');
}
	});
	
</script>
	
</body>
</html>