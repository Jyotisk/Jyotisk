@extends('include.nav')

@section('content')

    <!--About Us heading-->
    <div class="about-us">
        <div class="about-overlay">
            <h2 class="about-header">
                About Us
            </h2>
            <p>About Us - About MAC</p>
        </div>
    </div>
    <!--End of About Us heading-->
    
    <!--About Us Card-->
    <div class="about">
        <div class="container-fluid">
            <div class="card mb-3" style="border: none; padding-top: 104px; padding-bottom: 104px; padding-left: 3%">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img class="about-img" src="images/about.jpg" alt="MAC pic" style="margin-left: 50px; width: 105%; border-style: none;">
                    </div>
                    <div class="col-md-8" style="text-align: justify;
                    padding-top: 4%; padding-left: 10%; padding-right: 7%;">
                        <div class="card-body">
                            <h5 style="font-family: 'Roboto', sans-serif; font-size: 16px; font-weight: 700;">Who we are</h5>
                            <h4 style="font-weight: 700; font-family: 'Roboto', sans-serif; font-size: 24px; padding-top: 2%;">We are a strong and strategically driving and influential force behind the local government sector</h4>
                            <p class="card-text" style="text-align: justify; font-family: 'Roboto', sans-serif; font-size: 14px; font-weight: 400; padding-top: 2%;">In the year 1995, Mising Autonomous Council was established under the Mising Autonomous Council Act, which was enacted by Assam Legislative Assembly with its H.Q. in Gogamukh, Dhemaji. MAC was additionally framed in that very year. The first election of MAC was held in October, 2013 and a chosen body was shaped on sixth November which is currently working without a hitch.<br>
                            The board has consistently been dynamic in the improvement of its populace. Honourable Chairman 'Paramananda Chayengia' of Missing Autonomous Council with his initiative abilities wants to bring a change for the advancement of the Mising public. The Act was additionally revised by the MAC Amendment Act, 2005, to oblige other Scheduled Tribes populaces just as any remaining Non-Tribal people group. </p>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End of About Us Card-->

    <!--Core Area and Satellite Areas-->
    <div class="core-area">
        <div class="container-fluid">
            <h2 class="core-area-header">Core Area and Satellite Areas and defined by the Act as follows</h2>
            
            <div class="core-body" style="padding-left: 120px;
            padding-right: 120px; text-align: center; margin-top: 30px">
                <p>MAC comprises of *Satellite and Core Areas for social, economic, educational, ethnic,  and cultural  progression of the Mising and other Scheduled Tribe people group dwelling in that.</p>
                <p>'Satellite Areas' means the region or regions comprising of non-contiguous cluster of villages predominantly inhabited by the Scheduled Tribes populace having half or more in general in the bunch and not really in the singular villages.</p>
                <p>“Core Areas" signifies the conservative and touching regions prevalently occupied by Scheduled Tribes populace having half or more overall nearby and not really in the singular towns.</p>
            </div>

            <div class="our-mission">
                <div class="our-mission-overlay">
                    <div class="container-fluid">
                        <div class="card mb-3">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <p style="text-align: center; margin-top: 65px;">
                                        <img src="images/icons/mission.svg" alt="Our Mission Icon" style="width: 112px">
                                        <h2 style="margin-top: 0px">Our Mission</h2>
                                    </p>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <p>Our Mission is to work for social, economic, educational, ethnic and cultural advancement of the Mising, other Scheduled Tribes, Protected Classes and all other communities residing in Mising Autonomous Council area of Assam.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--End of Core Area and Satellite-->

    <!--Word from our Chairman-->
    <div class="word-chair">
        <div class="container-fluid">

            <div class="our-vision">
                <div class="our-vision-overlay">
                    <div class="container-fluid">
                        <div class="card mb-3">
                            <div class="row no-gutters">
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <p>Our Vision is to create a fair and evolved society in the Mising Autonomous Council region with identical rights and standards of living equal to other people and other parts of our country.</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <p style="text-align: center; margin-top: 65px;">
                                        <img src="images/icons/vision.svg" alt="Our Vision Icon" style="width: 112px">
                                        <h2 style="text-align: center; margin-top: 0px">Our Vision</h2>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="word-header">
                <div class="container-fluid">
                    <div class="card mb-3">
                        <div class="row no-gutters">
                            <div class="col-md-8">
                                <div class="card-body">
                                    <p>
                                        <h2>Words from our<br>Hon'ble Chairman</h2>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium, eveniet! Omnis distinctio dolorum voluptate cumque. Architecto fugit magnam enim? Omnis est iure praesentium obcaecati maxime, doloribus quibusdam distinctio consequatur provident?</p>
                                        <p class="chairman-sign">- Shri Sunil Pegu<br>Hon'ble Chairman<br>Mising Autonomous Council</p>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <p class="chairman-dp">
                                    <img src="images/chairman.png" alt="Chairman Pic">
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--End of our Chairman-->



   

        
        @endsection

