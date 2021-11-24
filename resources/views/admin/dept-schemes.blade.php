@extends('include.sidenav')

@section('sidenav')
@if(Session::has('success'))
<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('success') }}</p>
@endif
  <!-- Main content -->
    <div class="header pb-6 d-flex align-items-center" style="min-height: 100px; background-size: cover; background-position: center top;">
  
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        
        <div class="col-xl-8 order-xl-1">
          <div class="card">
            <div class="card-header">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">Schemes & Programes</h3>
                </div>
                
              </div>
            </div>
            <div class="card-body">
              <form action="{{url('/post/schemes')}}" method="POST" enctype="multipart/form-data">
                @csrf
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Schemes/Programes Name</label>
                        <input type="text" id="input-email" class="form-control" placeholder="Schemes Name" name="scheme_title">
                      </div>
                    </div>

                      
                  </div>
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Scheme Details</label>
                        <textarea id="summernote" class="form-control" name="scheme_details" required></textarea>
                      </div>
                    </div>
                  </div>

                  <button type="submit" class="btn btn-success mt-1">Update</button>
              </form>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
  <div id="summernote"></div>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  
  @endsection

