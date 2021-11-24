@extends('include.sidenav')

@section('sidenav')

@if(Session::has('success'))
<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('success') }}</p>
@endif
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->

    <div class="" style="min-height: 100px; background-size: cover; background-position: center top;">
      <!-- Mask -->
      
      <!-- Header container -->
      
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        
        <div class="col-xl-8 order-xl-1">
          <div class="card">
            <div class="card-header">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">Add Scope</h3>
                </div>
                
              </div>
            </div>
            <div class="card-body">
              <form action="{{url('/post/scope')}}" method="POST" enctype="multipart/form-data">
                @csrf
                
                <div class="pl-lg-4">
                 

                  <div class="row">
                    <div class="col-lg-12">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Scope Name</label>
                        <input type="text" id="input-email" class="form-control" name="category_name" placeholder="Scope Title Name">
                      </div>
                    </div>
                  </div>
                  
                  <button type="submit" class="btn btn-success mt-1">Update</button>
              </form>
            </div>
          </div>
        </div>

        
        <div class="col-xl-12 order-xl-1">
            <div class="card">
              <div class="card-header">
                <div class="row align-items-center">
                  <div class="col-8">
                    <h3 class="mb-0">Add Scope Works</h3>
                  </div>
                  
                </div>
              </div>
              <div class="card-body">
                <form action="{{url('/post/scopework')}}" method="POST" enctype="multipart/form-data">
                  @csrf
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="form-group">
                          <label class="form-control-label" for="input-username">Scope Works</label>
                          <select class="custom-select" name="category_name" required>
                            <option selected disabled value="">Select Scope</option>
                            @foreach($scope as $row)
                              <option value="{{$row->id}}">{{$row->category_name}}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="form-group">
                          <label class="form-control-label" for="input-username">Scope Header</label>
                          <textarea class="form-control" name="scope_header" required></textarea>
                        </div>
                      </div>
                    </div>
               
  
                      <div class="row">
                        <div class="col-lg-12">
                          <div class="form-group">
                            <label class="form-control-label" for="input-username">Scope Description</label>
                            <textarea id="summernote" class="form-control" name="scope_description" required></textarea>
                          </div>
                        </div>
                      </div>
                    
                    <button type="submit" class="btn btn-success mt-1">Update</button>
                </form>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-8 order-xl-1">
          <div class="card">
            <div class="card-header">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">Add Scope Images</h3>
                </div>
                
              </div>
            </div>
            <div class="card-body">
              <form action="{{url('/post/scope_images')}}" method="POST" enctype="multipart/form-data">
                @csrf
                
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Select Scope Type</label>
                        <select class="custom-select" name="category_name" required>
                          <option value="" selected disabled>Select Type</option>
                            @foreach($scope as $row)
                              <option value="{{$row->id}}">{{$row->category_name}}</option>
                            @endforeach
        
                        </select>
                      </div>
                    </div>
                  </div>

                  <!-- Image  -->
                  
                  <table class="table table-bordered mt-2" id="dynamicTable">  
                    <tr>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                    <tr> 
                        <td><input type="file" name="image[]" class="form-control" required/></td>  
                        <td><button type="button" name="add" id="add" class="btn btn-primary">Add More</button></td>  
                             
                    </tr>  
                  </table> 
                  
                  <button type="submit" class="btn btn-success mt-1">Upload</button>
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

<script type="text/javascript">
 
  var i = 0;
     
  $("#add").click(function(){
 
      ++i;
 
      $("#dynamicTable").append('<tr><td><input type="file" name="image[]" class="form-control" required/></td><td><button type="button" class="btn btn-danger remove-tr">Remove</button></td></tr>');
  });
 
  $(document).on('click', '.remove-tr', function(){  
       $(this).parents('tr').remove();
  });  
 
</script>
@endsection