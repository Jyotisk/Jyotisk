@extends('include.sidenav')

@section('sidenav')

@if(Session::has('success'))
<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('success') }}</p>
@endif
<!-- Main content -->
  <div class="main-content" id="panel">
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
                  <h3 class="mb-0">Add Gallery Images</h3>
                </div>
                
              </div>
            </div>
            <div class="card-body">
              <form action="{{url('/post/gallery')}}" method="POST" enctype="multipart/form-data">
                @csrf
                
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Gallery Image Type</label>
                        <select class="custom-select" name="type" required>
                          <option value="" selected disabled>Select Type</option>
                            @foreach($data as $row)
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
      </div>

    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

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