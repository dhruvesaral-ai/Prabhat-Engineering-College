@extends('website.layout.main')
@section('content')

<div class="contents">


    <div class="container">
        <section id="about-library" class="section-padding pt-0 pb-4">
            <div class="section-heading center-heading">
                <h3>Careers at Prabhat Engineering College</h3>
            </div>
            <p>Established in 2008 and affiliated with AKTU, PEC Kanpur is a top institution for Engineering,
                MBA, and Polytechnic education. Our mission is to develop skilled professionals through modern
                education and infrastructure.</p>
                
            <div class="row col-12 mx-auto px-0 d-flex justify-content-center">
                <div class="col-xl-5 col-lg-6 ">
                    <div class="card apply-btn-card">
                        <h5>For Faculty <i class="fa  fa-user-graduate ms-2"></i></h5>
                        <a href="{{route('faculty.career.form')}}" class="btn-custom-blue position-relative overflow-hidden mx-auto">
                            <span class="btn-hover-Blueline position-absolute"></span>
                            Apply now <i class="fa fa-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6">
                    <div class="card apply-btn-card">
                        <h5>For Staff <i class="fa  fa-users ms-2"></i></h5>
                        <a  href="{{route('for.staff.forms')}}" class="btn-custom-blue position-relative overflow-hidden mx-auto">
                            <span class="btn-hover-Blueline position-absolute"></span>
                            Apply now <i class="fa fa-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <div class="visit-post">
            <div class="row">
                <div class="col-md-6 col-12">
                    <div class="visit-image">
                        <img src="https://www.prabhatengg.co.in/gallery/mini/campus15.jpeg">
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="visit-content">
                        <h3 class="custom-text-bar">
                            🎓 Programs We Offer
                        </h3><br> <br>
                        <div class="row">
                            <div class="col-md-6 col-4">
                                <h3>MBA</h3>
                                <ul>
                                    <li type="disc">Specializations: HR, Marketing, Finance, IT</li>
                                    <li type="disc">Seats Available: 60</li>
                                    <li type="disc">Approved by AICTE</li>
                                </ul>
                            </div>
                            <div class="col-md-6 col-4">
                                <h3>B.Tech</h3>
                                <ul>
                                    <li type="disc">Computer Science – 120 seats</li>
                                    <li type="disc">Electrical – 45 seats</li>
                                    <li type="disc">Mechanical – 45 seats</li>
                                    <li type="disc">Civil – 30 seats</li>
                                </ul>
                            </div>
                            <div class="col-md-6 col-4">
                                <h3>Polytechnic</h3>
                                <ul>
                                    <li type="disc">Branches: Civil, Mechanical, Production, Electrical</li>
                                    <li type="disc">Seats: 60 per branch</li>
                                    {{-- <li type="disc">Polytechnic</li> --}}
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="visit-post">

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <div class="visit-content">
                            <h3 class="custom-text-bar text-center">
                                🏫 Campus Facilities
                            </h3><br>
                            <div class="row">
                                <div class="col-md-10 col-12 mb-2">
                                    <ul>
                                        <li type="disc">Wi-Fi enabled campus and digital classrooms</li>
                                        <li type="disc">Fully-equipped labs and workshops</li>
                                        <li type="disc">Library with DELNET access</li>
                                        <li type="disc">Separate hostels for boys and girls</li>
                                        <li type="disc">Indoor gym, sports facilities, mess and cafeteria
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><br>
        </div>


        <div class="visit-post">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <div class="visit-content">
                            <h3 class="custom-text-bar text-center">
                                👨‍🏫 Our Faculty
                            </h3><br>
                            <p>With an average academic experience of 10 years and a faculty-student ratio of
                                1:6, our educators are dedicated to delivering high-quality, personalized
                                instruction across all disciplines.</p>
                        </div>
                    </div>
                </div>
            </div><br>
        </div>

        <div class="visit-post">

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <div class="visit-content">
                            <h3 class="custom-text-bar text-center">
                                💼 Placement Opportunities
                            </h3><br>
                            <p>Our Placement Cell connects students with top recruiters through job fairs,
                                campus drives, and internships.</p>
                            <div class="row">
                                <div class="col-md-10 col-12 mb-2">
                                    <ul>
                                        <li type="disc">PepsiCo</li>
                                        <li type="disc">Tata</li>
                                        <li type="disc">Airtel</li>
                                        <li type="disc">HCL</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><br>
        </div>

        <div class="visit-post">

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <div class="visit-content">
                            <h3 class="custom-text-bar text-center">
                                📍 Location
                            </h3><br>
                            <p>Prabhat Engineering College is located on Kanpur–Kalpi Road (NH-2), Near Bara
                                Toll, Kanpur, Uttar Pradesh – 209304.</p>

                        </div>
                    </div>
                </div>
            </div><br>
        </div>
    </div>
    @endsection