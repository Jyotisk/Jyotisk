@extends('include.nav')

@section('content')

    <!--About Us heading-->
    <div class="about-us">
        <div class="about-overlay">
            <h2 class="about-header">
                Gallery
            </h2>
            <p>Home - Gallery</p>
        </div>
    </div>
    <!--End of About Us heading-->

    <!--Old Gallery-->
    {{-- <div class="albums">
        <div class="main-gallery">
            <div class="container">
                    <div class="row" style="margin-bottom: 100px">      
                        @foreach($image as $row4)

                        <div class="col-lg-3 col-md-12 mb-3 mb-lg-0">
                            <div class="card">
                                <a href="{{url($row4->image_path)}}">
                                    <img src="{{asset($row4->image_path)}}" class="shadow-1-strong rounded mb-4 card-img-top"
                                alt=""/>
                                </a>
                                
                            </div>
                        </div>
                        @endforeach      
                    </div>              
            </div>
        </div>
    </div> --}}
    {{-- old gallery end --}}
    {{-- new gallery --}}
    <div class="albums">

        <div class="main-gallery">

            
            <div id="filterButton" class="text-center">
                <button class="btn active pl-4 pr-4" onclick="filterSelection('all')">All</button>
                <button class="btn ml-2" onclick="filterSelection('agriculture')">Agriculture</button>
                <button class="btn ml-2" onclick="filterSelection('sports')">Sports</button>
                <button class="btn ml-2" onclick="filterSelection('expo')">Expo</button>
            </div>
            
            <div class="container mt-5">

                <div class="row">
                    @foreach($image as $row4)
                    <div class="col-lg-3 col-md-12 mb-3 mt-2 mb-lg-0 pic all">   
                        <div class="card"> 
                            <a href="{{url($row4->image_path)}}" style="display: none;">
                                <img src="{{asset($row4->image_path)}}" class="shadow-1-strong rounded mb-4 card-img-top"
                            alt=""/>
                            </a>    
                        </div>    
                    </div>
                    @endforeach

                   
                    @foreach($cat2 as $row4)
                    <div class="col-lg-3 mb-3 mb-lg-0 mt-2 pic sports">
                        <div class="card">
                            <a href="{{url($row4->image_path)}}" style="display: none;">
                                <img src="{{asset($row4->image_path)}}" class="shadow-1-strong rounded mb-4 card-img-top"
                            alt=""/>
                            </a>
                        </div>
                    </div>
                    @endforeach

                    @foreach($cat1 as $row4)

                    <div class="col-lg-3 mb-3 mb-lg-0 mt-2 pic agriculture">
                        <div class="card">
                            <a href="{{url($row4->image_path)}}" style="display: none;">
                                <img src="{{asset($row4->image_path)}}" class="shadow-1-strong rounded mb-4 card-img-top"
                            alt=""/>
                            </a>
                        </div>
                    </div>
                    @endforeach
                    @foreach($cat3 as $row4)

                    <div class="col-lg-3 mb-3 mb-lg-0 mt-2 pic expo">
                        <div class="card">
                            <a href="{{url($row4->image_path)}}" style="display: none;">
                                <img src="{{asset($row4->image_path)}}" class="picture shadow-1-strong rounded mb-4 card-img-top"
                            alt=""/>
                            </a>
                        </div>
                    </div>
                    @endforeach
                  </div>
            </div>

            

        </div>
    </div>
    {{-- new Gallery end --}}
    <!--End of Gallery-->
    {{-- Test Gallery Tabbed Image --}}

    {{-- Tabbed Image End --}}

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    <script src="{{asset('js/baguetteBox.min.js')}}"></script>
    <script>
        baguetteBox.run('.main-gallery');

//Filter Button Javascript
filterSelection("all") 

function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("pic");
  if (c == "all") {
      c = "";       
  } 
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {
        element.className += " " + arr2[i];
    }
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}

$(document).ready(function(){
    $('.btn').click(function(){
        $('.btn').removeClass("active");
           $(this).addClass("active");
    });
});

    </script>

    @endsection