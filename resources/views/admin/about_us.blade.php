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
                  <h3 class="mb-0">About Us</h3>
                </div>
                
              </div>
            </div>
            <div class="card-body">
              <form action="{{url('/post/about_us_categories')}}" method="POST" enctype="multipart/form-data">
                @csrf
                
                <div class="pl-lg-4">
                 

                  <div class="row">
                    <div class="col-lg-12">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Category Name</label>
                        <input type="text" id="input-email" class="form-control" name="category_name" placeholder="Category Name">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-lg-12">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Category Description</label>
                        <textarea id="summernote" class="form-control" name="about_description"></textarea>
                      </div>
                    </div>
                  </div>


                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="customFile" name="about_path" >
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
                          <label class="form-control-label" for="input-username">About Category</label>
                          <select class="custom-select" name="about_description" required>
                            <option selected disabled value="">Select About Category</option>
                            @foreach($about as $row)
                              <option value="{{$row->id}}">{{$row->category_name}}</option>
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