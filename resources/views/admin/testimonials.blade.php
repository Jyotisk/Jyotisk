@extends('include.sidenav')

@section('sidenav')
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
                  <h3 class="mb-0">Testimonials</h3>
                </div>
                
              </div>
            </div>
            <div class="card-body">
              <form action="{{url('/post/testimonial')}}" method="POST" enctype="multipart/form-data">
                @csrf
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Person Name</label>
                        <input type="text" id="input-email" class="form-control" placeholder="Person Name" name="person_name">
                      </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="form-group">
                          <label class="form-control-label" for="input-username">Role of The Person</label>
                          <input type="text" id="input-email" class="form-control" placeholder="Person's Role" name="role_name">
                        </div>
                      </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Testimonial Description</label>
                        <textarea id="summernote" class="form-control" name="content" required></textarea>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="customFile" name="profile_image" >
                          <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
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
  {{-- <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
  <script>
    $('#summernote').summernote({
      placeholder: 'Testimonial Description',
      tabsize: 2,
      height: 100
    });
  </script> --}}
  @endsection

