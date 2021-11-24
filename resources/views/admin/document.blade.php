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
                  <h3 class="mb-0">Upload Documents</h3>
                </div>
                
              </div>
            </div>
            <div class="card-body">
              <form action="{{url('/post/document')}}" method="POST" enctype="multipart/form-data">
                @csrf
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Document Title</label>
                        <input type="text" id="input-email" class="form-control" placeholder="Document Title" name="document_name" required>
                      </div>
                    </div>

                    
                  </div>
                  

                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="customFile" name="document_path" >
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
  
  @endsection

