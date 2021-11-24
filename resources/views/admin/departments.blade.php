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
                  <h3 class="mb-0">Add Department</h3>
                </div>
                
              </div>
            </div>
            <div class="card-body">
              <form action="{{url('/post/departments')}}" method="POST" enctype="multipart/form-data">
                @csrf
                
                <div class="pl-lg-4">
                 

                  <div class="row">
                    <div class="col-lg-12">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Department Name</label>
                        <input type="text" id="input-email" class="form-control" placeholder="Department Name" name="department_name" required>
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
                    <h3 class="mb-0">Add Sub Department</h3>
                  </div>
                  
                </div>
              </div>
              <div class="card-body">
                <form action="{{url('/post/subdepartments')}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="row">
                      <div class="col-lg-12">
                        <div class="form-group">
                          <label class="form-control-label" for="input-username">Department</label>
                          <select class="custom-select" name="department_name" required>
                            <option selected disabled value="">Select Department</option>
                            @foreach($dept as $row)
                              <option value="{{$row->id}}">{{$row->department_name}}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                    </div>
                   
  
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="form-group">
                          <label class="form-control-label" for="input-username">Sub Department Name</label>
                          <input type="text" id="input-email" class="form-control" placeholder="Sub Department Name" name="sub_department_name">
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