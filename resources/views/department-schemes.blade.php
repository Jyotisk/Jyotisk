@extends('include.nav')

@section('content')
    <!--About Us heading-->
    <div class="about-us">
        <div class="about-overlay">
            <h2 class="about-header">
                Department
            </h2>
            <p>Department - Schemes/Programmes</p>
        </div>
    </div>
    <!--End of About Us heading-->

    <!--Livelihood-->
    <div class="department">
        <div class="depart-livelihood">
            <div class="container">
                <p>
                    <h2 class="text-center">Livelihood Schemes/Program</h2>
                </p>
    
                <div class="row" style="margin-top: 70px;">
                    @foreach($scheme as $row)
                    <div class="col-lg-3 col-md-12 mb-3 mb-lg-0">
                        
                        <div class="card text-center" style="width: 18rem; height: 31%;">
                            <div class="card-body">
                              <h5 class="card-title">{{($row->scheme_title)}}</h5>
                            </div>
                            <div class="card-body" style="margin-top: 53px;">
                                <a href="#" class="btn btn-primary">View Details</a>
                            </div>
                        </div>
                        
                        {{-- <div class="card text-center mt-3" style="width: 18rem; height: 31%;">
                            <div class="card-body">
                              <h5 class="card-title">Assistance to Farmers for Lac Culture on Indian Plum Tree</h5>
                            </div>
                            <div class="card-body" style="margin-top: 53px;">
                                <a href="#" class="btn btn-primary">View Details</a>
                            </div>
                        </div>
                        <div class="card text-center mt-3" style="width: 18rem; height: 31%;">
                            <div class="card-body">
                              <h5 class="card-title">Project Report on
                                Rubber Plantation</h5>
                            </div>
                            <div class="card-body" style="margin-top: 53px;">
                                <a href="#" class="btn btn-primary">View Details</a>
                            </div>
                        </div> --}}
                    </div>
                    @endforeach
                    {{-- <div class="col-lg-3 mb-3 mb-lg-0">
                        <div class="card text-center" style="width: 18rem; height: 31%;">
                            <div class="card-body">
                              <h5 class="card-title">Assistance for Banana Cultivation</h5>
                            </div>
                            <div class="card-body" style="margin-top: 53px;">
                                <a href="#" class="btn btn-primary">View Details</a>
                            </div>
                        </div>
                        <div class="card text-center mt-3" style="width: 18rem; height: 31%;">
                            <div class="card-body">
                              <h5 class="card-title">Assistance to Farmers for Poultry Farming</h5>
                            </div>
                            <div class="card-body" style="margin-top: 53px;">
                                <a href="#" class="btn btn-primary">View Details</a>
                            </div>
                        </div>
                        <div class="card text-center mt-3" style="width: 18rem; height: 31%;">
                            <div class="card-body">
                              <h5 class="card-title">Project Report on Toria Seed Bank in Majuli</h5>
                            </div>
                            <div class="card-body" style="margin-top: 53px;">
                                <a href="#" class="btn btn-primary">View Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-3 mb-lg-0">
                        <div class="card text-center" style="width: 18rem; height: 31%;">
                            <div class="card-body">
                              <h5 class="card-title">Assistance for Piggery Farming</h5>
                            </div>
                            <div class="card-body" style="margin-top: 53px;">
                                <a href="#" class="btn btn-primary">View Details</a>
                            </div>
                        </div>
                        <div class="card text-center mt-3" style="width: 18rem; height: 31%;">
                            <div class="card-body">
                              <h5 class="card-title">Assistance to Farmers for Sugarcane Cultivation</h5>
                            </div>
                            <div class="card-body" style="margin-top: 53px;">
                                <a href="#" class="btn btn-primary">View Details</a>
                            </div>
                        </div>
                        <div class="card text-center mt-3" style="width: 18rem; height: 31%;">
                            <div class="card-body">
                              <h5 class="card-title">Skill Up-gradation Training for Weavers</h5>
                            </div>
                            <div class="card-body" style="margin-top: 53px;">
                                <a href="#" class="btn btn-primary">View Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-3 mb-lg-0">
                        <div class="card text-center" style="width: 18rem; height: 31%;">
                            <div class="card-body">
                              <h5 class="card-title">Assistance to Farmers for Fishery Development</h5>
                            </div>
                            <div class="card-body" style="margin-top: 53px;">
                                <a href="#" class="btn btn-primary">View Details</a>
                            </div>
                        </div>
                        <div class="card text-center mt-3" style="width: 18rem; height: 31%;">
                            <div class="card-body">
                              <h5 class="card-title">Demonstrative Boro Rice Cultivation</h5>
                            </div>
                            <div class="card-body" style="margin-top: 53px;">
                                <a href="#" class="btn btn-primary">View Details</a>
                            </div>
                        </div>
                    </div> --}}
                </div>
    
            </div>
        </div>
    </div>
    

    <!--End of Livelihood-->
@endsection
    