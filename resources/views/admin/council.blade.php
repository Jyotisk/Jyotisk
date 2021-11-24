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
                  <h3 class="mb-0">Council Designation</h3>
                </div>
                
              </div>
            </div>
            <div class="card-body">
              <form action="{{url('/post/council')}}" method="POST" enctype="multipart/form-data">
                @csrf
                
                <div class="pl-lg-4">
                 

                  <div class="row">
                    <div class="col-lg-12">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Council Designation</label>
                        <input type="text" id="input-email" class="form-control" name="designation_name" placeholder="Council Designation">
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
                    <h3 class="mb-0">Add Council Members</h3>
                  </div>
                  
                </div>
              </div>
              <div class="card-body">
                <form action="{{url('/post/councilmember')}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="row">
                      <div class="col-lg-12">
                        <div class="form-group">
                          <label class="form-control-label" for="input-username">Member Designation</label>
                          <select class="custom-select" name="designation_name" required>
                            <option selected disabled value="">Select Designation</option>
                            @foreach($council as $row)
                              <option value="{{$row->id}}">{{$row->designation_name}}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                    </div>
                   
  
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="form-group">
                          <label class="form-control-label" for="input-username">Member Name</label>
                          <input type="text" id="input-email" name="council_member_name" class="form-control" placeholder="Council Member Name">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label class="form-control-label" for="input-username">Mobile No</label>
                          <input type="number" id="input-email" name="mobile_no" class="form-control" placeholder="Mobile Number">
                        </div>
                      </div>

                      <div class="col-lg-6">
                        <div class="form-group">
                          <label class="form-control-label" for="input-username">Email Id</label>
                          <input type="text" id="input-email" name="email" class="form-control" placeholder="Email Address">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-lg-12">
                        <div class="form-group">
                          <label class="form-control-label" for="input-username">Address</label>
                          <textarea id="summernote" class="form-control" name="address" name="content" required></textarea>
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
@endsection