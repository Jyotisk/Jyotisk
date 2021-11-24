
 @extends('include.nav')

 @section('content')
    <!--End of Navigation & Logo-->

    <!--About Us heading-->
    <div class="about-us">
        <div class="about-overlay">
            <h2 class="about-header">
                Announcements
            </h2>
            <p>Department - Announcements</p>
        </div>
    </div>
    <!--End of About Us heading-->

    <!--Announcement Links-->
    <div class="announcement">
        <div class="container" style="padding-top: 100px; padding-bottom: 200px;">
          @foreach($event as $row)
            <div class="card mb-4">
                <div class="card-body">
                  <h5 class="card-title">{{($row->event_title)}}</h5>
                  <p class="card-text"><br><br></p>
                  <a href="#" class="btn btn-primary p-2">View Details</a>
                </div>
            </div>
          @endforeach
            
        </div>
    </div>

    @endsection
    