<?
include_once "header.php";
?>
	<script src="js/bootstrap-datepicker.js" type="text/javascript"></script>

<script>
	$(document).ready(function () {
	var mySelect = $('#first-disabled2');
	
	$('#select_location').selectpicker({
	  liveSearch: true,
	  maxOptions: 1
	});

	});

</script>


	
<section class="ne_slid">
<section class="slider_search">
	<div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
				<div class="sliderbg_1">
				<div class="slide_text wow fadeInUp" data-wow-duration="1s"> Book your vehicle service. Its easy, convenient and with zero booking charges  </div>
				</div>
			</div>
			<div class="swiper-slide">
				<div class="sliderbg_2">
				</div>
			</div>
			<div class="swiper-slide">
				<div class="sliderbg_3">
				</div>
			</div>
			<!--<div class="swiper-slide">
				<div class="sliderbg_1">
				</div>
			</div>-->
        </div>
        <!-- Add Pagination
        <div class="swiper-pagination"></div> -->
        <!-- Add Arrows -->
		<a class="swiper-button-next" href="#"></a>
		<a class="swiper-button-prev" href="#"></a>
		
		<div class="search_meck">
		<div class="container">
		<div class="row">
		<div class="search_section_full">
		<div class="search_section">
		<div class="search_section_div">

		<div class="sec_select_div_radio ">

		<div class="search_tit">What?</div>
		<div class="select_option border_right">
		<div class="Radio_button">
			<div class="radio radio-primary radio-inline">
			<div class="moter_icon"><i class="fa fa-motorcycle"></i></div>
				<input type="radio" id="inlineRadio1" value="option1" name="radioInline" checked="">
				<label for="inlineRadio1">  Bike </label>
			</div>
			<div class="radio radio-primary radio-inline">
			<div class="moter_icon"> <i class="fa fa-car"></i></div>
				<input type="radio" id="inlineRadio2" value="option1" name="radioInline">
				<label for="inlineRadio2"> Car </label>
			</div>
		</div>
		</div>
		</div>
	
		<div class="sec_select_div11 ">
		<div class="select_vehicle ">
		<div class="search_tit">Where?</div>
		<div class="select_option border_right">
		<div class="col-sm-6">
		<div class="search_tit_2">Search location</div>
		<div class="select_style">
		<select class=" selectpicker height_select" >
			  <option>select....</option>
			  <option>Chennai</option>
			  <option>Mumbai</option>
			  <option>Punai</option>
			</select>
		</div>
		</div>
		<div class="col-sm-6">
		<div class="search_tit_2">Enter Area</div>
		<div class="enter_area"><input type="text" class="input_search_area"> <i class="fa fa-map-marker" aria-hidden="true"></i> </div>
		</div>
		</div>
		</div>
		</div>

		<div class="sec_select_div ">
		<div class="select_vehicle ">
		<div class="search_tit">When?</div>
		<div class="select_option lite_space">
		<div class="search_tit_2">Select Date</div>
		<div class="enter_area">
		<div class="input-append date">
		<input type="text" id="datepicker-home" class="input_search_area datepicker"  value=""> 
		<i class="fa fa-calendar" aria-hidden="true"></i>
		</div>
		</div>
		</div>
		</div>
		</div>

		</div>

		<div class="button_style"><button onclick="location.href='service_station.php';">Search</button></div>
		</div>
		</div>
		</div>
		</div>
		</div>
    </div>
</section>

</section>
<a name="howitworks" id="howitworks"></a>

<section class="how_it_work">

	<div class="container">
	  <div class="row">
		<div class="col-sm-12">
		<div class="why_choos_us">
		<h2>How it Works?</h2>
		<div class="title_underline"></div>
		<p>
		 
			We are one of the leading auto repair shops serving customers in Tucson.
			All mechanic services are performed by highly .
		</p>
		</div>
		</div>
		<div class="col-sm-4">
		<div class="dic_sec">
		  <img src="images/how_it_works_search.svg">
		  <h3>SEARCH</h3>
		  <div class="h3_title_underline"></div>
		  <p>If you want the quality you would expect from the dealership, but with a more personal and friendly atmosphere, you have found it.</p>
		</div>
		</div>
		<div class="col-sm-4">
		<div class="dic_sec">
		  <img src="images/how_it_works_select.svg">
		  <h3>SELECT</h3>
		  <div class="h3_title_underline"></div>
		  <p>If you want the quality you would expect from the dealership, but with a more personal and friendly atmosphere, you have found it.</p>
		</div>
		</div>
		<div class="col-sm-4">
		<div class="dic_sec">
		<img src="images/how_it_works_calendar.svg">
		  <h3>BOOK</h3>   
			<div class="h3_title_underline"></div>
		  <p>If you want the quality you would expect from the dealership, but with a more personal and friendly atmosphere, you have found it.</p>
		</div>
		</div>
	  </div>
	</div>
</section>

	
<section class="offer_section">
<div class="container">
<div class="row">  

	<div class="col-sm-12">
	<div class="offer_header">
	<h3>Our Offers </h3>
	<div class="title_underline"></div>
	<!--<p>asd asd asd asd asdasdasdas dsad asdasda sdasdasdasdasd asdasd asdasd asdasdasd asdasda sdasdsa dasd asdsa das das das </p>-->
	</div>
	</div>

	<div class="offers_slid">
	
	<div class="item">
		<div class="col-sm-12">
		<div class="offer_thunail">
		<div class="hovereffect">
			<img class="img-responsive" src="images/home4.jpg" alt="">
			<div class="overlay">
			<a class="info" href="offer_form.php">Redeem Now</a>
			</div>
		</div>
		<div class="offer_content">
			<a href="offers.php">Get upto <b>70% off*</b> on New Offer for  engine with many other many other</a>
			<p>Valid till 30-Apr-2016</p>
			<div class="row">
			<div class="col-xs-6">		<!--	<p>11 NOV 2014 - 22 NOV 2014</p>	-->		</div>
			<div class="col-xs-6 price_detail">		<button onclick="location.href='offers_view.php';">VIEW OFFER</button>	</div>
			</div>
		</div>
		</div>
        </div>
	</div>
	
	<div class="item">
		<div class="col-sm-12">
		<div class="offer_thunail">
		<div class="hovereffect">
			<img class="img-responsive" src="images/home4.jpg" alt="">
			<div class="overlay">
			<a class="info" href="offer_form.php">Redeem Now</a>
			</div>
		</div>
		<div class="offer_content">
			<a href="offers.php">Get upto <b>70% off*</b> on New Offer for  engine with many other many other</a>
			<p>Valid till 30-Apr-2016</p>
			<div class="row">
			<div class="col-xs-6">		<!--	<p>11 NOV 2014 - 22 NOV 2014</p>	-->		</div>
			<div class="col-xs-6 price_detail">		<button onclick="location.href='offers_view.php';">VIEW OFFER</button>	</div>
			</div>
		</div>
		</div>
        </div>
	</div>
	
	<div class="item">
		<div class="col-sm-12">
		<div class="offer_thunail">
		<div class="hovereffect">
			<img class="img-responsive" src="images/home4.jpg" alt="">
			<div class="overlay">
			<a class="info" href="offer_form.php">Redeem Now</a>
			</div>
		</div>
		<div class="offer_content">
			<a href="offers.php">Get upto <b>70% off*</b> on New Offer for  engine with many other many other</a>
			<p>Valid till 30-Apr-2016</p>
			<div class="row">
			<div class="col-xs-6">		<!--	<p>11 NOV 2014 - 22 NOV 2014</p>	-->		</div>
			<div class="col-xs-6 price_detail">		<button onclick="location.href='offers_view.php';">VIEW OFFER</button>	</div>
			</div>
		</div>
		</div>
        </div>
	</div>
	
	<div class="item">
		<div class="col-sm-12">
		<div class="offer_thunail">
		<div class="hovereffect">
			<img class="img-responsive" src="images/home4.jpg" alt="">
			<div class="overlay">
			<a class="info" href="offer_form.php">Redeem Now</a>
			</div>
		</div>
		<div class="offer_content">
			<a href="offers.php">Get upto <b>70% off*</b> on New Offer for  engine with many other many other</a>
			<p>Valid till 30-Apr-2016</p>
			<div class="row">
			<div class="col-xs-6">		<!--	<p>11 NOV 2014 - 22 NOV 2014</p>	-->		</div>
			<div class="col-xs-6 price_detail">		<button onclick="location.href='offers_view.php';">VIEW OFFER</button>	</div>
			</div>
		</div>
		</div>
        </div>
	</div>
	
	<div class="item">
		<div class="col-sm-12">
		<div class="offer_thunail">
		<div class="hovereffect">
			<img class="img-responsive" src="images/home4.jpg" alt="">
			<div class="overlay">
			<a class="info" href="offer_form.php">Redeem Now</a>
			</div>
		</div>
		<div class="offer_content">
			<a href="offers.php">Get upto <b>70% off*</b> on New Offer for  engine with many other many other</a>
			<p>Valid till 30-Apr-2016</p>
			<div class="row">
			<div class="col-xs-6">		<!--	<p>11 NOV 2014 - 22 NOV 2014</p>	-->		</div>
			<div class="col-xs-6 price_detail">		<button onclick="location.href='offers_view.php';">VIEW OFFER</button>	</div>
			</div>
		</div>
		</div>
        </div>
	</div>
	
	<div class="item">
		<div class="col-sm-12">
		<div class="offer_thunail">
		<div class="hovereffect">
			<img class="img-responsive" src="images/home4.jpg" alt="">
			<div class="overlay">
			<a class="info" href="offer_form.php">Redeem Now</a>
			</div>
		</div>
		<div class="offer_content">
			<a href="offers.php">Get upto <b>70% off*</b> on New Offer for  engine with many other many other</a>
			<p>Valid till 30-Apr-2016</p>
			<div class="row">
			<div class="col-xs-6">		<!--	<p>11 NOV 2014 - 22 NOV 2014</p>	-->		</div>
			<div class="col-xs-6 price_detail">		<button onclick="location.href='offers_view.php';">VIEW OFFER</button>	</div>
			</div>
		</div>
		</div>
        </div>
	</div>
	
	<div class="item">
		<div class="col-sm-12">
		<div class="offer_thunail">
		<div class="hovereffect">
			<img class="img-responsive" src="images/home4.jpg" alt="">
			<div class="overlay">
			<a class="info" href="offer_form.php">Redeem Now</a>
			</div>
		</div>
		<div class="offer_content">
			<a href="offers.php">Get upto <b>70% off*</b> on New Offer for  engine with many other many other</a>
			<p>Valid till 30-Apr-2016</p>
			<div class="row">
			<div class="col-xs-6">		<!--	<p>11 NOV 2014 - 22 NOV 2014</p>	-->		</div>
			<div class="col-xs-6 price_detail">		<button onclick="location.href='offers_view.php';">VIEW OFFER</button>	</div>
			</div>
		</div>
		</div>
        </div>
	</div>
	
	<div class="item">
		<div class="col-sm-12">
		<div class="offer_thunail">
		<div class="hovereffect">
			<img class="img-responsive" src="images/home4.jpg" alt="">
			<div class="overlay">
			<a class="info" href="offer_form.php">Redeem Now</a>
			</div>
		</div>
		<div class="offer_content">
			<a href="offers.php">Get upto <b>70% off*</b> on New Offer for  engine with many other many other</a>
			<p>Valid till 30-Apr-2016</p>
			<div class="row">
			<div class="col-xs-6">		<!--	<p>11 NOV 2014 - 22 NOV 2014</p>	-->		</div>
			<div class="col-xs-6 price_detail">		<button onclick="location.href='offers_view.php';">VIEW OFFER</button>	</div>
			</div>
		</div>
		</div>
        </div>
	</div>
	
	<div class="item">
		<div class="col-sm-12">
		<div class="offer_thunail">
		<div class="hovereffect">
			<img class="img-responsive" src="images/home4.jpg" alt="">
			<div class="overlay">
			<a class="info" href="offer_form.php">Redeem Now</a>
			</div>
		</div>
		<div class="offer_content">
			<a href="offers.php">Get upto <b>70% off*</b> on New Offer for  engine with many other many other</a>
			<p>Valid till 30-Apr-2016</p>
			<div class="row">
			<div class="col-xs-6">		<!--	<p>11 NOV 2014 - 22 NOV 2014</p>	-->		</div>
			<div class="col-xs-6 price_detail">		<button onclick="location.href='offers_view.php';">VIEW OFFER</button>	</div>
			</div>
		</div>
		</div>
        </div>
	</div>
	
	<div class="item">
		<div class="col-sm-12">
		<div class="offer_thunail">
		<div class="hovereffect">
			<img class="img-responsive" src="images/home4.jpg" alt="">
			<div class="overlay">
			<a class="info" href="offer_form.php">Redeem Now</a>
			</div>
		</div>
		<div class="offer_content">
			<a href="offers.php">Get upto <b>70% off*</b> on New Offer for  engine with many other many other</a>
			<p>Valid till 30-Apr-2016</p>
			<div class="row">
			<div class="col-xs-6">		<!--	<p>11 NOV 2014 - 22 NOV 2014</p>	-->		</div>
			<div class="col-xs-6 price_detail">		<button onclick="location.href='offers_view.php';">VIEW OFFER</button>	</div>
			</div>
		</div>
		</div>
        </div>
	</div>
	




	</div>
		
	<div class="col-sm-12 view_all_offer align_center">
	<input class="butt_slide" onclick="location.href='offers.php';" type="button" value="View more offer">
	</div>	
		
</div>
</div>
<a name="aboutus" id="aboutus">&nbsp;</a>
</section>


<section class="about_us">

<div class="container">
<div class="row">
<div class="col-sm-5 about_png">
<img src="images/about_us.jpg">
</div>
<div class="col-sm-7">
<h2>About Us</h2>
<div class="about_under"></div>
<p> We are one of the leading auto repair shops serving customers in Tucson. All mechanic services are performed by highly .We are one of the leading auto repair shops serving customers in Tucson. All mechanic services are performed by highly .We are one of the leading auto repair shops serving customers in Tucson. All mechanic services are performed by highly .We are one of the leading auto repair shops serving customers in Tucson.</p>
</div>
</div>
</div>

</section>
	
<section class="Feedback slider">
	<div class="feedback_slide">
	<div class="swiper-aa">
        <div class="swiper-wrapper">
			  <div class="swiper-slide">
			  <div class="container">
			  <div class="feedbach_center">
			  <div>
			  </div>
			  <div class="complaint_img">
			  <img src="images/pv vimal.jpg">
			  </div>
			  <p>
			  "I have taken several of the family cars here for the past several years and without exception the experiences have been outstanding. I would highly recommend this place to any one who wants great service, honest value, and really great people."
			  </p>
			  <h6>
			  </br>
			  </br>
			  YUVARAJ
			  </h6>
			  </div>
			  </div>
			  </div>
			  
			  <div class="swiper-slide">
			  <div class="container">
			  <div class="feedbach_center">
			  <div>
			  </div>
			  <div class="complaint_img">
			  <img src="images/pv vimal.jpg">
			  </div>
			  <p>
			  "I have taken several of the family cars here for the past several years and without exception the experiences have been outstanding. I would highly recommend this place to any one who wants great service, honest value, and really great people."
			  </p>
			  <h6>
			  </br>
			  </br>
			  YUVARAJ
			  </h6>
			  </div>
			  </div>
			  </div>
			  
			  <div class="swiper-slide">
			  <div class="container">
			  <div class="feedbach_center">
			  <div>
			  </div>
			  <div class="complaint_img">
			  <img src="images/pv vimal.jpg">
			  </div>
			  <p>
			  "I have taken several of the family cars here for the past several years and without exception the experiences have been outstanding. I would highly recommend this place to any one who wants great service, honest value, and really great people."
			  </p>
			  <h6>
			  </br>
			  </br>
			  YUVARAJ
			  </h6>
			  </div>
			  </div>
			  </div>
			  
	</div>
	</div>
	</div>
</section>





	
<section class="why_NAM">
	<div class="container">
	  <div class="row">
		<div class="col-sm-12">
		<div class="why_choos_us">
		<h2>Why NewUrbanMechanic?</h2>
		<div class="title_underline">
		</div>
		<p>
			We can help you with everything from an oil change to an engine change.
			We can handle any problem on both foreign.
		</p>
		</div>
		</div>
		
		<div class="comp_con-sec">
		<div class="col-sm-4">
		<div class="com_over_sec">
		  <h3>REMINDERS</h3>
		  <div class="icon_para_com">
		  <div class="icon_comp">
		  <img src="images/reminder.svg">
		  </div>
		  <div class="com_over_para">
		  <p>If you want the quality you would expect from the dealership, but with a more personal and friendly atmosphere, you have found it.</p>
		  </div>
		  </div>
		</div>
		</div>
		
		<div class="col-sm-4">
		<div class="com_over_sec">
		  <h3>SERVICE RECORDS</h3>
		  <div class="icon_para_com">
		  <div class="icon_comp">
		  <img src="images/service_record.svg">
		  </div>
		  <div class="com_over_para">
		  <p>If you want the quality you would expect from the dealership, but with a more personal and friendly atmosphere, you have found it.</p>
		  </div>
		  </div>
		</div>
		</div>
		
		<div class="col-sm-4">
		<div class="com_over_sec">
		  <h3>SAVES TIME & EFFORT</h3>
		  <div class="icon_para_com">
		  <div class="icon_comp">
		  <img src="images/save_time_effort.svg">
		  </div>
		  <div class="com_over_para">
		  <p>If you want the quality you would expect from the dealership, but with a more personal and friendly atmosphere, you have found it.</p>
		  </div>
		  </div>
		</div>
		</div>
		
		<div class="col-sm-4">
		<div class="com_over_sec">
		  <h3>INFORMED CHOICE</h3>
		  <div class="icon_para_com">
		  <div class="icon_comp">
		  <img src="images/informed_choice.svg">
		  </div>
		  <div class="com_over_para">
		  <p>If you want the quality you would expect from the dealership, but with a more personal and friendly atmosphere, you have found it.</p>
		  </div>
		  </div>
		</div>
		</div>
		
		<div class="col-sm-4">
		<div class="com_over_sec">
		  <h3>TRUST</h3>
		  <div class="icon_para_com">
		  <div class="icon_comp">
		  <img src="images/trust.svg">
		  </div>
		  <div class="com_over_para">
		  <p>If you want the quality you would expect from the dealership, but with a more personal and friendly atmosphere, you have found it.</p>
		  </div>
		  </div>
		</div>
		</div>
		
		<div class="col-sm-4">
		<div class="com_over_sec">
		  <h3>PEACE OF MIND</h3>
		  <div class="icon_para_com">
		  <div class="icon_comp">
		  <img src="images/peace_of_mind.svg">
		  </div>
		  <div class="com_over_para">
		  <p>If you want the quality you would expect from the dealership, but with a more personal and friendly atmosphere, you have found it.</p>
		  </div>
		  </div>
		</div>
		</div>
		</div>
		
	  </div>
	</div>
	<a name="contactus" id="contactus">&nbsp;</a>
</section>

<!--
<section class="insurance_home">
<div class="container">
<div class="row">
<div class="col-sm-10"><h3>On-line vehicle Insurance</h3></div>
<div class="col-sm-1"><input class="butt_slide" type="button" value="car"></div> 
<div class="col-sm-1"><input class="butt_slide" type="button" value="bike"></div> 
</div>
</div>
</div>
</section>
-->
<!--
<div class="logo_section">
	<div class="container">
			<div id="logo_brand" class="owl-carousel owl-theme">
			  <div class="item"><img src="images/logo (1).png" ></div>
			  <div class="item"><img src="images/logo (2).png" ></div>
			  <div class="item"><img src="images/logo (3).png" ></div>
			  <div class="item"><img src="images/logo (4).png" ></div>
			  <div class="item"><img src="images/logo (5).png" ></div>
			  <div class="item"><img src="images/logo (6).png" ></div>
			  <div class="item"><img src="images/logo (7).png" ></div>
			  <div class="item"><img src="images/logo (8).png" ></div>
			  <div class="item"><img src="images/logo (9).png" ></div>
			  <div class="item"><img src="images/logo (10).png" ></div>
			</div>
	</div>
</div>
-->


<section class="contact_section">		

	<div class="contact_us_home">

		<div class="container">

		<div class="row">

		<div class="col-sm-12">

		<h2>Contact Us</h2>

		</div>

		<form>

		<div class="col-sm-6">

		<div class="contact_input">

		<input type="text"  class="con_input_fild input_style" placeholder="Your Name *">

		<input type="text"  class="con_input_fild input_style" placeholder="Your Email *">

		<input type="email" class="con_input_fild input_style" placeholder="Your Phone">

		</div>

		</div>

		<div class="col-sm-6">

		<div class="contact_text">

		<textarea class="con_text_fild textarea_style"  placeholder="Message"></textarea>

		</div>

		</div>

		<div class="col-sm-12  align_right">

		<input class="butt_slide" value="Send" type="button">

		</div>

		

		</form>

		</div>

		</div>

	</div>

</section>





<?
include_once "footer.php";
?>
