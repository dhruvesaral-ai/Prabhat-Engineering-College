@extends('website.layout.main')
@section('content')

<div class="contents">


    <div class="container">
        <section id="about-library" class="section-padding pt-0">
            <div class="section-heading center-heading">
                <h3>Pharmacy Principal</h3>
            </div>

            <div class="visit-post">
                <div class="row">
                    <div class="col-md-4 col-12">
                        <div class="visit-image">
                            <img src="{{ asset('public/website/new-img/pharmacy-principal.webp') }}">
                        </div>
                        <div class="text-center">
                            <h4>Mrs. Shruti Shukla</h4>
                            <span>Principal - Pharmacy Department</span>
                        </div>

                    </div>
                    <div class="col-md-8 col-12">
                        <div class="visit-content">
                            <h3 class="custom-text-bar">
                                Principal Message
                            </h3><br>
                            <span class="text-italic">Welcome to the Pharmacy Department of Prabhat Engineering College.</span><br> <br>
                            <span>
                                "Our mission is to provide quality education, practical knowledge, and professional ethics to prepare students for successful careers in the pharmaceutical and healthcare sectors. We are committed to academic excellence, innovation, and overall student development."
                            </span>
                        </div>
                    </div>

                </div>
            </div>
        </section>


    </div>
</div>


@endsection