@extends('website.layout.main')
@section('content')

<div class="contents">


    <div class="container">
        <section id="about-library" class="section-padding pt-0">
            <div class="section-heading center-heading">
                <h3>Chairman</h3>
            </div>

            <div class="visit-post">
                <div class="row">
                    <div class="col-md-4 col-12">
                        <div class="visit-image">
                            <img src="{{ asset('public/website/new-img/ChairmanSir_pic.webp') }}">
                        </div>
                        <div class="text-center">
                            <h4> P.C Kurele</h4>
                            <span>Chairman</span>
                        </div>
                    </div>
                    <div class="col-md-8 col-12">
                        <div class="visit-content">
                            <h3 class="custom-text-bar">
                                Chairman's Message
                            </h3><br>
                            <span>Welcome to Prabhat Engineering College, where you are offered endless opportunities for self-development. We offer full-time bachelor's and master's degree programs, designed to mold you into a true professional.</span><br><br>
                            <span>At PEC, you'll specialize through carefully structured programs aligned with your goals. We collaborate extensively with scientific and industry partners, ensuring that what you learn today sets the foundation for a successful tomorrow.</span><br><br>
                            <span>Your journey here is a logical extension of your past efforts, aimed at preparing you for a future that’s not just achievable, but extraordinary. We're proud to be part of that path.</span>
                        </div>
                    </div>

                </div>
            </div>
        </section>


    </div>
</div>

@endsection