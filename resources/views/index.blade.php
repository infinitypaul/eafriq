@extends('layouts.masters')
	
@section('content')
  <!-- HOME PRO-->
  <div class="home-pro"> 
    
    <!-- PRO BANNER HEAD -->
    <div class="banr-head">
      <div class="container">
        <div class="row"> 
          
          <!-- CONTENT -->
          <div class="col-sm-7">
            <div class="text-area">
              <div class="position-center-center col-md-10">
                <h4> Here comes the online bulk sms that you’ve been waiting for...</h4>
                <h6>At esmsafrica, We help you connect with friends & family by sending them the coolest sms greetings with our Cheapest, Smartest, Fastest and most reliable BULK SMS service . </h6>
              </div>
            </div>
          </div>
          
          <!-- FORM SECTION -->
          <div class="col-sm-5">
            <div class="login-sec"> 
              
              <!-- TABS -->
              <div class="uou-tabs">
                <ul class="tabs">
                  <li><a href="#register">Register Now</a></li>
                  <li class="active"><a href="#log-in">Member Login</a></li>
                </ul>
                
                <!-- REGISTER -->
                <div class="content">
                  <div id="register">
                    <form>
                      <input type="text" placeholder="Full Name">
                      <input type="email" placeholder="Email Address">
                      <input type="text" placeholder="Phone">
                      <input type="password" placeholder="Password">
                      <button type="submit">Register</button>
                      <div class="login-with"> <span>Or login with:</span> <a href="#."><i class="fa fa-facebook"></i></a> <a href="#."><i class="fa fa-google"></i></a> <a href="#."><i class="fa fa-linkedin"></i></a> </div>
                    </form>
                  </div>
                  
                  <!-- LOGIN -->
                  <div id="log-in" class="active">
                    <form>
                      <input type="email" placeholder="Email Address">
                      <input type="password" placeholder="Password">
                      <button type="submit">Login</button>
                      <div class="login-with"> <span>Or login with:</span> <a href="#."><i class="fa fa-facebook"></i></a> <a href="#."><i class="fa fa-google"></i></a> <a href="#."><i class="fa fa-linkedin"></i></a> </div>
                      <div class="forget">Forgot your password? <a href="#.">Click Here</a></div>
                    </form>
                  </div>
                  <div id="forget">
                    <form>
                      <input type="email" placeholder="Email Address">
                      <button type="submit">Login</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- SERVICES -->
    <section class="services"> 
      
      <!-- SERVICES ROW -->
      <ul class="row">
        
        <!-- SECTION -->
        <li class="col-md-4">
          <div class="ser-inn">
          <i class="fa fa-globe"></i>
            <h4>Get the Best Value for your Money</h4>
            <i class="fa fa-globe big"></i>
            <p>eSMSafrica provides incredibly cheap way to send mass text messages to your customers, families and friends with the best prices for bulk sms.We give you much more than the value for your money.</p>
          </div>
        </li>
        
        <!-- SECTION -->
        <li class="col-md-4">
          <div class="ser-inn">
            <i class="fa fa-book"></i>
            <h4>Easy To Use Platform</h4>
            <i class="fa fa-book big"></i>
            <p>eSMSafrica is the most simplest, fastest, cheapest and most reliable way to send customized bulk text messages to millions of people around the world.We will provide you with simple way to effectively communicate with your client.</p>
          </div>
        </li>
        
        <!-- SECTION  -->
        <li class="col-md-4">
          <div class="ser-inn">
          <i class="fa fa-picture-o"></i>
            <h4>Save cost and time for your Business</h4>
            <i class="fa fa-picture-o big"></i>
            <p>With eSMSafrica bulk SMS platform you can send SMS to all your customers and Save Time instead of drafting single messages and sending it to individual mobile which will take lot of you precious time. Its also cheap.</p>
          </div>
        </li>
      </ul>
    </section>
    
    <!-- PRO SECTION -->
    <section class="pro-content">
      <div class="container-fluid">
        <div class="row"> 
          
          <!-- PRO IMAGE -->
          <div class="col-md-6 pro-inside" style="background:url(images/pro-img-1.jpg) center center no-repeat;"></div>
          
          <!-- PRO CONTENT -->
          <div class="col-md-6 pro-inside">
            <div class="position-center-center col-md-7">
              <h1>Our Features</h1>
              <p>Stay connected with your clients, friends and family anywhere at anytime...<br />Register Today, Login and enjoy our the best Bulk SMS Features so far!!!. We provides the best features for sending and receiving SMS messages.
             Just register on the eSMSafrica platform and have the access to our affordable plan.  </p>
            </div>
          </div>
        </div>
      </div>
      
      
    </section>
    
    <!-- APP IMAGE -->
    <section class="app-images">
      <div class="container">
        <div class="row"> 
          
          <!-- TEXT -->
          <div class="col-md-6 text-center text-area">
            <h1>Instant Delivery</h1>
            <p>Bulk SMS is one of the cheapest medium of delivering an instant notification to an individual or a targeted group of people, regardless of their location.<br />
            Our plaform delivers messages instantly with customized Sender IDs within few seconds anywhere in Nigeria.
            Try us today for we guarantee Instant Delivery to all networks. </p>
            <a href="#."><i class="fa fa-globe"></i> Register now</a> </div>
          
          <!-- APP IMAGE -->
          <div class="col-md-6 text-right"><img src="{{asset('images/app-img.png')}}" alt="" > </div>
        </div>
      </div>
    </section>
    

    <!-- sponsors -->
    <div class="sponsors" style="background:url(images/sponser-bg.jpg) no-repeat;">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h3 class="section-title">Our Sponsors</h3>
            <div class="sponsors-slider">
              <div class="item"><img src="{{asset('images/sponsor_logo1.png')}}" alt="" class="img-responsive"></div>
              <div class="item"><img src="{{asset('images/sponsor_logo2.png')}}" alt="" class="img-responsive"></div>
              <div class="item"><img src="{{asset('images/sponsor_logo3.png')}}" alt="" class="img-responsive"></div>
              <div class="item"><img src="{{asset('images/sponsor_logo4.png')}}" alt="" class="img-responsive"></div>
              <div class="item"><img src="{{asset('images/sponsor_logo5.png')}}" alt="" class="img-responsive"></div>
              <div class="item"><img src="{{asset('images/sponsor_logo6.png')}}" alt="" class="img-responsive"></div>
              <div class="item"><img src="{{asset('images/sponsor_logo4.png')}}" alt="" class="img-responsive"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Footer -->
@stop