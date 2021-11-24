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
                  <h3 class="mb-0">Add Funds</h3>
                </div>
                
              </div>
            </div>
            <div class="card-body">
              <form action="{{url('/post/funds')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="pl-lg-4">

                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Funding Year</label>
                        <input type="text" id="input-email" class="form-control" placeholder="Funding Year. E.g: 2021-22" name="funding_year">
                      </div>
                    </div>

                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Funding Amount</label>
                        <input type="text" id="input-email" class="form-control" placeholder="Funding Amount E.g: 5 Cr" name="funding_amount">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Fund Remarks</label>
                        <textarea id="summernote" class="form-control" name="funding_remarks"></textarea>
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