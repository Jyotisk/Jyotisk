@extends('include.nav')

@section('content')

    <!--About Us heading-->
    <div class="about-us">
        <div class="about-overlay">
            <h2 class="about-header">
                Department
            </h2>
            <p>Department - Scope of Works</p>
        </div>
    </div>
    <!--End of About Us heading-->

    <!--Scope of Works-->
    <div class="depart-scope">

        <div class="scope-agri">
            <div class="container">
                @php
                    $i = 0;
                @endphp
                @foreach($scopes as $row)
                <div class="card mb-3">
                    <div class="row no-gutters p-4">
                        @for($j = 0; $j < count($scope_image[$i]); $j++)
                        <div class="col-md-4">
                            
                            <img src="{{asset($scope_image[$i][$j])}}" class="card-img" alt="Agriculture" style="max-width: 318px; height: 90%;">
                            
                        </div>
                        @endfor
                        <div class="col-md-8 pt-5" style="max-height: auto;">
                            <div class="card-body pt-5">
                                <h3 class="card-title">{{($row->category_name)}}</h3>
                            </div>
                            <br><br><br><br><br>
                        </div>
                       
                        <div class="row no-gutters">
                            <div class="col-md-12">
                                <div class="card-body">
                                   
                                    {!!($row->scope_description)!!}
                                </div>
                            </div>    
                        </div>
                    </div>
                </div>
                @php
                    
                    $i++;
                @endphp
                @endforeach

    
                {{-- <div class="card mb-3">
                    <div class="row no-gutters p-4">
                        <div class="col-md-12 pt-5" style="max-height: auto;">
                            <div class="card-body">
                                <h3 class="card-title">Panchayat & Rural Development</h3>
                            </div>
                        </div>
                        <div class="row no-gutters">
                            <div class="col-md-12">
                                <div class="card-body">
                                    <p class="card-text text-justify">Construction, Repairing & Maintenance of any socio-economic community assets; rural roads & dykes, highland platform, schools; infrastructure for supporting Agriculture, Horticulture, Pisciculture, Animal husbandry etc.; infrastructural and financial support to SHGs/JLGs, Grant-in-Aid/Financial assistance to NGO etc. are being taken up. Endeavour will be made to coordinate all works with the PRIs for synergy and to avoid duplicity
                                        <br><br>
                                    </p>
                                    <p class="card-text">
                                        <div class="row no-gutters text-center">
                                            <div class="col-lg-12">
                                                <img src="images/02.jpg" alt="Pic1" class="rounded img-thumbnail">
                                                <img src="images/02.jpg" alt="Pic1" class="rounded img-thumbnail">
                                                <img src="images/02.jpg" alt="Pic1" class="rounded img-thumbnail">
                                            </div>
                                        </div>
                                    </p>
                                    <p class="card-text">
                                        <br><br>
                                        The MAC will also make co-ordination with the State P&RD Deptt., NIRD, SIRD, NEDFi and other such institutions for Transfer of Technology, Skill Up-gradation training etc.
                                        <br><br>
                                    </p>
                                    <p class="card-text">
                                        <div class="row no-gutters text-center">
                                            <div class="col-lg-12">
                                                <img src="images/02.jpg" alt="Pic1" class="rounded img-thumbnail">
                                                <img src="images/02.jpg" alt="Pic1" class="rounded img-thumbnail">
                                                <img src="images/02.jpg" alt="Pic1" class="rounded img-thumbnail">
                                            </div>
                                        </div>
                                    </p>
                                </div>
                            </div>    
                        </div>
                    </div>
                </div> --}}


                <div class="card mb-3">
                    
                </div>


            </div>
        </div>
        
    </div>

    @endsection

