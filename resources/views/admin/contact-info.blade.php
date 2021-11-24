@extends('include.sidenav')

@section('sidenav')

@if(Session::has('success'))
<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('success') }}</p>
@endif
    <div class="" style="min-height: 100px; background-size: cover; background-position: center top;">
 
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        
        <div class="col-xl-8 order-xl-1">
          <div class="card">
            <div class="card-header">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">Contact Info</h3>
                </div>
                
              </div>
            </div>
            <div class="card-body">
              <form action="{{url('/post/contact')}}" method="POST" enctype="multipart/form-data">
                @csrf
                
                <div class="pl-lg-4">
                 

                  <div class="row">
                    <div class="col-lg-12">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">contact Number</label>
                        <input type="text" id="input-email" class="form-control" name="contact_no" placeholder="Enter Contact Number">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-lg-12">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Email</label>
                        <input type="text" id="input-email" class="form-control" name="email" placeholder="Enter email">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-lg-12">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Address</label>
                        <textarea id="summernote" class="form-control" name="address"></textarea>
                      </div>
                    </div>
                  </div>


        
                  
                  <button type="submit" class="btn btn-success mt-1">Update</button>
              </form>
            </div>
          </div>
        </div>

        <div id="summernote"></div>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
  <script>
    $('#summernote').summernote({
      placeholder: 'Scope Description',
      tabsize: 2,
      height: 100
    });
  </script>

      

    </div>
  </div>
@endsection