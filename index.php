<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Zest Grill</title>
<link rel="apple-touch-icon" sizes="57x57" href="images/favicons/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="images/favicons/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="images/favicons/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="images/favicons/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="images/favicons/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="images/favicons/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="images/favicons/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="images/favicons/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="images/favicons/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="images/favicons/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="images/favicons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="images/favicons/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="images/favicons/favicon-16x16.png">
<link rel="manifest" href="images/favicons/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
<meta name="description" content="Zest Grill is a modern day bar &amp; grill with a nice casual atmosphere. Put some Zest in your life!">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Menu Logic -->
<?php
require('js/menuLogic.php');
?>

<!-- Boot Strap -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- Main Style Sheet -->
<link rel="stylesheet" href="css/styles.css">

<!-- Animation Library -->
<link rel="stylesheet" type="text/css" href="css/animate.min.css">

<!-- Google Font API -->
<link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300" rel="stylesheet" type="text/css">
</head>
<body>
<?php
	include_once('js/analyticstracking.php'); 
?>
<div id="navigation">
  <ul id="navBar" class="visible-md visible-lg">
    <li data-slide="1" class="current"></li>
    <li data-slide="2"></li>
    <li data-slide="3"></li>
    <li data-slide="4"></li>
    <li data-slide="5"></li>
  </ul>
</div>
<div class="slide" id="slide1" data-slide="1">
  <video autoplay poster="images/comFrame1.jpg" id="bgvid" muted>
    <source src="images/commercialEdit.mp4" type="video/mp4">
  </video>
    <div id="logo_nav_container">
  <img class="wow fadeInUp"  src="images/logo2.svg" data-wow-delay=".5s" id="logo" alt="Zest Grill Logo"/>
  <div class="wow fadeIn text-center" id="bulletin" data-wow-delay="1.5s"><a class="nav_button" data-slide="2">Menu</a> <a class="nav_button" data-slide="3">Location</a> <a class="nav_button" data-slide="4">News</a> <a class="nav_button" data-slide="5">About Us</a>
  </div>
    </div>
  <a class="button downArrow" data-slide="2"></a> </div>
<div class="slide container-fluid" id="slide2" data-slide="2">
  <div class="window">
    <h1 class="wow fadeInUp" data-wow-delay="2s">Menu</h1>
    <div class="sub_window wow fadeIn container" data-wow-delay="1s">
      <div id="menu_choice"> <a id="drink">Drinks</a> <a id="brunch">Brunch</a> <a id="lunch">Lunch</a> <a id="dinner">Dinner</a> </div>
      <div id="menu">
        <div class="subMenu" id="drink_options">
        <div class="menu_time">
            <h3>*Subject to Change*</h3>
          </div>
          <?php 
		  	renderDrinks('Beer');
		  	renderDrinks('IPA');
			renderDrinks('Cider');
			renderDrinks('Signature Drinks');
			renderDrinks('Non-Alcoholic');
		   ?>
        </div>
        <div class="subMenu" id="brunch_options">
          <div class="menu_time">
            <h3>*Served on Sunday from 11am to 3pm*</h3>
          </div>
          <div class="row">
          <?php renderMenu("brunch"); ?>
          </div>
        </div>
        <div class="subMenu" id="lunch_options">
          <div class="menu_time">
            <h3>*Served from 11am to 5pm*</h3>
          </div>
          <div class="row">
          <?php renderMenu("lunch"); ?>
          </div>
        </div>
        <div class="subMenu" id="dinner_options">
          <div class="menu_time">
            <h3>*Served from 5pm to Close*</h3>
          </div>
          <div class="row">
          <?php renderMenu("dinner"); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <a class="button downArrow" data-slide="3"></a> </div>
<div class="slide container-fluid" id="slide3" data-slide="3">
  <div class="window">
    <h1 class="wow fadeInUp" data-wow-delay="2s">Location</h1>
    <div class="sub_window wow fadeIn container location" data-wow-delay="1s">
    <div id="map-canvas"></div>
      <div class="wow fadeIn col-xs-12 col-md-4 col-lg-3" data-wow-delay="1.5s" id="map_overlay">
        <h2>Summerville</h2>
        <div class="infoBlock"> <img class="inline" src="images/icons/telephone.png" width="24" height="24"/>
          <h3>Phone</h3>
          <br>
          <a href="tel:8438753770">(843)-875-3770</a><br>
        </div>
        <div class="infoBlock"> <img class="inline" src="images/icons/mail.png" width="24" height="24"/>
          <h3>Email</h3>
          <br>
          <a href="mailto:support@zestgrill.com">Support@zestgrill.com</a> </div>
        <div class="infoBlock"> <br>
          <img class="inline" src="images/icons/clock.png" width="24" height="24"/>
          <h3>Hours</h3>
          <br>
          <p>Monday-Wednesday: 11am-10pm <br>
            Thursday-Saturday 11am-Midnight+ <br>
            Sunday: 11-3 for Brunch</p>
        </div>
        <div class="infoBlock"> <img class="inline" src="images/icons/address.png" width="24" height="24"/>
          <h3>Address</h3>
          <br>
          <a target="_blank" href="https://www.google.com/maps/place/Zest+Grill/@33.018819,-80.176708,17z/data=!3m1!4b1!4m2!3m1!1s0x88fe8b65647e5619:0xcdc33cc0cbfc2004">100 West Richardson Avenue <br>
          Summerville, SC 29483</a> </div>
        <div class="infoBlock"> <br>
          <img class="inline" src="images/icons/happy.png" width="24" height="24"/>
          <h3>Review Sites</h3>
          <br>
          <a target="_blank" href="https://www.facebook.com/zestgrillsummerville">Facebook</a><br>
          <a target="_blank" href="https://plus.google.com/+Zestgrill/about">Google+</a><br>
          <a target="_blank" href="http://www.yelp.com/biz/zest-grill-summerville-2">Yelp</a><br>
          <a target="_blank" href="http://www.tripadvisor.com/Restaurant_Review-g54456-d6963878-Reviews-Zest_Grill-Summerville_South_Carolina.html">TripAdvisor</a> </div>
      </div>
    </div>
    <a class="button downArrow" data-slide="4"></a> </div>
</div>
<div class="slide container-fluid" id="slide4" data-slide="4">
  <div class="window">
    <h1 class="wow fadeInUp" data-wow-delay="2s">News</h1>
    <div class="sub_window wow fadeIn container news_reviews_container" data-wow-delay="1s">
        <div class="reviews col-xs-12 col-md-4"> <img class="img-responsive" alt="salad" src="images/salad.jpg"/>
          <p>Rent Zest Out!</p>
          <ul>
            <li>Rent Zest for special occasions! Whether it is an open bar engagement or you simply need a place to gather, Zest can be there. No matter the request, Zest will do its best to provide a customized experience to suit your needs! Examples of what we can provide: Wine Tasting, Beer Tasting, customized gourmet dining, Fund Raisers and Business Parties. Rent out the whole restaurant, bar only, half the dining room or our beautiful outdoor patio. If you can think it we can more than likely do it!  Prices vary depending on what night of the week it is and what area is to be rented.</li>
          </ul>
        </div>
        <div class="reviews col-xs-12 col-md-4"> <img class="img-responsive" alt="zest's bar" src="images/sandwich.jpg"/>
          <p>Facebook Reviews</p>
          <ul>
            <li>"Excellent service from our server Morgan. She knew her menu, made excellent suggestions and was extremely friendly. The dinner menu had a variety of items which made it difficult in deciding. We were a party of four men out on our own away from the ladies and we wanted to relax and enjoy the surroundings and each other's company. Zest was the perfect place for this. Our food was very good as was the free wine tasting we experienced. We will return." -Facebook Fan</li>
          </ul>
        </div>
        <div class="reviews col-xs-12 col-md-4"> <img class="img-responsive" alt="servers and lamb" src="images/grits.jpg"/>
          <p>UrbanSpoon Reviews</p>
          <ul>
            <li>"We had a FANTASTIC meal at Zest! The Lamb was prepared perfect and the tenderloin was out of this world! The atmosphere was laid back with a very warm modern feel. The staff was friendly and fun. A good beer and wine selection along with perfectly cooked food made our experience a 10 out of 10. Can't wait to go back again!
              Get out and support this wonderful new restaurant Summerville! You will be glad you did!" -UrbanSpoon Fan</li>
            <li>"Finally something new &amp; different in Summerville! A friend &amp; I visited the first time for lunch &amp; were delighted with the food &amp; service. I had the pork tenderloin grilled cheese with gingered peaches &amp; my friend had the salmon salad. I took my husband for dinner a few nights ago &amp; we were equally pleased. It was hard to choose because everything looked so good but I decided on the rack of lamb &amp; my husband had the special which was Cajun fried chicken with red rice &amp; collard greens. Yum!!! The atmosphere is warm &amp; welcoming &amp; the staff is friendly &amp; helpful. We will definitely be returning regularly. Try their house made sangria!" -UrbanSpoon Fan</li>
          </ul>
        </div>
    </div>
  </div>
  <a class="button downArrow" data-slide="5"></a> </div>
<div class="slide" id="slide5" data-slide="5">
  <div class="window">
    <h1 class="wow fadeInUp" data-wow-delay="2s">About Us</h1>
    <div class="sub_window wow fadeIn container" data-wow-delay="1s">
      <div id="about" class="row">
        <h2 class="col-xs-12 col-md-6 col-centered">Zest Grill is the collaboration of 2 entrepreneurs with a passion for cooking, serving the people, and being an integral part of the community.
          Together, they have a combined 40 years of restaurant &amp; management experience. This team, with diverse backgrounds and leadership skills, is excited to present their lively menu to this wonderful town.
        </h2>
      </div>
      <div id="owner_container" class="row center-block">
          <div class="owner col-xs-12 col-md-3"></div>
        <div class="owner col-xs-12 col-md-3"><img class="wow bounceIn img-responsive" data-wow-delay="1.5s" src="images/zest_owners/erik.png" alt="Picture of Erik Dyke"/>
          <p class="wow fadeInUp text-justify" data-wow-delay="2.5s">Erik Dyke moved to Charleston in 1993 when he was stationed here as an engineer in the Air Force. After working in the engineering &amp; architectural field for many years, he &amp; his wife Julie opened a soup, salad &amp; sandwich shop, which they've been operating for 4 1/2 years.</p>
        </div>
        <div class="owner col-xs-12 col-md-3"><img class="wow bounceIn img-responsive" data-wow-delay="1.5s" src="images/zest_owners/julie.png" alt="Picture of Julie Dyke"/>
          <p class="wow fadeInUp text-justify" data-wow-delay="3s">Julie Dyke has a background of 20 years in management &amp; customer service &amp; has worked in restaurants with front and back of house experience.</p>
        </div>
          <div class="owner col-xs-12 col-md-3"></div>
      </div>
    </div>
  </div>
  <a class="button last downArrow" data-slide="1"></a> </div>

<!-- jQuery Library --> 
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script> 
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script> 

<!-- Boot Strap --> 
<script src="js/bootstrap.min.js"></script> 

<!-- Google Map API and Self-configured script --> 
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyApDmoKKr1GOvNvf56eJSrbigSjeQt6QVs"></script> 
<script type="text/javascript" src="js/google-map.js"></script> 

<!-- History Tracking --> 
<script type="text/javascript" src="js/history/jquery.history.js"></script> 
<script type="text/javascript" src="js/waypoints.min.js"></script> 

<!-- "Wow" animations --> 
<script src="js/wow.min.js"></script>

<!-- Self-Configured Behavior Script --> 
<script src="js/frontEndLogic.js" type="text/javascript"></script>
<script>
    new WOW().init();
</script>
</body>
</html>