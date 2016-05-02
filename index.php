<?php
if(isset($_POST['submit'])){
  $to = "looko95@gmail.com"; // this is your Email address
  $from = $_POST['email']; // this is the sender's Email address
  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $company = $_POST['company'];
  $budget = $_POST['budget'];
  $subject = "Form submission";
  $subject2 = "Copy of your form submission";
  $message = "Name: ". $name . "\nPhone: " . $phone ."\nCompany: " . $company . "\nBudget: ". $budget ."\n\nMessage: " . "\n" . $_POST['message'];

  $headers = "From:" . $from;
  mail($to,$subject,$message,$headers);
  echo '<script language="javascript">';
  echo 'alert("message successfully sent")';
  echo '</script>';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <link href='https://fonts.googleapis.com/css?family=Raleway:200,300,400,500,600,700,800' rel='stylesheet' type='text/css'>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title></title>
  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <link href="css/bootstrap-slider.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">

  <!-- Magnific Popup core CSS file -->
  <link rel="stylesheet" href="css/magnific-popup.css">

  <link rel="stylesheet" type="text/css" href="site-assets/slick/slick.css">
  <link rel="stylesheet" type="text/css" href="site-assets/slick/slick-theme.css">

</head>
<body>
  <div id="home"></div>

  <?php include 'header.php';?>

  <!-- MAIN SLIDER -->
  <header id="myCarousel" class="carousel slide">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for Slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <!-- Set the first background image using inline CSS below. -->
        <div class="fill" style="background-image:url('images/banner-1.png'); width:100%; "></div>
        <div class="carousel-caption">
          <div class="first-slide">
            <h2 class="carousel-headline">Social Media Marketing</h2>
            <p class="carousel-text">
              Customers are interacting with brands through social media.
              If implemented correctly, SMM can bring remarkable success
              to your business.
            </p>
            <a class="btn btn-large btn-primary find-out-more" href="#">find out more</a>
          </div>
        </div>
      </div>
      <div class="item">
        <!-- Set the second background image using inline CSS below. -->
        <div class="fill" style="background-image:url('images/banner-2.png'); width:100%; height:100%"></div>
        <div class="carousel-caption">
          <div class="second-slide">
            <h2 class="hidden-lg carousel-headline">SEO</h2>
            <p class="carousel-text">
              Search Engine Optimization is fundamental. <br> Our SEO strategies can grant you a high-ranking placement in search results.
            </p>
           
            
            <a class="btn btn-large btn-primary find-out-more" href="#">find out more</a>
          </div>
        </div>
      </div>
      <div class="item">
        <!-- Set the third background image using inline CSS below. -->
        <div class="fill" style="background-image:url('images/banner-3.png'); width:100%; height:100%"></div>
        <div class="carousel-caption">
          <h2 class="carousel-headline">graphic design &amp; web development</h2>
          <p class="carousel-text">
            Our services cover all aspects of Google Analytics, from initial setup to training,
            advanced tracking solutions and custom features.
          </p>
          <a class="btn btn-large btn-primary find-out-more" href="#">find out more</a>
        </div>
      </div>
      <div class="item">
        <!-- Set the third background image using inline CSS below. -->
        <div class="fill" style="background-image:url('images/analytics/banner-bg.png'); width:100%; height:100%"></div>
        <div class="carousel-caption">
          <h2 class="carousel-headline">Advanced Web Analytics</h2>
          <p class="carousel-text">
            Our services cover all aspects of Google Analytics, from initial setup to training,
            advanced tracking solutions and custom features.
          </p>
          <a class="btn btn-large btn-primary find-out-more" href="#">find out more</a>
        </div>
      </div>

    </div>
  </div>


  <!-- Controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="icon-prev"></span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="icon-next"></span>
  </a>
</header>
<div id="startchange"></div>
<!-- END OF MAIN SLIDER -->
<!-- <div class="boja"></div> -->
<!-- ABOUT US -->
<div class="fill" id="about-us" style="background-image: url(images/home/about-us-bg.png);">
  <div class="container-fluid section-shadow">
    <div class="container">
      <div class="section animation-element slide-left" id = "about-us-text">
        <p class="headline">about <span class="headline-pink">us</span></p>
        <div class="row">
          <div id="about-us-left" class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <h4>Who are we?</h4>
            <p>Bacon ipsum dolor amet bacon pork belly aliquip pig picanha spare ribs consectetur reprehenderit. Ribeye minim jerky magna, bresaola frankfurter hamburger cow fatback lorem spare ribs salami mollit shankle. Bresaola magna bacon fatback biltong. Lorem cupim elit venison, bresaola tongue cow.</p>
            <p>Beef spare ribs tempor landjaeger alcatra ullamco sirloin ham hock exercitation. Alcatra porchetta mollit, jowl laboris et nulla culpa beef ribs non tail ribeye picanha ullamco. In meatball corned beef nulla nisi, ribeye mollit ut dolore shankle andouille rump nostrud.</p>
          </div>
          <div id="about-us-right" class="col-lg-6 col-md-6 col-sm-12 col-xs-12" >
            <h4>What we do?</h4>
            <p>Bacon ipsum dolor amet bacon pork belly aliquip pig picanha spare ribs consectetur reprehenderit. Ribeye minim jerky magna, bresaola frankfurter hamburger cow fatback lorem spare ribs salami mollit shankle. Bresaola magna bacon fatback biltong. Lorem cupim elit venison, bresaola tongue cow.</p>
            <p>Beef spare ribs tempor landjaeger alcatra ullamco sirloin ham hock exercitation. Alcatra porchetta mollit, jowl laboris et nulla culpa beef ribs non tail ribeye picanha ullamco. In meatball corned beef nulla nisi, ribeye mollit ut dolore shankle andouille rump nostrud.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- END OF ABOUT US -->

<!-- OUR SERVICES -->
<div class="container">
  <div class="section" id="our-services">
    <p class="headline">our <span class="headline-pink">services</span></p>
    <div class=left>
      <img class="left-triangles triangles" src="images/home/gr_design_white.png" alt="">
      <div class="text">
        <div class="icon-container-left">
          <div class="icon-left" onclick="iconTextChangePrint()"><img src="images/category-assets/print.png" id="icon-print"><span id="icon-label-print">Print</span></div>
          <div class="icon-left" onclick="iconTextChangeWeb()"><img src="images/category-assets/web-and-apps.png" id="icon-web"><span id="icon-label-web">Web &amp Apps</span></div>
          <div class="icon-left" onclick="iconTextChangeBrand()"><img src="images/category-assets/brand-identity.png" id="icon-brand"><span id="icon-label-brand">Brand Identity</span></div>
        </div>
        <span class="icon-text-left" id="icon-text-left"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit iure sed quisquam provident animi hic quae impedit quam omnis nobis aut vero, ex necessitatibus magni deserunt dolorem, harum delectus tenetur.</span>
      </div>
    </div>
    <div class="right">
      <img class="right-triangles triangles" src="images/home/web_development_white.png" alt="">
      <div class="text">
        <div class="icon-container-right">
          <div class="icon-right clearfix" onclick="iconTextChangeCustom()"><img src="images/category-assets/custom-dev.png" id="icon-custom"><span id="icon-label-custom">Custom</span></div>
          <div class="icon-right clearfix" onclick="iconTextChangeWordPress()"><img src="images/category-assets/wordpress.png" id="icon-wordpress"><span id="icon-label-wordpress">Wordpress</span></div>
          <div class="icon-right clearfix" onclick="iconTextChangeShop()"><img src="images/category-assets/web-shop.png" id="icon-shop"><span id="icon-label-shop">Shop</span></div>
        </div>
        <span class="icon-text-right" id="icon-text-right"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit iure sed quisquam provident animi hic quae impedit quam omnis nobis aut vero, ex necessitatibus magni deserunt dolorem, harum delectus tenetur.</span>
      </div>
    </div>
    <div class=left>
      <img class="left-triangles triangles" src="images/home/seo_white.png" alt="">
      <div class="text-final">
        <div class="icon-container-leftbottom">
          <div class="icon-leftbottom" onclick="iconTextChangeSocial()"><img src="images/category-assets/social-media.png" id="icon-social"><span id="icon-label-social">Social</span></div>
          <div class="icon-leftbottom" onclick="iconTextChangeSEO()"><img src="images/category-assets/seo-analytics.png" id="icon-seo"><span id="icon-label-seo">SEO</span></div>
          <div class="icon-leftbottom" onclick="iconTextChangeLinks()"><img src="images/category-assets/link-building.png" id="icon-links"><span id="icon-label-links">Links</span></div>
          <div class="icon-leftbottom" onclick="iconTextChangeCampaign()"><img src="images/category-assets/campaign.png" id="icon-campaign"><span id="icon-label-campaign">Campaign</span></div>
        </div>
        <span class="icon-text-leftbottom" id="icon-text-leftbottom"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit iure sed quisquam provident animi hic quae impedit quam omnis nobis aut vero, ex necessitatibus magni deserunt dolorem, harum delectus tenetur.</span>
      </div>
    </div>
  </div>
</div>
<!-- END OF OUR SERVICES -->

<!-- DESKTOP PORTFOLIO -->
<div class="section-shadow-portfolio" id="portfolio">
  <div class="container">
    <p class="headline-portfolio">see the <span class="headline-pink">results</span> we have delivered for others</p>
  </div>
  <div class="container">
    <div class="section row hidden-sm hidden-xs" id="portfolio-slider">
      <div id="myPortfolio" class="carousel slide ">
        <!-- Carousel items -->
        <div class="carousel-inner">
          <div class="item active">
            <div class="col-lg-3 col-md-3 lightbox-silverspoon"><a href="#" class=" "><img src="images/portfolio-slider/silverspoon.png" class="image-responsive image-portfolio-slider " alt="Image" ></a>
            </div>
            <div class="col-lg-3 col-md-3 lightbox-senckenberg"><a href="#" class=" " ><img src="images/portfolio-slider/senckenberg.png" class="image-responsive image-portfolio-slider " alt="Image" ></a>
            </div>
            <div class="col-lg-3 col-md-3 lightbox-besttours"><a href="#" class=" " ><img src="images/portfolio-slider/besttours.png" class="image-responsive  image-portfolio-slider" alt="Image"></a>
            </div>
          </div>
          <!--/item-->
          <div class="item">

            <div class="col-lg-3 col-md-3 lightbox-lightology"><a href="#" class=" image-portfolio-slider " ><img src="images/portfolio-slider/lightology.png" class="image-responsive" alt="Image" ></a>
            </div>
            <div class="col-lg-3 col-md-3 lightbox-alamango"><a href="#" class=" image-portfolio-slider " ><img src="images/portfolio-slider/alamango.png" class="image-responsive" alt="Image" ></a>
            </div>
            <div class="col-lg-3 col-md-3 lightbox-cfj"><a href="#" class=" image-portfolio-slider " ><img src="images/portfolio-slider/cfj.png" class="image-responsive" alt="Image"></a>
            </div>

          </div>
          <!--/item-->
          <div class="item">

            <div class="col-lg-3 col-md-3 lightbox-decjibazar"><a href="#" class=" image-portfolio-slider " ><img src="images/portfolio-slider/decji-bazar.png" class="image-responsive" alt="Image" ></a>
            </div>
            <div class="col-lg-3 col-md-3"><a href="#" class=" image-portfolio-slider " ><img src="images/portfolio-slider/besttours.png" class="image-responsive" alt="Image" ></a>
            </div>
            <div class="col-lg-3 col-md-3"><a href="#" class="image-portfolio-slider " ><img src="images/portfolio-slider/besttours.png" class="image-responsive" alt="Image"></a>
            </div>

          </div>
          <!--/item-->
        </div>
        <!--/carousel-inner-->
        <a class="left carousel-control" href="#myPortfolio" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Prev</span>
        </a>
        <a class="right carousel-control" href="#myPortfolio" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <!--/myCarousel-->
    </div>
  </div>
  <!-- END OF DESKTOP PORTFOLIO -->

  <div class="container">
    <div class="section row hidden-lg hidden-md hidden-xs" id="portfolio-slider">
      <div id="myPortfolio-sm" class="carousel slide">
        <!-- Carousel items -->
        <div class="carousel-inner">
          <div class="item active">
            <div class="col-sm-5 lightbox-silverspoon"><a href="#" class="image-portfolio-slider "><img src="images/portfolio-slider/silverspoon.png" class="image-responsive" alt="Image" ></a>
            </div>
            <div class="col-sm-5 lightbox-senckenberg"><a href="#" class="image-portfolio-slider " ><img src="images/portfolio-slider/senckenberg.png" class="image-responsive" alt="Image" ></a>
            </div>
          </div>
          <!--/item-->
          <div class="item">
            <div class="col-sm-5 lightbox-besttours"><a href="#" class="image-portfolio-slider "><img src="images/portfolio-slider/besttours.png" class="image-responsive" alt="Image" ></a>
            </div>
            <div class="col-sm-5 lightbox-lightology"><a href="#" class="image-portfolio-slider " ><img src="images/portfolio-slider/lightology.png" class="image-responsive" alt="Image" ></a>
            </div>
          </div>
          <!--/item-->
          <div class="item">
            <div class="col-sm-5 lightbox-cfj"><a href="#" class="image-portfolio-slider "><img src="images/portfolio-slider/cfj.png" class="image-responsive" alt="Image" ></a>
            </div>
            <div class="col-sm-5 lightbox-alamango"><a href="#" class="image-portfolio-slider " ><img src="images/portfolio-slider/alamango.png" class="image-responsive" alt="Image" ></a>
            </div>
          </div>
          <div class="item">
            <div class="col-sm-5 lightbox-decjibazar"><a href="#" class="image-portfolio-slider "><img src="images/portfolio-slider/decji-bazar.png" class="image-responsive" alt="Image" ></a>
            </div>
            <div class="col-sm-5"><a href="#" class="image-portfolio-slider " ><img src="images/portfolio-slider/alamango.png" class="image-responsive" alt="Image" ></a>
            </div>
          </div>
          <!--/item-->
        </div>
        <!--/carousel-inner-->
        <a class="left carousel-control" href="#myPortfolio-sm" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Prev</span>
        </a>
        <a class="right carousel-control" href="#myPortfolio-sm" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <!--/myCarousel-->
    </div>
  </div>
  <!-- End of SM portfolio -->
  <div class="container">
    <div class="section row hidden-lg hidden-md hidden-sm" id="portfolio-slider">
      <div id="myPortfolio-xs" class="carousel slide">
        <!-- Carousel items -->
        <div class="carousel-inner">
          <div class="item active">
            <div class="col-xs-12 lightbox-silverspoon"><a href="#" class="image-portfolio-slider "><img src="images/portfolio-slider/silverspoon.png" class="image-responsive" alt="Image" ></a>
            </div>
          </div>
          <!--/item-->
          <div class="item">
            <div class="col-xs-12 lightbox-senckenberg"><a href="#" class="image-portfolio-slider "><img src="images/portfolio-slider/senckenberg.png" class="image-responsive" alt="Image" ></a>
            </div>
          </div>
          <!--/item-->
          <div class="item">
            <div class="col-xs-12 lightbox-alamango"><a href="#" class="image-portfolio-slider "><img src="images/portfolio-slider/alamango.png" class="image-responsive" alt="Image" ></a>
            </div>
          </div>
          <!--/item-->
          <div class="item">
            <div class="col-xs-12 lightbox-cfj"><a href="#" class="image-portfolio-slider "><img src="images/portfolio-slider/cfj.png" class="image-responsive" alt="Image" ></a>
            </div>
          </div>
          <!--/item-->
          <div class="item">
            <div class="col-xs-12 lightbox-lightology"><a href="#" class="image-portfolio-slider "><img src="images/portfolio-slider/lightology.png" class="image-responsive" alt="Image" ></a>
            </div>
          </div>
          <!--/item-->
          <div class="item">
            <div class="col-xs-12 lightbox-besttours"><a href="#" class="image-portfolio-slider "><img src="images/portfolio-slider/besttours.png" class="image-responsive" alt="Image" ></a>
            </div>
          </div>
          <!--/item-->
          <div class="item">
            <div class="col-xs-12 lightbox-decjibazar"><a href="#" class="image-portfolio-slider "><img src="images/portfolio-slider/decji-bazar.png" class="image-responsive" alt="Image" ></a>
            </div>
          </div>
          <!--/item-->
        </div>
        <!--/carousel-inner-->
        <a class="left carousel-control" href="#myPortfolio-xs" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Prev</span>
        </a>
        <a class="right carousel-control" href="#myPortfolio-xs" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <!--/myCarousel-->
    </div>
  </div>
  <!-- End of xs portfolio -->
</div>

<!-- BEGIN of quote-slider -->
<!--
<p class="">
  <a class="lightbox-besttours find-out-more btn btn-primary" href="site-assets/ajax/lb-besttours.html">Test Best Tours</a>
  <a class="lightbox-senckenberg find-out-more btn btn-primary" href="site-assets/ajax/lb-senckenberg.html">Test Senckenberg</a>
</p>
-->

<div class="container-fluid">
  <div class="quote-slider">
    <div class="slider-for">
      <div class="quote-content">
      	<?php include 'site-assets/quote/q-cfj.php' ?>
      </div>
      <div class="quote-content">
      	<?php include 'site-assets/quote/q-decjibazar.php' ?>
      </div>
      <div class="quote-content">
      	<?php include 'site-assets/quote/q-silverspoon.php' ?>
      </div>
      <div class="quote-content">
      	<?php include 'site-assets/quote/q-alamango.php' ?>
      </div>
      <div class="quote-content">
      	<?php include 'site-assets/quote/q-senckenberg.php' ?>
      </div>
      <div class="quote-content">
      	<?php include 'site-assets/quote/q-besttours.php' ?>
      </div>
      <div class="quote-content">
      	<?php include 'site-assets/quote/q-lightology.php' ?>
      </div>
    </div>
    <div class="slider-nav">
      <div><img src="images/quote-slider/cfj.png"></div>
      <div><img src="images/quote-slider/decji-bazar.png"></div>
      <div><img src="images/quote-slider/silverspoon.png"></div>
      <div><img src="images/quote-slider/alamango.png"></div>
      <div><img src="images/quote-slider/senckenberg.png"></div>
      <div><img src="images/quote-slider/besttours.png"></div>
      <div><img src="images/quote-slider/lightology-zone.png"></div>
    </div>
  </div>
</div>
<!-- END of quote-slider -->

<!-- CONTACT -->
<div class="fill" id="contact" style="background-image: url(images/home/contact-bg.png);">
  <div class="container-fluid">
    <div class="container">
      <div class="headline-contact"><span id="bold">contact</span> <span id="contact-light"> us</span></div>
      <form class="form-horizontal" role="form" method="post" action="index.php" id="form">
        <div class="container-fluid">
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <label for="name" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 control-label" id="name-label"><span class="purple">*</span>Name</label>
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <input type="text" class="form-control area" id="name" name="name" placeholder="" value="" required>
              </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <label for="phone" class="control-label col-lg-12 col-md-12 col-sm-12 col-xs-12" id="phone-label">Phone Number</label>
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <input type="text" class="form-control area" id="phone" name="phone" placeholder="" value="" required>
              </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <label for="email" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 control-label" id="email-label"><span class="purple">*</span>Email Address</label>
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <input type="email" class="form-control area" id="email" name="email" placeholder="" value="" required>
              </div>
            </div>


            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <label for="company" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 control-label" id="company-label">Company</label>
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <input type="text" class="form-control area" id="company" name="company" placeholder="" value="">
              </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <label for="company" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 control-label" id="company-label">Your site</label>
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <input type="text" class="form-control area" id="site" name="site" placeholder="" value="">
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" id="right-contact">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <label for="budget" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 control-label" id="budget-label">Your Budget</label>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <input  name="budget" id="ex8" data-slider-id='ex1Slider' tooltip-position="bottom" type="text" data-slider-min="500" data-slider-max="5000" data-slider-step="100" data-slider-value="2500"/>
                </div>
              </div>
              
              <div class="check col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                  <input type="checkbox" name="Web-Design" value="Web-Design"> <span>Web Design</span>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                  <input type="checkbox" name="Web-Development" value="Web-Development"> <span>Web Development</span>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                  <input type="checkbox" name="seo" value="seo"> <span>SEO</span>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                  <input type="checkbox" name="social-media-marketing" value="social-media-marketing"> <span>Social Media Marketing</span>
                </div>
              </div>

              <div class="col-lg-12  col-md-12  col-sm-12 col-xs-12">
                <label for="message" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 control-label" id="message-label">Tell us what you need</label>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <textarea class="form-control area" rows="4" name="message" required ></textarea>
                </div>
              </div>


            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <input id="submit" name="submit" type="submit" value="send" class="btn btn-primary  submit">
            </div>
          </div>
        </div>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- END OF CONTACT -->

<!-- FOOTER -->

<?php include 'footer-2.php';?>

<!-- END OF FOOTER -->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="site-assets/slick/slick.min.js"></script>
<!-- WUB javascript -->
<script src="js/wub.js"></script>
<script src="js/bootstrap-slider.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/smoothscroll.js"></script>


<!-- Magnific Popup core JS file -->
<script src="js/jquery.magnific-popup.js"></script>

</body>
</html>
