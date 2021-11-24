@extends('include.sidenav')

@section('sidenav')

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
                  <h3 class="mb-0">Add Events</h3>
                </div>
                
              </div>
            </div>
            <div class="card-body">
              <form action="{{url('/post/event')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Event Type</label>
                        <select class="custom-select" name="event_category_id">
                          <option selected disabled>Select Event Type</option>
                            @foreach($data as $row)
                              <option value="{{$row->id}}">{{$row->category_name}}</option>
                            @endforeach
              
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-lg-12">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Event Title</label>
                        <input type="text" id="input-email" class="form-control" placeholder="Event Title" name="event_title">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Description</label>
                        <textarea id="summernote" class="form-control" name="event_description" required></textarea>
                      </div>
                    </div>
                  </div>
                  <table class="table table-bordered mt-2" id="dynamicTable">  
                    <tr>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                    <tr> 
                        <td><input type="file" name="image[]" class="form-control" required/></td>  
                        <td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>         
                    </tr>  
                  </table> 
                  <button type="submit" class="btn btn-success mt-1">Update</button>
              </form>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

@endsection