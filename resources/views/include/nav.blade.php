<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>MISING AUTONOMOUS COUNCIL</title>

    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('css/gallery.css')}}" rel="stylesheet">
    <link href="{{asset('css/department-scope')}}" rel="stylesheet">
    <link href="{{asset('css/department-livelihood.css')}}" rel="stylesheet">

    <link href="{{asset('css/announcement-links.css')}}" rel="stylesheet">
    <link href="{{asset('css/baguetteBox.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/fontawesome-all.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/about-formulation.css')}}" rel="stylesheet">
    <link href="{{asset('css/about.css')}}" rel="stylesheet">
    <link href="{{asset('css/about-act.css')}}" rel="stylesheet">
    <link href="{{asset('css/about-power.css')}}" rel="stylesheet">
    <link href="{{asset('css/about-missing.css')}}" rel="stylesheet">
    <link href="{{asset('css/about-area.css')}}" rel="stylesheet">
    <link href="{{asset('css/responsive.css')}}" rel="stylesheet">
    <link href="{{asset('css/department-executive.css')}}" rel="stylesheet">
    {{-- <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet"> --}}
    <link rel="stylesheet" href="{{asset('css/image-zoom.css')}}">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
    <!--Header Section-->
    <section class="fixed-top">
        <header class="headTop">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-2">
                        <p><img class="phone-icon" src="images/icons/Icon-14.svg" alt="phone"></p>
                        <p class="phoneTop">+91 9854098540</p>
                    </div>
                    <div class="col-3 mail-col" style="margin-left: -50px;">
                        <p><img class="mail-icon" src="images/icons/Icon-15.svg" alt="mail"></p>
                        <p class="emailTop">&nbsp;misingautonomouscouncil@gmail.com</p>
                    </div>
                    <div class="col-3"></div>
                    <div class="col-4" style="padding: 0;">
                        <div class="socialTop">
                            <p class="followTop" style="color: white; text-align: right; margin-right: 0px; font-family: 'Roboto', sans-serif; font-weight: 400; font-size: 12px;">Follow us on
                                <img class="facebook-icon" src="images/icons/Icon-10.svg" alt="Facebook Icons">
                                <img class="twit-icon" src="images/icons/Icon-11.svg" alt="Twitter Icons">
                                <img class="instagram-icon" src="images/icons/Icon-12.svg" alt="Instagram Icon">
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="navigation">
            <nav class="navbar navbar-expand-lg navbar-default">
                
                <div class="container-fluid">
                    
                    <div class="row">
    
                        <div class="col-md-4">
                            
                            <!--Logo-->
                            <a href="#"><img class="logo" src="images/Logo.jpg" alt="MAC Logo"></a>
    
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <i class="fas fa-bars fa" aria-hidden="true"></i>
                            </button>
    
                            <div class="toggle-btn">
                                <button class="show-btn navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <i class="fas fa-bars fa" aria-hidden="true"></i>
                                </button>
                            </div>
    
                        </div>
    
                        <div class="col-md-8" >
    
                            <!--Nvigation-->
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item simple">
                                        <a href="{{url('/')}}">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <div class="dropdown">
                                            <button class="dropbtn-about">About Us<img class="dropdown-icon" src="images/icons/Dropdown-20.svg"></button>
                                            
                                            <div class="dropdown-content" style="margin-left: -17px;">
                                                <a href="{{url('/about_us')}}">About MAC</a>
                                                <a href="{{url('/about_us_missing')}}">About Mising</a>
                                                <a href="{{url('/about_us_mac_area')}}">About MAC Area</a>
                                                <a href="{{url('/about_us_mac_act')}}">MAC Acts 1995</a>
                                                <a href="{{url('/about_us_power')}}">Power & Functions</a>
                                                <a href="{{url('/about_us_formulation')}}">Project formulation & Procedure</a>
                                                
                                            </div>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <div class="dropdown">
                                            <button class="dropbtn" style="margin-right: 2px;">Department<img class="dropdown-icon" src="images/icons/Dropdown-20.svg"></button>
                                            <div class="dropdown-content" style="margin-left: 6px;">
                                                <a href="#" class="adminis" >Administration<img class="dropdown-icon" src="images/icons/Dropdown-20.svg">
                                                </a>
                                                <a href="{{url('/schemes-programes')}}">Schemes/Programmes</a>
                                                <a href="{{url('/scopeofworks')}}">Scope of Work</a>
                                                <div id="administration" class="sub dropdown-content" style="display: none; padding-top: 0px; margin-left: 160px; margin-top: -118px; width: 196px;">
                                                    <a href="{{url('/executive')}}">List of Executive Councilors</a>
                                                    <a href="{{url('/gen_member')}}">List of General Members</a>
                                                    <a href="{{url('/staff')}}">List of Official Stuff</a>
                                                </div>
                                                
                                                <a href="{{url('/funding')}}">Funding</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <div class="dropdown">
                                            <button class="dropbtn-infra">Infrastructure<img class="dropdown-icon-infra" src="images/icons/Dropdown-20.svg"></button>
                                            <div class="dropdown-content" style="margin-left: 17px;">
                                                <a href="{{url('/livelihood')}}">Livelihood Technology</a>
                                                <a href="#">Link 2</a>
                                                <a href="#">Link 3</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="nav-item simple gallery">
                                        <a href="{{asset('/gallery')}}" style="padding-left: 10px;">Gallery</a>
                                    </li>
                                    <li class="nav-item simple">
                                        <a href="{{url('/announcement')}}">Annoucement</a>
                                    </li>
                                    <li class="nav-item simple">
                                        <a href="{{url('/contactus')}}">Contact</a>
                                    </li>
                                </ul>
                            </div>
    
                        </div>
    
                    </div>
    
                </div>
    
            </nav>
        </div>
    </section>
    
    <main class="py-4">
        @yield('content')
    </main>

    
    <footer>

        <!--Sign Up for Newsletter-->
        <div class="for-newsletter">
            <div class="container-fluid" style="position: absolute; top: -100px; padding-left: 30px; padding-right: 45px;">
                <div class="newsletter signup" style="margin-left: 73px; margin-right: 73px;">
                    <div class="row">
                        <div class="col-md-4" style="width: 100%; margin-top: -16px;">
                            <h4 class="newsletter-head">Get the Latest Updates</h3>
                            <p class="newsletter-intro">Sign Up for Newsletter</p>
                        </div>
                        <div class="col-md-4">
                            <input class="email" type="email" placeholder="Enter Your Email..." style="width: 100%; height: 41px; margin-top: 10px;">
                        </div>
                        <div class="col-md-4">
                            <p class="card-text" style="margin-left: 35px;">
                                <button class="read_more" style="font-family: 'Roboto', sans-serif; text-align: center; font-weight: 700; font-size: 13px;background-color: #bc4236; width: 60%; height: 41px; margin-top: 10px;">SUBSCRIBE</button>
                             </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End of Newsletter-->
    
        <!--Footer Body-->
        <div class="footer container-fluid" style="padding-top: 10%;">
            <div class="row" style="margin-left: 75px;">
                <div class="about-text col-lg-4">
                    <p class="name"><img class="footer-logo" src="images/Logo.png" alt="MAC Logo">Mising Autonomous Council</p>
                    <p class="footer card-text" style=" font-family: 'Roboto', sans-serif; font-weight: 400; color: white; font-size: 15px; color: white; text-align: justify;">The Mising Autonomous Council was established under the Mising Autonomous Council Act, 1995 passed by Assam Legislative Assembly with its H.Q. at Gogamukh, Dhemaji. An interim body of MAC was constituted in the same year. The Mising Autonomous Council Act, 1995 provides that the Mising Autonomous Council shall be constituted “comprising of *Satellite Areas and Core Areas for...<a href="#" style="text-decoration: none; cursor: pointer; font-family: 'Roboto', sans-serif; font-weight: 400; color: white; font-size: 15px;">READ MORE</a></p>
                    <p>
                        <img class="fb-icon" src="images/icons/Social Media Icon-21.svg" alt="Facebook Icons">
                        <img class="twitter-icon" src="images/icons/Social Media Icon-22.svg" alt="Twitter Icons">
                        <img class="insta-icon" src="images/icons/Social Media Icon-23.svg" alt="Instagram Icon">
                    </p>
                </div>
                <div class="quick col-lg-4" style="padding-left: 4%;">
                    <h3 style="font-family: 'Roboto', sans-serif; color: white; font-size: 15px;">Quick Link</h3>
                    <hr/>
                    <ul style="margin-top: 35px; margin-bottom: 35px;">
                        <li>
                            <a href="#" style="text-decoration: none; color: white;">Home</a>
                        </li><br>
                        <li>
                            <a href="#" style="text-decoration: none; color: white;">Download</a>
                        </li><br>
                        <li>
                            <a href="{{url('/faq')}}" style="text-decoration: none; color: white;">FAQ</a>
                        </li><br>
                        <li>
                            <a href="#" style="text-decoration: none; color: white;">Blog</a>
                        </li><br>
                        <li>
                            <a href="#" style="text-decoration: none; color: white;">Disclaimer</a>
                        </li>
                    </ul>
                </div>
                <div class="contact col-lg-4">
                    <h3 style="font-family: 'Roboto', sans-serif; color: white; font-size: 15px">Get In Touch</h3>
                    <hr/>
                    <ul style="padding-top: 35px;">
                        <li>
                            <p class="address"><img class="location" src="images/icons/Icon-13.svg" alt="Location">&ensp; NH-15, P.O: Gogamukh, Dist.: Dhemaji<br>&emsp; &emsp;&ensp;State: Assam<br>&emsp; &emsp;&ensp;Indian<br>&emsp; &emsp;&ensp;Pin: 787034</p>
                        </li>
                        <li>
                           <p class="number"><img class="phone" src="images/icons/Icon-14.svg" alt="Phone">&ensp;+91 1234567890</p> 
                        </li>
                        <li>
                            <p class="mail"><img class="letter" src="images/icons/Icon-15.svg" alt="Email Icon">&ensp;mac@gmail.om</p>
                        </li>
                    </ul>
                </div>
            </div>
    
            <div class="copyright">
                <hr/>
                <p class="message">&copy Copyright 2021. Mising Autonomous Council | All Rights Reserved. Designed & Developed by Gratia Technology Private Limited</p>
            </div>
    
        </div>
        <!--End of Footer Body-->
    
        <!--Footer Band-->
        <div class="footer-band">
            <img class="art" src="images/Footer-Band.jpg" alt="Footer Band">
        </div>
        <!--End of Footer Band-->
    
    
    </footer>
    <!--End of Footer-->
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.js"></script>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v12.0" nonce="sAPONG7y"></script>

    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="js/jquery.min.js"></script>
    <script src="{{asset('js/zooming.min.js')}}"></script>
    <script>
    
        //Navigation
        $(window).scroll(function(){
            $('nav').toggleClass('fixed-top scrolled', $(this).scrollTop() > 200);
            $('.logo').toggleClass('scrolled', $(this).scrollTop() > 200);
        });

        $('#administration').hide(); 

        $('.adminis').mouseover(function () {
            $('#administration').show();
            $('#administration').mouseover(function () {
                $('#administration').show();      
            });
        });

        $('.adminis').mouseout(function () {
            $('#administration').hide();
        });
    
        
        //Modal Zoom
    
        function onClick(element) {
            document.getElementById("img01").src = element.src;
            document.getElementById("modal01").style.display = "block";
            document.getElementsByTagName("body").style.overflow = "hidden";
        }
    
        //Testimonial Slider
        var slideIndex = 1;
        showSlides(slideIndex);
        
        function plusSlides(n) {
          showSlides(slideIndex += n);
        }
        
        function currentSlide(n) {
          showSlides(slideIndex = n);
        }
        
        function showSlides(n) {
          var i;
          var slides = document.getElementsByClassName("mySlides");
          var dots = document.getElementsByClassName("dot");
          if (n > slides.length) {slideIndex = 1}    
          if (n < 1) {slideIndex = slides.length}
          for (i = 0; i < slides.length; i++) {
              slides[i].style.display = "none";  
          }
          for (i = 0; i < dots.length; i++) {
              dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex-1].style.display = "block";  
          dots[slideIndex-1].className += " active";
        }
    </script>
    
</html>