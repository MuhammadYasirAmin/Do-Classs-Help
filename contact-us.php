<!DOCTYPE html>
<html lang="en">
  <head>
     
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="follow, index"/>
    <link rel="shortcut icon" href="icon/fav.png">
    <script src="js/jquery.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap&family=Fredoka+One&family=Source+Sans+Pro:wght@200;300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
    
<title>Contact Us | doclasshelp.com</title>
<meta name="description" content="Feel free to contact our online classes experts, you can also get assistance by online chat or phone. Contact us 24/7 live support.">
<meta name="Keywords" content="contact us, contact me, signup now, discount, offer, order now, chat, call, phone, live support, online">
<link rel="canonical" href="https://doclasshelp.com/contact-us.php"/>
<link rel="alternate" href="https://doclasshelp.com/contact-us.php" hreflang="en-us"/>

<script src="https://apps.elfsight.com/p/platform.js" defer></script>
<div class="elfsight-app-2c362e2a-fbb2-443b-bc2d-7e33ed7a64a6"></div>


</head>
  <body>   
    <?php include_once 'components/header.php'; ?>
<div class="inner_page_banner">
	 <div class="container">
          <div class="row">
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          	        <h3>Contact Us</h3>
               </div>
          </div>  
     </div>
</div>

<div class="terms_section">
	 <div class="container">
		  <div class="row">
			   <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12"></div>		   
			   
			   <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
				    <div class="terms_section_form">
						 <h5>Order <span class="bold_blue">Right Away</span> To Score Top Grades </h5>
					     <form method="post" action="php/mail.php" onsubmit="return checkform0(this);">
							   <div class="form-group">
								    <label>Your name *</label>
								    <input type="text" class="form-control" required="required" name="Lead_Name" onkeypress="return Validate_name(event);">
							   </div>
							   <div class="form-group">
								    <label>Your email address *</label>
								    <input type="email" class="form-control" required="required" name="Lead_Email" onkeypress="return Validate_email(event);">
							   </div>
							   <div class="form-group">
								    <label>Phone Number *</label>
								    <input class="form-control" type="number" required="required" name="Lead_Phone" onkeypress="return Validate_number(event);">
							   </div>
							   <div class="form-group">
								    <label>Message *</label>
								    <textarea class="form-control" rows="3" name="Lead_Message" onkeypress="return Validate_message(event);"></textarea>
							   </div>
							  
								<button type="submit" class="cont_but" name="leads_sbmit_btn">Submit</button>
						</form>
				    </div>
			   </div>
			    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12"></div>	
		  </div>
	 </div>
</div>

<?php include_once 'components/footer.php'; ?>
<script src="js/bootstrap.min.js"></script>
<script src="js/function.js"></script>
<script src="js/owl.carousel.js"></script> 
<div class="floating_wrap">
    <div class="btns_wrap"> 
        <a href="javascript:void(Tawk_API.toggle())" class="chat_wrap" onclick="setButtonURL();"> <span class="icoo"><i class="fa fa-commenting-o" aria-hidden="true"></i></span> <span>Chat with Experts</span> </a>
        <a href="tel:+1 (480) 977-3587" class="call_wrap"> <span class="icoo"><i class="fa fa-phone" aria-hidden="true"></i></span> <span>+1 (480) 977-3587</span> </a> </div>
</div>

<script>
	$(document).ready(function() {
		$('ul.nav li.dropdown').hover(function() {
		  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
		}, function() {
		  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
		});
 	});
 	// Tabs
  $('.tab ul.tabs').addClass('active').find('> li:eq(0)').addClass('current');
    $('.tab ul.tabs li a').on('click', function (g) {
        var tab = $(this).closest('.tab'), 
        index = $(this).closest('li').index();
        tab.find('ul.tabs > li').removeClass('current');
        $(this).closest('li').addClass('current');
        tab.find('.tab_content').find('div.tabs_item').not('div.tabs_item:eq(' + index + ')').slideUp();
        tab.find('.tab_content').find('div.tabs_item:eq(' + index + ')').slideDown();
        g.preventDefault();
  });
 	
/* owl review*/
$(document).ready(function() {
     
      $("#owl-demo1").owlCarousel({
        autoplay: true,
        autoPlay: 5000, 
        items : 1,
        itemsDesktop: [1000, 1],
        itemsDesktopSmall: [900, 1],
        itemsTablet: [600,1],
        center: true,
        loop:true,
        autoplayHoverPause:true,
        martSpeed : 1200,
        navigation : false,
        pagination : true,
      });
      
       
 });



 const pics = document.querySelector(".testimonial-pics");
 const textFull = document.querySelector(".testimonial-contents");

for (pic of pics.children) {
  pic.addEventListener("click", function() {
    for (elem of pics.children) {
      elem.classList.remove("active");
    }
    this.classList.add("active");

    const current = Number(this.getAttribute("id"));

    for (text of textFull.children) {
      text.classList.remove("active");
    }
    textFull.children[current].classList.add("active");
  });
}
  
</script> 
<script>
	// counter
  $('.counter').each(function () {
     var size = $(this).text().split(".")[1] ? $(this).text().split(".")[1].length : 0;
     $(this).prop('Counter', 0).animate({
        Counter: $(this).text()
     }, {
        duration: 5000,
        step: function (func) {
           $(this).text(parseFloat(func).toFixed(size));
        }
     });
  });
</script>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/61de3359f7cf527e84d1a8fb/1fp5vh5nh';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

</body>