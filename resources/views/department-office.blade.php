@extends('include.nav')

@section('content')

    <!--About Us heading-->
    <div class="about-us">
        <div class="about-overlay">
            <h2 class="about-header">
                Department
            </h2>
            <p>Department - Administration - List of Office Staff</p>
        </div>
    </div>
    <!--End of About Us heading-->

    <!--Table of Executive Councilors-->
    <div class="department">
        <div class="executive">
            <div class="container">
                <p>
                    <h2 class="text-center">List of Office Staff</h2>
                </p>
    
                <table class="table table-striped">
                    <thead class="thead-color">
                      <tr>
                        <th scope="col" class="text-center">Sr.No</th>
                        <th scope="col">Name</th>
                        <th scope="col">Designation</th>
                      </tr>
                    </thead>
                    <tbody >
                      <tr>
                        <th scope="row" class="text-center">1</th>
                        <td>Sri Pradip Kr. Doley</td>
                        <td>Principal Secretary</td>
                      </tr>
                    </tbody>
                  </table>
            </div>
            <br><br>
              
        </div>
    </div>

    @endsection