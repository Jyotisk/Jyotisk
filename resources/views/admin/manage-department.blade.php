@extends('include.sidenav')

@section('sidenav')

@if(Session::has('success'))
<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('success') }}</p>
@endif
<!-- Main content -->
  {{-- <div class="main-content" id="panel">

    <div class="" style="min-height: 100px; background-size: cover; background-position: center top;">
   
    </div>
  
    
  </div> --}}
  
    <!-- End Navbar -->
    <!-- Header -->
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
        <div class="container-fluid  mt--7">
          <div class="header-body">
            <!-- Card stats -->
            <div class="row">
              <div class="col-xl-3 col-lg-6">
                <div class="card card-stats mb-4 mb-xl-0">
                  <div class="card-body">
                    <div class="row">
                      <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Total Department</h5>
                        <span class="h2 font-weight-bold mb-0">33</span>
                      </div>
                      <div class="col-auto">
                        <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                          <i class="fas fa-chart-bar"></i>
                        </div>
                      </div>
                    </div>
                    <p class="mt-3 mb-0 text-muted text-sm">
                      
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-6">
                <div class="card card-stats mb-4 mb-xl-0">
                  <div class="card-body">
                    <div class="row">
                      <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Subdepartment</h5>
                        <span class="h2 font-weight-bold mb-0">3</span>
                      </div>
                      <div class="col-auto">
                        <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                          <i class="fas fa-chart-pie"></i>
                        </div>
                      </div>
                    </div>
                    <p class="mt-3 mb-0 text-muted text-sm">
                      
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-6">
                
              </div>
              <div class="col-xl-3 col-lg-6">
                
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid mt--7">
        <!-- Table -->
        <div class="row">
          <div class="col-xl-8 order-xl-1">
            <div class="card shadow">
              <div class="card-header border-0">
                <h3 class="mb-0">Manage Departments</h3>
              </div>
              <div class="table-responsive">
                <table class="table align-items-center table-flush">
                  <thead class="thead-light">
                    <tr>
                      <th>Sl. No</th>
                      <th>Department Name</th>
                      <th>Action</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($departments as $dept)
                    <tr>
                      <th scope="row">
                        
                            <span class="mb-0 text-sm">{{ $loop->iteration }}</span>
                        
                      </th>
                      <td>
                        {{ $dept->department_name }}
                      </td>
                      <td>
                        
                        {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editmodal">Edit</button> --}}
                        <a class="btn btn-primary" data-toggle="modal" data-target="#editmodal" href="">Edit</a>
                        </td>
                      
                     
                    </tr>
                    @endforeach
                   
                   
                   
                  </tbody>
                </table>

                {{-- Edit Modal Start--}}
                <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="editmodalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      
                      <div class="modal-body">
                        <form id="companydata">
                          <div class="form-group">
                            <input type="hidden" id="dept_id" name="dept_id" value="">

                            <label for="recipient-name" class="col-form-label">Department Name:</label>
                           
                            <input type="text" name="department_name" value="" class="form-control">
                          </div>
                          
                        
                      
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Update</button>
                      </div>
                    </div>
                  </div>
                </div>
                {{-- Edit Modal End --}}
              </div>
              <div class="card-footer py-4">
                <nav aria-label="...">
                  <ul class="pagination justify-content-end mb-0">
                    <li class="page-item disabled">
                      <a class="page-link" href="#" tabindex="-1">
                        <i class="fas fa-angle-left"></i>
                        <span class="sr-only">Previous</span>
                      </a>
                    </li>
                    <li class="page-item active">
                      <a class="page-link" href="#">1</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                      <a class="page-link" href="#">
                        <i class="fas fa-angle-right"></i>
                        <span class="sr-only">Next</span>
                      </a>
                    </li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
        <!-- Dark table -->
       
        <!-- Footer -->
       
      </div>
    </div>
  
@endsection

<script>
  $('#editmodal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('whatever') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-title').text('New message to ' + recipient)
  modal.find('.modal-body input').val(recipient)
})
</script>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>