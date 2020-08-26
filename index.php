<?php

session_start();

if(!isset($_SESSION['username'])){
  ?>
    <script>
      alert("Plz login!");
    </script>
  <?php
  header('location:login1.php');
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, minimum-scale=1, maximum-scale=1, user-scalable=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js" integrity="sha512-CEiA+78TpP9KAIPzqBvxUv8hy41jyI3f2uHi7DGp/Y/Ka973qgSdybNegWFciqh6GrN2UePx2KkflnQUbUhNIA==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js" integrity="sha512-d8F1J2kyiRowBB/8/pAWsqUl0wSEOkG5KATkVV4slfblq9VRQ6MyDZVxWl2tWd+mPhuCbpTB4M7uU/x9FlgQ9Q==" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   
    
    <link rel="stylesheet" type="text/css" href="homepage.css">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-scroll">
    <div class="container-fluid">
        <a href="#" class="navbar-brand"><img class="logo" src="img/p0wm1a90.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text-center" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="" class="nav-link text-dark">
                      Features</a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link text-dark">Pricing</a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link text-dark">FAQ</a>
                </li>
                <li class="nav-item">
                <a href="login1.php"><button class="btn text-center">Login</button></a>
                </li>
                <li class="nav-item">
                  <a href="login.php"><button class="btn text-center">Sign Up</button></a>
                </li>
                <li class="nav-item">
                  <a href="logout.php"><button class="btn text-center">Logout</button></a>
                </li>
            </ul>
        </div>
    </div>
    </nav>

    <div class="img1 mx-auto d-block">
      <img src="img/p0wm1a90.png"><br>
    </div>

    <div class="text">
      <h1>Create your Online Catalogue<br>
        Receive orders on WhatsApp</h1>
    </div>

    <div class="text">
      <h5>Get your custom Shop URL<br>
        No Payment Gateway Required<br>
        $1/month</h5>
    </div>

    <center>
      <button class="button text-center">Login</button>
      <button class="button text-center">Live Demo</button>
      <button class="button text-center">Sign Up</button>
    </center>

    <div class="txt">
      <p>Zero Commissions | Cancel Anytime</p>
    </div>


    <div class="row">
    <div class="mx-auto d-block">
      <img class="low" src="img/c4ljblqv.jpg" width="190">
      <img class="up" src="img/ktmj0ec4.jpg" width="190">
    </div>
    </div>

    <center>
      <button class="button1 text-center">Product Hunt Embed</button>
    </center>

    <div class="txt">
      <h1>Demos</h1>
      <h4>Tailor made demos to inspire you and get started to take orders on WhatsApp</h4>
    </div>

    <div class="text-center">
      <h4><?php echo $_SESSION['username']; ?> &nbsp; Welcome to catagory!!</h4>
    </div>

    <section class="service-area">
      <div class="container">
          

<div class="row">
  
  <div class="col-md-4 col-sm-6 col-xs-12">
      <div class="service-wrap text-center">
          <h6>Cafes & Restaurants</h6>
          <div class="service-icon">
          <i class="fa-2x fa fa-cutlery"></i>
          </div>
          <a href="#"><p>
Get your cafe online now! This can be used for small cafes, food stalls, pop up stores etc.


</p></a>
      </div>

  </div>

  <div class="col-md-4 col-sm-6 col-xs-12">
      <div class="service-wrap text-center">
          <h6>Jewelry Store</h6>
          <div class="service-icon">
          <i class="fa-2x fa fa-magic"></i>
          </div>
          <a href="#"><p>




Selling custom made jewelry? View this demo to be inspired</p></a>
      </div>
  </div>

  <div class="col-md-4 col-sm-6 col-xs-12">
      <div class="service-wrap text-center">
          <h6>Florists</h6>
          <div class="service-icon">
          <i class="fa-2x fa fa-leaf"></i>
          </div>
          <a href="#"><p>
Neighborhood florists deserve the right to go online now!</p></a>
      </div>
  </div>

</div>

      </div>
  </section>

<div class="container-">
  <div class="row">
  
      <div class="col-sm-6">
          <div class="centerBlock1">
            
            <h1>Your Dashboard</h1>
            <h4>So simple, you will fall in love with it.</h4>
            <div class="col-lg-2 col-2 service-icons">
              <i class="fa-2x fa fa-gift"></i>
            </div>
            <div class="col-lg-10 col-10">
            <h6><b>Product management</b></h6>
            <p>Manage your products, description & pricing.</p>
            </div>
            <div class="col-lg-2 col-2 service-icons">
            <i class="fa-2x fa fa-shopping-cart"></i></div><div class="col-lg-10 col-10"><h6><b>Catalog management</b></h6>
            <p>Categorize your products to help your shoppers find products easily.</p></div>
            <div class="col-lg-2 col-2 service-icons">
            <i class="fa-2x fa fa-window-restore"></i></div><div class="col-lg-10 col-10"><h6><b>Store Settings</b></h6>
            <p>Setup your store link, currency, payment instructions & delivery fees.</p></div>
            </div>

            

              

          </div>
          <div class="col-sm-6">
            <div class="centerBlock2">
              <img class="col_img" src="img/mw2f0nq0.png">
              

              

          </div>
      </div>
  </div>
</div>






<!--<div class="container-">
  <div class="row">
  
    <div class="col-sm-6">
      <div class="centerBlock2">
        <img class="col_imgs" src="img/e1s03h2f.png">

    </div>


          </div>
          

          <div class="col-sm-6">
            <div class="centerBlock3">
              
              <h1>Your Dashboard</h1>
              <h5>So simple, you will fall in love with it.</h5>
              <div class="col-lg-2 col-2 service--icon">
                <i class="fa-2x fa fa-gift"></i>
              </div>
              <div class="col-lg-10 col-10 txt">
              <h6><b>Product management</b></h6>
              <p>Manage your products, description & pricing.</p>
              </div>
              <div class="col-lg-2 col-2 service--icon">
              <i class="fa-2x fa fa-shopping-cart"></i></div><div class="col-lg-10 col-10 txt"><h6><b>Catalog management</b></h6>
              <p>Categorize your products to help your shoppers find products easily.</p></div>
              <div class="col-lg-2 col-2 service--icon">
              <i class="fa-2x fa fa-window-restore"></i></div><div class="col-lg-10 col-10 txt"><h6><b>Store Settings</b></h6>
              <p>Setup your store link, currency, payment instructions & delivery fees.</p></div>
  
  
              <div class="col-lg-2 col-2 service-icon">
                <i class="fa-2x fa fa-check"></i>
              </div>
    
              <div class="col-lg-10 col-10 txt">
                <h6><b>Receive orders on WhatsApp</b></h6>
              </div>
  
              <div class="col-lg-2 col-2 service-icon">
                <i class="fa-2x fa fa-check"></i>
              </div>
    
              <div class="col-lg-10 col-10 txt">
                <h6><b>Super fast on Web & Mobile</b></h6>
              </div>
  
              <div class="col-lg-2 col-2 service-icon">
                <i class="fa-2x fa fa-check"></i>
              </div>
    
              <div class="col-lg-10 col-10 txt">
                <h6><b>No commissions, ever!</b></h6>
              </div>
    
              </div>
  

      </div>
  </div>
</div>------->

<div class="container-">
  <div class="row">
  
      <div class="col-sm-6">
          <div class="centerBlock1">
            
            <h1>Your E-Store</h1>
            <h4>Your customers will love you for this blazing fast and fun experience</h4>
            <div class="col-lg-2 col-2 service-icons">
              <i class="fa-2x fa fa-phone-square"></i>
            </div>
            <div class="col-lg-10 col-10">
            <h6><b>Use your existing number</b></h6>
            <p>Get incoming orders on your personal WhatsApp or WhatsApp Business Phone number</p>
            </div>
            <div class="col-lg-2 col-2 service-icons">
              <i class="fa-2x fa fa-car"></i></div><div class="col-lg-10 col-10"><h6><b>Delivery or Pick-up</b></h6>
            <p>Use OnWhats.App E-store to get orders for both Delivery & Pickup</p></div>
            <div class="col-lg-2 col-2 service-icons">
              <i class="fa-2x fa fa-shopping-basket"></i></div><div class="col-lg-10 col-10"><h6><b>Revolutionising In-Store</b></h6>
            <p>No more queues, place an order, pay, collect, and done! As easy as this sounds.</p></div>


            
            </div>


          </div>
          <div class="col-sm-6">
            <div class="centerBlock2 position: relative; left: 0; top: 0;">
              
              <img class="col_img" src="img/e1s03h2f.png">
          </div>
      </div>
  </div>
</div>


<!---------<section class="sevice" id="servicediv">
  <div class="container heading text-center">
      <h4 class="text-center font-weight-bold"></h4>
  </div>
  <div class="container">
      <div class="row">
          <div class="col-lg-6 col-md-12 col-10 offset-1 offset-lg-0">
            <div class="centerBlock2">
              <img class="col_img" src="img/e1s03h2f.png">
              
          </div>
          
          <div class="col-lg-6 col-md-12 col-12 servicediv">
              <div class="row">
                  <div class="col-lg-2 col-2 service-icons">
                    
                      <a href="#"><i class="fa-2x fa fa-gift" aria-hidden="true"></i></a>
                  </div>
                  <div class="col-lg-10 col-10">
                    <h1>Your Dashboard</h1>
          <h5>So simple, you will fall in love with it.</h5>
                    <h6><b>Product management</b></h6>
                    <p>Manage your products, description & pricing.</p>
                  </div>
              </div>

              <div class="row">
                  <div class="col-lg-2 col-2 service-icons">
                      <a href="#"><i class="fa-2x fa fa-gift" aria-hidden="true"></i></a>
                  </div>
                  <div class="col-lg-10 col-10">
                    <h6><b>Store Settings</b></h6>
            <p>Setup your store link, currency, payment instructions & delivery fees.</p>
                  </div>
              </div>

              <div class="row">
                  <div class="col-lg-2 col-2 service-icons">
                      <a href="#"><i class="fa-2x fa fa-gift" aria-hidden="true"></i></a>
                  </div>
                  <div class="col-lg-10 col-10">
                      <h4>SUPPORT 24/7</h4>
                      <p>To make this world a better. </p>
                  </div>
              </div>

          </div>
      </div>
  </div>

</section>------->


<div class="text">
  <h1>Powering Stores in 50+ Countries</h1><br>
  <h6>18,000+ sellers and counting<br>
    Over a MILLION orders received by Sellers!</h6>
</div>

<center>
  <button class="button text-center">Get started</button>
  <button class="button text-center">Contact Us</button>
</center>





<div class="text">
  <h1>Simple, transparent pricing</h1>
</div>





<!---------------------------------------toggle--------------------------------------->

<!------------<center>  
  <input type="checkbox" id="switch" class="checkbox"> 
  <label for="switch" class="toggle"> 
       
  </label> 
</center>------------------------------------------> 
       


<!-----------------------------------nav-------------------------------->

<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Monthly</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Yearly</a>
  </li>
  
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">



    <div class="container1">
      <div class="row">
    <div class="col-sm-5 col-md-6" id="myText" disabled="disabled">
      <div class="post--content" data-aos="zoom-in" data-aos-delay="100">
          
          <div class="post-title text-center">
              <h3>Go</h3>
              <p>plain and simple order taking - introductory offer 👇</p>
              <p><strong>$1</strong>/ mo</p>
              <p>Unlimited products</p>
              <p>Unlimited categories</p>
              <p>Your own WhatsApp number</p>
              <a href="login.php"><button class="btn post-btn">Sign Up &nbsp; <i class="fa fa-long-arrow-right"></i></button></a>
          </div>
      </div>
  </div>

  <div class="col-sm-5 col-sm-offset-2 col-md-6 col-md-offset-0" id="myText" disabled="disabled">
    <div class="post--content" data-aos="zoom-in" data-aos-delay="100">
        
        <div class="post-title text-center">
            <h3>Business in a box 📦</h3>
            <p>
              Have your own service, same as OnWhats.App
            </p>
            <p><strong>interested?</strong></p>
            <p>Localisation as per your country</p>
            <p>Fully white labelled, your branding</p>
            <p>Stripe.com to collect fees</p>
            <a href="reach_out_us.php"><button class="btn post-btn">Reach out to Us &nbsp; <i class="fa fa-long-arrow-right"></i></button></a>
        </div>
    </div>
</div>
</div>
</div>





    
  </div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
    
    <div class="container1">
      <div class="row">
    <div class="col-sm-5 col-md-6" id="myText" disabled="disabled">
      <div class="post--content" data-aos="zoom-in" data-aos-delay="100">
          
        <div class="post-title text-center">
          <h3>Go</h3>
          <p>
            plain and simple order taking - introductory offer 👇
          </p>
          <p><strong>$10</strong>/ mo</p>
          <p>Unlimited products</p>
          <p>Unlimited categories</p>
          <p>Your own WhatsApp number</p>
          <a href="login.php"><button class="btn post-btn">Sign Up &nbsp; <i class="fa fa-long-arrow-right"></i></button></a>
      </div>
      </div>
  </div>

  <div class="col-sm-5 col-sm-offset-2 col-md-6 col-md-offset-0" id="myText" disabled="disabled">
    <div class="post--content" data-aos="zoom-in" data-aos-delay="100">
        
      <div class="post-title text-center">
        <h3>Business in a box 📦</h3>
        <p>
          Have your own service, same as OnWhats.App
        </p>
        <p><strong>Email Us</strong></p>
        <p>Localisation as per your country</p>
        <p>Fully white labelled, your branding</p>
        <p>Stripe.com to collect fees</p>
        <a href="reach_out_us.php"><button class="btn post-btn">Reach out to Us &nbsp; <i class="fa fa-long-arrow-right"></i></button></a>
      </div>
    </div>
</div>
</div>
</div>



 </div>

</div>


<!----------------------------------------faq------------------------------------------>


<h1 class="text text-center">FAQ</h1>
<div class="container">
  <div class="row">
  
      <div class="col-sm-6 p-3 mb-2 bg-light text-dark">
          <div class="centerBlock">
            <p><b>Do I get an online store?</b></p>
            <p>Absolutely! Your own WhatsApp store will be,<br> <b><a href="https://onwhats.app/YourBrandName">https://onwhats.app/YourBrandName</a></b></p>
            <p><b>How do I collect payments?</b></p>
            <p>No Payment Gateway required. You can collect payments via cash on the counter, cash on delivery, payment links, PayPal, QR codes, totally up to you. Make sure you key in these instructions while setting up your onwhats.app store!</p>
            <p><b>Is there a dashboard available?</b></p>
            <p>Of course. Through your dashboard you can manage products, payment settings, prices, etc.</p>
            <p><b>How do I create a QR for my store?</b></p>
            <p>Your store link, i.e.<br><a href="https://onwhats.app/yourstore"> https://onwhats.app/yourstore</a><br> can be used to embed into a QR code using services like<br><b><a href="https://www.qrcode-monkey.com/"> https://www.qrcode-monkey.com/</a></b></p>
            <p><b>How much does it cost?</b></p>
            <p>As a special launch offer, for our first 40,000 customers, a simple $1/month.</p>
          </div>
          </div>
          <div class="col-sm-6 p-3 mb-2 bg-light text-dark">
            <div class="centerBlock">
              <p><b>Why should I use OnWhats.App?</b><br><br>
                Get your existing customers to view your entire catalog and help them place an order with you using a simple e-store link.<br><br>
                <b>Do you have an inventory management dashboard?</b><br><br>
                Not yet, it is on our roadmap though. For now you can simply toggle off the items with no stock and toggle it back on once available, simple.<br><br>
                <b>Why is your service so cheap?</b><br><br>
                We're hustlers, like you and want to make sure you make the most out of your e-commerce journey.<br><br>
                <b>Do you take a % per sale?</b><br><br>
                No way.. though if you'd like to buy us a coffee or pizza, go straight here -><br><br> <b><a href="https://www.buymeacoffee.com/onwhatsapp">https://www.buymeacoffee.com/onwhatsapp</a><b></b>
                <b>Is this legal?</b><br><br>
                Absolutely! We're just leveraging on the open APIs, nothing that breaks the rules. ;)</p>
          </div>
      </div>
  </div>
</div>

<!---------------------------------------footer--------------------------------->

<footer>

</footer>













<!-----------------------------------4 cards----------------------------------------->






















<!--------------------<section id="team">
  <div class="container1">
  <div class="row">
      <div class="col-lg-3 col-md-6" id="myText" disabled="disabled">
          <div class="post--content" data-aos="zoom-in" data-aos-delay="100">
              
              <div class="post-title text-center">
                  <h3>Go</h3>
                  <p>plain and simple order taking - introductory offer 👇</p>
                  <p><strong>$1</strong>/ mo</p>
                  <p>Unlimited products</p>
                  <p>Unlimited categories</p>
                  <p>Your own WhatsApp number</p>
                  <button class="btn post-btn">Sign Up &nbsp; <i class="fas fa-arrow-right"></i></button>
              </div>
          </div>
      </div>
      <div class="col-lg-3 col-md-6" id="myText" disabled="disabled">
          <div class="post--content" data-aos="zoom-in" data-aos-delay="100">
              
              <div class="post-title text-center">
                  <h3>Business in a box 📦</h3>
                  <p>
                    Have your own service, same as OnWhats.App
                  </p>
                  <p><strong>interested?</strong></p>
                  <p>Localisation as per your country</p>
                  <p>Fully white labelled, your branding</p>
                  <p>Stripe.com to collect fees</p>
                  <button class="btn post-btn">Reach out to Us &nbsp; <i class="fas fa-arrow-right"></i></button>
              </div>
          </div>
      </div>

      

      <div class="col-lg-3 col-md-6" id="myText" disabled="disabled">
          <div class="post-content" data-aos="zoom-in" data-aos-delay="100">
              
              <div class="post-title text-center">
                  <h3>Go</h3>
                  <p>
                    plain and simple order taking - introductory offer 👇
                  </p>
                  <p><strong>$10</strong>/ mo</p>
                  <p>Unlimited products</p>
                  <p>Unlimited categories</p>
                  <p>Your own WhatsApp number</p>
                  <button class="btn post-btn">Sign Up &nbsp; <i class="fas fa-arrow-right"></i></button>
              </div>
          </div>
      </div>
      <div class="col-lg-3 col-md-6" id="myText" disabled="disabled">
          <div class="post-content" data-aos="zoom-in" data-aos-delay="100">
              
              <div class="post-title text-center">
                <h3>Business in a box 📦</h3>
                <p>
                  Have your own service, same as OnWhats.App
                </p>
                <p><strong>Email Us</strong></p>
                <p>Localisation as per your country</p>
                <p>Fully white labelled, your branding</p>
                <p>Stripe.com to collect fees</p>
                <button class="btn post-btn">Reach out to Us &nbsp; <i class="fas fa-arrow-right"></i></button>
              </div>
          </div>
      </div>
    </div>
</div>
  </section>----------------------------------------------------------------------------->




  <!------------<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery("input[type=radio]").click(function(){
           jQuery("#price").val(this.value);
        }); 
    });
    </script>
    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
      <ul class="plan plan2">
      <li class="plan-name">Professional</li>
      <h4 class="plan-benefit"><input type="text" id="price" value="$99/mo"><br/>
      <div class="btn-group" data-toggle="buttons">
      <label class="btn btn-primary active"><input type="radio" value="$99/mo" checked> Monthly</label><label class="btn btn-primary"><input type="radio" value="$299/mo"> Annual</label>
      </div>---------------->
    

     <!-------- <div class="btn-group btn-group-justified zz" id="btn-disable">
        <a href="#" class="btn btn-info col-sm-3" >
          <i class="glyphicon glyphicon-send" ></i><br>
          Send
        </a>
       </div> 
       <script> $('.zz').click(function(){
        $('.zz').css('display', 'none');
      });

   </script>-------------->
<script>
$(function () {
        $("#switch").click(function () {
            if ($(this).is(":checked")) {
                $("#myText").removeAttr("disabled");
                $("#myText").focus();
            } else {
                $("#myText").attr("disabled", "disabled");
            }
        });
    });
</script>





  <!------------<script>
    function myFunction() {
      var x = document.getElementById("#mybtn").disabled;
      document.getElementById("#demo").innerHTML = x;
    }
    </script>-------------->
    

</body>
</html>