@extends('include.nav')

@section('content')


    <!--Funding heading-->
    <div class="about-us">
        <div class="about-overlay">
            <h2 class="about-header">
                Funding
            </h2>
            <p>Department - Funding</p>
        </div>
    </div>
    <!--End of Funding heading-->

    <!--Funds Table-->
    <div class="department">
        <div class="executive">
            <div class="container">
                <p>
                    <h2 class="text-center">Funding</h2>
                </p>
                <p class="pt-3 text-justify" style="font-family: 'Roboto', sans-serif; font-weight: 400; font-size: 16px;">
                The MAC is funded by the State Govt. of Assam under Tribal Sub Plan (TSP). Fund allocation to MAC was very little till 2005. In 2005, the Govt entered in to an agreement with the agitating tribal organizations and it was decided to enhance the budget allocation to MAC. Since then fund allocation has been gradually increased, although the amount always falls short of meeting huge demands and needs.
                <br><br>

                Fund allocated to MAC since 1996-97 are given below. Funds allocated during 2010-11 was lapsed as there was no Council, not even a nominated one; and fund allocated for 2011-12 and 2012-13 were revenue deposited for the same reason. Fund for 2013-14 has been released after the elected council has taken charge and the same is being utilized at present.
                </p>
    
                <table class="table table-striped" style="border: 1px solid #dddddd;">
                    <tbody >
                        @foreach($fund as $row)
                        <tr>
                            <th scope="row" class="text-center">{{$loop->iteration}}</th>
                            <td></td>
                            <td>{{($row->funding_year)}}</td>
                            @if(empty($row->funding_remarks))
                            <td>Rs. {{($row->funding_amount)}}</td>
                            @else
                            <td>Rs. {{($row->funding_amount)}} ({{($row->funding_remarks)}})</td>
                            @endif
                        </tr>
                        @endforeach 
                        
                    </tbody>
                  </table>
            </div>
            <br><br>
              
        </div>

    </div>
    <!-- End of Funds Table  -->



@endsection