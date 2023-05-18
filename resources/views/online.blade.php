
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>EWE NJE &mdash SMART STAND;</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
    <script type="text/javascript" src="chat/js-w/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="chat/css-w/floating-wpp.css">
    <link rel="stylesheet" href="chat/css-w/myWeb.css">
    <script type="text/javascript" src="chat/js-w/floating-wpp.js"></script> 

    <link href="https://fonts.googleapis.com/css?family=Rubik:400,700" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/rangeslider.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    
    <header class="site-navbar" role="banner">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-11 col-xl-4">
            <h1 class="mb-0 site-logo"><a href="index.html" class="text-white mb-0">EWE NJE-WP<span class="text-primary"></span> </a></h1>
          </div>
          <div class="col-12 col-md-8 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="index.html"><span>Home</span></a></li>
                <li><a href="about.html"><span>About Us</span></a></li>
         
                <li class="active"><a href="online.html"><span>Book Online</span></a></li>
                <li><a href="contact.html"><span>Contact</span></a></li>
              </ul>
            </nav>
          </div>


          <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

          </div>

        </div>
      </div>
      
    </header>

      <br>
      <div class="container">
        <div class="row pt-5 mt-5">
          <div class="col-12 text-md-center text-left">
              <h3 style="color: black;">Personal Details</h3>
               <form  action="rental.php" id="bookings" method="post" enctype="multipart/form-data" class="form-box">
                <h3 class="h4 text-black mb-4"></h3>
                <div class="form-group">
                  <input type="text" name="fname" id="Name" placeholder="First Name" required>
                  <input type="text" name="nname" id="nname" placeholder="Nickname" required>
                  <input type="text" name="cnum" id="contact-1" class="form-group" placeholder="Contact number" required>
				  <div class="form-group">
				  <br>
           
                </div>
			
                </div>
                <div class="form-group">
                  
				   <input type="text" name="altnum" id="contact-2" placeholder="Alternative number" required>
                  <input type="text" name="email" id="email" class="form-group" placeholder="Email">
                  <input type="text" name="address" id="address" placeholder="Home address" required>
                  

<br><br>						
	<h4 style="color: black;">Select rental dates</h4>
	<span><p>Price per day R40.00 | Delivey R59.00</p><span>
		<label>Start date:</label><input type="date" id="startDate" value="" name="startDate"onchange="update()"; required>
		<label>End date:</label><input type="date" id="endDate" value="" name="endDate" onchange="update();"required><br>
	
			
	<!--<label>Date out:</label><span id="dateOut" name ="date_out"></span><br>
	<label>Date return:</label><span id="dateReturn" name = "date_return"></span><br> -->
	<label>Total days of Rental:</label><span id="rental_days" name = "days_rented"></span><br>
	<label>Total price with Delivery R</label><span id="price_with_ship" name="total_price_noShip"></span><br>
	<label>Total price without Delivery R</label><span id="price_noship" name = "total_price_Ship"></span><br>
	
			<button onclick ="dateRental()" class="btn btn-pill btn-primary btn-md text-white">Submit</button> 
		
       <script>
         const d = new Date();
				startDate.value,	endDate.value  = d;
			
				update();
				
				function update(){
				
				(!startDate.value || !endDate.value);
				
				var sDate = new Date(startDate.value);
				var eDate = new Date (endDate.value);
				
				var tD = sDate < eDate? eDate.getTime() - sDate.getTime() : 0;
				var dD = tD / (1000 * 60 * 60 * 24);
				
				var [price_ship, price_noShip] = standRental(dD,40.00, 59.00);
				
			//dateOut.textContent = sDate.toDateString();
			//dateReturn.textContent = eDate.toString();
				rental_days.textContent = dD;
				price_with_ship.textContent = price_ship;
				price_noship.textContent = price_noShip;
				}
				
				function standRental(dD, itemAmount, shipment){
				var rentalWith = dD * itemAmount + shipment;
				var rentNoShip = dD * itemAmount;
				return [rentalWith, rentNoShip];
         
       let rentTotal = document.getElementsByTagName("total_price_noShip");
       rentTotal.textContent = rentalWith;

				}


	 
	   </script>
	   
			             
            
      <br><br><br>
       <div class="col-12 text-md-center text-left">
            <p>
           <hr>
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> <br>Powered by EWE NJE-WP
            </p>
			
	

  <script src="js/jquery-3.3.1.min.jss"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>

  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/rangeslider.min.js"></script>
  

 <!--WhatsApp start-->
 <div class="whatsapp" id="myButton"></div>
 <script type="text/javascript">
 $(function () {
     $('#myButton').floatingWhatsApp({
         phone: '+27848330005',
         popupMessage: 'We are ready for you',
         showPopup: true,
         showOnIE: false,
         headerTitle: 'Welcome to EWE NJE',
         headerColor: '#ea728c',
         backgroundColor: 'navy',
         buttonImage: '<img src="chat/img-w/whatsapp.svg" />'
     });
 });
</script>	
<!--WhatsApp end-->


  <script src="js/typed.js"></script>
            <script>
            var typed = new Typed('.typed-words', {
            strings: ["in touch with us"],
            typeSpeed: 80,
            backSpeed: 80,
            backDelay: 4000,
            startDelay: 1000,
            loop: false,
            showCursor: true
            });
            </script>

  <script src="js/main.js"></script>
  
  </body>
</html>