@extends('include.nav')

@section('content')



<!--Slider-->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="slider-image d-block w-100" src="{{asset($data1->image_path)}}" alt="Slider image 1">
        </div>
        @foreach($data as $row)
        <div class="carousel-item">
            <img class="d-block w-100" src="{{asset($row->image_path)}}" alt="Slider image 2">
        </div>
        @endforeach
        
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<!--End of Slider-->

<!--Notification-->
<div class="" style="background-color: #ededed;">
    <div class="container p-5">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-sm-12">
                <div class="annouce card p-5" style="width: 358px; height: 300px; padding-top: 38px; padding-bottom: 40px;">
                    <img class="mic" src="images/icons/mic.svg" alt="Mic Icon">
                    <div class="card-body" >
                        <h5 class="card-title" style="text-align: center; font-weight: 700; font-family: 'Roboto', sans-serif; font-size: 16px; margin-top: -20px;">Announcements</h5>  
                        <ul style="margin-left: 2px; margin-right: 2px; margin-top: 10px; font-family: 'Roboto', sans-serif; font-weight: 700; font-size: 13px; text-align: justify;">
                            @foreach($title1 as $row1)
                            <li><span><a href="#" style="text-decoration: none;">{{$row1->event_title}}
                                </a></span></li>
                            @endforeach 
                        </ul>
                    
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-12">
                <div class="news card" style="width: 358px; height: 300px; padding-top: 38px; padding-bottom: 40px;">
                    <img class="mic" src="images/icons/news.svg" alt="News Icon">
                    <div class="card-body">
                        <h5 class="card-title" style="text-align: center; font-weight: bold; font-family: 'Roboto', sans-serif; margin-top: -16px;">News & Events</h5>
                        <ul style="margin-left: 2px; margin-right: 2px; margin-top: 10px; font-family: 'Roboto', sans-serif; font-weight: 700; font-size: 13px;">
                            @foreach($title2 as $row2)
                            <li><span><a href="#" style="text-decoration: none;">{{$row2->event_title}}</a></span></li>
                            @endforeach 
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-12">
                <div class="quick card" style="width: 358px; height: 300px; padding-top: 38px; padding-bottom: 40px;">
                    <img class="mic" src="images/icons/links.svg" alt="Links Icon">
                    <div class="card-body">
                        <h5 class="card-title" style="text-align: center; font-weight: bold; font-family: 'Roboto', sans-serif; margin-top: -16px;">Other Links</h5>
                        <ul style="margin-left: 2px; margin-right: 2px; margin-top: 10px; font-family: 'Roboto', sans-serif; font-weight: 700; font-size: 13px;">
                            @foreach($title3 as $row3)
                            <li><span><a href="#" style="text-decoration: none;">{{$row3->event_title}}</a></span></li>
                            @endforeach 
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End of Notifiation-->

{{-- Alt Notification --}}

{{-- Alt Notification End--}}
<!--About Us-->
<div class="about">
    <div class="container-fluid">
        <div class="card mb-3" style="border: none; padding-top: 104px; padding-bottom: 104px; padding-left: 3%">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img class="about-img" src="images/about.jpg" alt="MAC pic" style="margin-left: 50px; width: 105%; border-style: none;">
                </div>
                <div class="col-md-8" style="text-align: justify;
                padding-top: 1%; padding-left: 10%; padding-right: 7%;">
                    <div class="card-body">
                        <h5 style="font-family: 'Roboto', sans-serif; font-size: 16px; font-weight: 700;">Who we are</h5>
                        <h4 style="font-weight: 700; font-family: 'Roboto', sans-serif; font-size: 24px; padding-top: 2%;">We are a strong and strategically driving and influential force behind the local government sector</h4>
                        <p class="card-text" style="text-align: justify; font-family: 'Roboto', sans-serif; font-size: 16px; font-weight: 400; padding-top: 2%;">The Mising Autonomous Council was established under the Mising Autonomous Council Act, 1995 passed by Assam Legislative Assembly with its H.Q. at Gogamukh, Dhemaji. An interim body of MAC was constituted in the same year. The Mising Autonomous Council Act, 1995 provides that the Mising Autonomous Council shall be constituted “comprising of *Satellite Areas and Core Areas for social, economic, educational, ethnic and cultural advancement of the Mising and other Scheduled Tribe communities residing therein.”</p>
                        <br>
                        <p class="card-text" style="margin-top: 5%; "><button class="read_more">READ MORE</button></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End of About Us-->

<!--Scope of Works-->
<div class="scope" style="background-color: #ededed; font-family: 'Roboto', sans-serif; text-align: justify;">
    <div class="container-fluid" style="padding-top: 102px; padding-bottom: 102px;">
        <h2 style="font-family: 'Roboto', sans-serif; font-size: 28px; font-weight: 700; text-align: center;">Scope of Works</h2>
        <div class="row" style="margin-top: 39px;  margin-left: 55px; margin-right: 100px;">
            @php $i = 0; @endphp
                  
                @foreach($scopes as $row)
            <div class="agri col-lg-3" style="padding-left: 30px;">
                <div class="card" style="width: 265px; height: 385px;">
                    @for($j = 0; $j < count($scope_image[$i]); $j++)
                    <img src="{{asset($scope_image[$i][$j])}}" alt="Agcriculture Pic">
                    @endfor
                    <div class="card-body" style="padding-right: 24px; padding-left: 24px; margin-top: -10px;">
                        <h5 style="font-family: 'Roboto', sans-serif; font-size: 16px; font-weight: 700;">{{($row->category_name)}}</h5>
                        <p class="card-text" style="font-family: 'Roboto', sans-serif; font-weight: 500; font-size: 14px; padding-top: 3px;">{{ Str::limit($row->scope_header, 100) }}</p>
                        <p class="card-tex" style="font-family: 'Roboto', sans-serif; font-size: 14px; font-weight: 500; padding-top: 25px;"><a href="{{url('/scopeofworks')}}" style="text-decoration: none; color: black;">Read Details<img class="read-icon" src="images/icons/Dropdown-20.svg"></a></p>
                    </div>
                </div>
            </div>

            @php $i++; @endphp 
            @endforeach
                    
                
        </div>
        <p class="card-text view-all-btn" style="text-align: center; padding-top: 2%; margin-top: 45px;">
            <button class="view-all"><a href="{{url('/scopeofworks')}}" style="color: white; padding-left: 2px;">VIEW ALL</a></button>
         </p> 
    </div>
</div>
<!--End of Scope of Works-->

<!--Social Media Updates-->
<div class="social-media">
    <div class="container-fluid" style="padding-top: 100px; padding-bottom: 100px;">
        <h2 style="font-family: 'Roboto', sans-serif; font-size: 28px; font-weight: 700; text-align: center;">Social Media Updates</h2>
        <div class="row" style="margin-top: 47px; margin-left: 9px; margin-right: 150px;">
            <div class="col-md-4">
                <iframe class="fb-feed" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FMisingAutonomousCouncil%2F&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="1000" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe> 
                <div class="facebook" style="height: 8%;">
                    <i class="fab fa-facebook-f"></i>
                    <a href="#" style="color: white; padding-left: 2px;">FACEBOOK</a>
                </div>
            </div>
            <div class="twit col-md-4">
                <iframe class="fb-feed" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FMisingAutonomousCouncil%2F&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="1000" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe> 
                <div class="twitter" style="height: 8%;">
                    <i class="fab fa-twitter"></i>
                    <a href="#" style="color: white; padding-left: 2px;">TWITTER</a>
                </div>
            </div>
            <div class="insta col-md-4">
                <iframe class="fb-feed" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FMisingAutonomousCouncil%2F&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="1000" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe> 
                <div class="instagram" style="height: 8%;">
                    <i class="fab fa-instagram"></i>
                    <a href="#" style="color: white; padding-left: 2px;">INSTAGRAM</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End of Social Media Updates-->

<!--Counts-->
<div class="social-counts">
    <div class="overlay">
        <div class="container-fluid " style="padding-top: 45px; padding-bottom: 45px;">
            <div class="row" style="margin-right: 100px; margin-left: 85px;">
                <div class="for-people col-lg-4">
                    <p style="text-align: center;"><img class="people" src="images/icons/people.svg" alt="People Icon"></p>
                    <p class="people-count">787436</p>
                    <p class="people-intro">Total People lived <br>in our Council</p>
                </div>
                <div class="for-date col-lg-4" style="padding-left: 2%;">
                    <p style="text-align: center;"><img class="calender" src="images/icons/calender.svg" alt="Calender Icon"></p>
                    <p class="date-count">2005</p>
                    <p class="date-intro">Year of <br>Establishment</p>
                </div>
                <div class="for-funds col-lg-4" style="padding-left: 2%;">
                    <p style="text-align: center;"><img class="funds" src="images/icons/funds.svg" alt="Funds Icon"></p>
                    <p class="funds-count">424.81 CR</p>
                    <p class="funds-intro">Total No of <br>Funds</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End of Counts-->

<!--Gallery-->
<div class="gallery-main">
    <div class="container-fluid" style="padding-top: 100px; padding-bottom: 100px; padding-left: 35px;">
        <h2 style="font-family: 'Roboto', sans-serif; font-size: 28px; font-weight: 700; text-align: center;">Our Gallery</h2>
       <div class="col-md-12">
           <div class="row" style="margin-left: 55px; margin-right: 90px; margin-top: 45px;">
            <div class="gal">
                <img class="zoomd pic1 w3-hover-opacity" src="{{asset('images/image1.jpg')}}" alt="Gallery PIc 1" onclick="onClick(this)">

                <img class="zoomd pic2 w3-hover-opacity" src="{{asset('images/image1.jpg')}}" alt="Gallery PIc 2" onclick="onClick(this)">

                <div class="gal-cp" style="width: 100%; height: 540px">
                    <img class="zoomd-2 pic3"  src="{{asset('images/image1.jpg')}}" alt="Gallery PIc 3" style="height: 100%; position: relative;" onclick="onClick(this)">
                </div>

                <img class="zoomd pic4 w3-hover-opacity" src="{{asset('images/image1.jpg')}}" alt="Gallery PIc 4" onclick="onClick(this)">

                <img class="zoomd pic5 w3-hover-opacity" src="{{asset('images/image1.jpg')}}" alt="Gallery PIc 5" onclick="onClick(this)">

            </div>
        </div>

       </div>

       <div id="modal01" class="w3-modal" onclick="this.style.display='none'">
           <span class="w3-button w3-hover-red w3-xlarge w3-display-topright" style="margin-top: 5%;">&times;</span>

           <div class="w3-modal-content w3-animate-zoom">
             <img id="img01" style="width:100%">
           </div>

       </div>

       <p class="card-text" style="text-align: center; padding-top: 2%;">
           <button class="view-all"><a href="{{url('/gallery')}}">VIEW ALL</a></button>
        </p> 

    </div>


</div>
<!--End of Gallery-->

<!--Livelihood & Tourism-->
<div class="live-tech">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 livelihood">
                <div style="margin-top: 98px; margin-bottom: 98px; margin-left: 40px;">
                    <img class="tractor" src="images/icons/Icon-08.svg" alt="Tractor Icon">
                    <p class="livelihood-head">Livelihood Technology</p>
                    <p class="livelihood-intro">The present elected Council of the MAC is putting utmost<br> importance to livelihood centric schemes in order to fight</p>
                    <br><br><br>

                    <p class="card-text" style="text-align: left; margin-left: 10%;">
                        <button class="read_more" style="font-family: 'Roboto', sans-serif; text-align: center; font-weight: 700; font-size: 13px;"><a href="{{url('/livelihood')}}">READ DETAILS</a></button>
                     </p>
                </div>
            </div>
            <div class="col-lg-6 tourism">
                <div style="margin-top: 98px; margin-bottom: 98px; margin-left: 40px;">
                    <img class="tourism-icon" src="images/icons/Icon-09.svg" alt="Tourism Icon">
                    <p class="tourism-head">Tourism in MAC</p>
                    <p class="tourism-intro">The present elected Council of the MAC is putting utmost<br> importance to livelihood centric schemes in order to fight</p>
                    <br><br><br>

                    <p class="card-text" style="text-align: left; margin-left: 10%;">
                        <button class="read_more" style="font-family: 'Roboto', sans-serif; text-align: center; font-weight: 700; font-size: 13px; background-color: #07173b;">READ DETAILS</button>
                     </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End of Livelihood & Tourism-->

<!--Testimonials-->
<div class="testimonial-bg">
    <div class="slideshow-container" style="padding-top: 100px; padding-bottom: 200px;">
        <h2 style="font-family: 'Roboto', sans-serif; text-align: center; font-weight: 700; font-size: 28px; text-align: center;">Testimonials</h2>
        @foreach ($testimonial as $test)
        <div class="mySlides">
            <p class="testimonial" style="margin-top: 42px;"><img class="dp" src="{{ asset('Documents/Testimonial_images/'.$test->profile_image) }}" alt="Profile Pic"></p>
            <p class="testimonial" style="margin-top: 25px; margin-left: 220px; margin-right: 220px">{!!$test->content!!}</p>
            <p style="font-family: 'Roboto', sans-serif; text-align: center; font-weight: 700; font-size: 18px; margin-top: 47px;">{{$test->person_name}}</p>
            <p style="font-family: 'Roboto', sans-serif; text-align: center; font-weight: 700; font-size: 14px; text-align: center; color: #bc4236;">{{$test->role_name}}</p>
        </div>
        @endforeach

        <div class="slider_bar" style="text-align:center; background-color: white; margin-top: 56px;">
            <span class="dot" onclick="currentSlide(1)"></span> 
            <span class="dot" onclick="currentSlide(2)"></span> 
            <span class="dot" onclick="currentSlide(3)"></span> 
            {{-- <span class="dot" onclick="currentSlide(4)"></span>  --}}

        </div>
    </div>
</div>
<!--End of Testimonial-->
