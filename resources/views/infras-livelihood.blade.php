@extends('include.nav')

@section('content')

    <style>
      .main-gallery a {
        text-decoration: none;
      }
    </style>


    <!--Funding heading-->
      <div class="about-us">
        <div class="about-overlay">
            <h2 class="about-header">
                Livelihood Technology
            </h2>
            <p>Infrastructure - Livelihood Technology</p>
        </div>
      </div>
    <!--End of Funding heading-->

    <!--Funds Table-->
    <div class="department">
          <div class="executive">
            <div class="container">
                <p>
                    <h2 class="text-center">Livelihood Mission and Transfer of Technology</h2>
                </p>
                <br><br>
                <p class="pt-3 text-justify" style="font-family: 'Roboto', sans-serif; font-weight: 400; font-size: 16px;">
                The present elected Council of the MAC is putting utmost importance to livelihood centric schemes in order to fight poverty and rural unemployment; and to trigger economic growth. It has been evaluated that land, although flood prone, are available in abundance during the winter. But, despite this available land resource, there is exodus of rural youths to various cities for job. This has been caused primarily due to lack of information, technology, entrepreneurship and skill; and, secondarily due to lack of fund.
                <br><br>

                Therefore, MAC has drawn a Livelihood Mission with a clear approach to motivate and organize the rural youths and other farmers on one hand and to facilitate transfer of technology from scientific and professional institutions. A series of workshops and awareness camps have been held at different places with experts/scientists and resource persons from the following institutions:
                </p>
                
                  <p>
                    <br>
                    <ol class="infras">
                      <li>The MAC will give emphasis on research work on Mising Folk Culture and in this regard grant may be provided.</li>
                      <li>Setting up of Cultural Complex and Archive at different places.</li>
                      <li>Construction of Auditorium, Kristi Bhawan, Rangamancha etc.</li>
                      <li>Grant-in-Aid to Music Institutions, Clubs, Yuvak Sangha, Society etc. engaged in cultural activities.</li>
                      <li>Production of Film, Documentary etc.</li>
                      <li>Publication of Books</li>
                      <li>Musical Instruments to Artist and Institutions.</li>
                      <li>Holding of cultural festival etc.</li>
                    </ol>
                  </p>
                  <br><br><br>

                  <div class="main-gallery">
                    <div class="row no-gutters">
                      @foreach($livelihood as $row4)
                      <div class="col-lg-12 text-center">
                  

                          <a href="{{url($row4->image_path)}}">
                            <img src="{{asset($row4->image_path)}}" alt="Pic1" class="shadow-1-strong card-img-top rounded ml-3 pt-1" style="width: 252px; height: 175px;">
                          </a>
                        {{-- <a href="images/2-s.jpg">
                          <img src="images/2-s.jpg" alt="Pic1" class="shadow-1-strong card-img-top rounded ml-3 pt-1" style="width: 252px; height: 175px;">
                        </a>
                        <a href="images/3-s.jpg">
                          <img src="images/3-s.jpg" alt="Pic1" class="shadow-1-strong card-img-top rounded ml-3 pt-1" style="width: 252px; height: 175px;">
                        </a>
                        <a href="images/4-s.jpg">
                          <img src="images/4-s.jpg" alt="Pic1" class="shadow-1-strong card-img-top rounded ml-3 pt-1" style="width: 252px; height: 175px;">
                        </a>  --}}
                      </div>
                      @endforeach
                      
                    </div>
                  </div>

            </div>

          </div>
    </div>
  <!-- End of Funds Table  -->

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<script src="{{asset('js/baguetteBox.min.js')}}"></script>
<script>
    baguetteBox.run('.main-gallery');
</script>

@endsection