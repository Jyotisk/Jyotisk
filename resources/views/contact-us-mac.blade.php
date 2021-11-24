@extends('include.nav')

@section('content')

    <style>

      .contact-us h2 {
        font-size: 16px;
      }

      .contact-us p {
        font-family: 'Roboto', sans-serif;
        font-size: 16px;
      }
      
    </style>


    <!--Funding heading-->
      <div class="about-us">
        <div class="about-overlay">
            <h2 class="about-header">
                Contact Us
            </h2>
            <p>Home - Contact Us</p>
        </div>
      </div>
    <!--End of Funding heading-->

    <!--Funds Table-->
    <div class="department">
          <div class="executive">
            <div class="container">

                <br><br>
                <div class="row contact-us">
                  @foreach ($contact as $con)

                  <div class="col-lg-4 mt-3 d-flex align-items-center justify-content-center">
                    <div class="card text-center" style="width: 24rem; height: 17rem;">

                        <div class="d-flex align-items-center justify-content-center">
                          <span class="mt-5" style="width: 65px; height: 65px; border-radius: 60%; background-color: #bc4236;">
                            <img class="card-img-top p-3" src="images/icons/Icon-04.svg" alt="Card image" style="width: 65px; height: 65px;">
                          </span>
                        </div>

                      <div class="card-body">
                        <h2 class="text-center">Headquarter</h2>

                        <p class="card-text">{!!($con->address)!!}</p>
                      </div>

                    </div>
                  </div>

                  <div class="col-lg-4 mt-3 d-flex align-items-center justify-content-center">
                    <div class="card text-center" style="width: 24rem; height: 17rem;">

                        <div class="d-flex align-items-center justify-content-center">
                          <span class="mt-5" style="width: 65px; height: 65px; border-radius: 60%; background-color: #bc4236;">
                            <img class="card-img-top p-3" src="images/icons/Icon-02.svg" alt="Card image" style="width: 65px; height: 65px;">
                          </span>
                        </div>

                      <div class="card-body">
                        <h2 class="text-center">Contact Number</h2>
                        <p class="card-text">{!!($con->contact_no)!!}</p>
                      </div>
                    </div>
                    @endforeach

                  </div>

                  <div class="col-lg-4 mt-3 d-flex align-items-center justify-content-center">
                    <div class="card" style="width: 24rem; height: 17rem;">

                        <div class="d-flex align-items-center justify-content-center">
                          <span class="mt-5" style="width: 65px; height: 65px; border-radius: 60%; background-color: #bc4236;">
                            <img class="card-img-top p-3" src="images/icons/Icon-03.svg" alt="Card image" style="width: 65px; height: 65px;">
                          </span>
                        </div>

                      <div class="card-body">
                        <h2 class="text-center">Email ID</h2>
                        <p class="card-text text-center">{!!($con->email)!!}</p>
                      </div>
                    </div>
                  </div>

                  
                </div>
                
                  
                  <br><br><br>

                  <!--Google map-->
                <div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 100%; width: 100%;">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d895.3192997706509!2d91.77921284048251!3d26.15510030866636!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375a591121c2a62f%3A0xde06e35c638e90cc!2sSRI%20KAMAKHYA%20TOWER!5e0!3m2!1sen!2sin!4v1637322040119!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>

                  <!--Google Maps-->

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