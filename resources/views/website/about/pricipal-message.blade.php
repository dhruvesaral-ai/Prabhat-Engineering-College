@extends('website.layout.main')
@section('content')

<div class="contents">


    <div class="container">
        <section id="about-library" class="section-padding pt-0">
            <div class="section-heading center-heading">
                <h3>Principal</h3>
            </div>

            <div class="visit-post">
                <div class="row">
                    <div class="col-md-4 col-12">
                        <div class="visit-image">
                            <img src="{{ asset('public/website/new-img/principle.webp') }}">
                        </div>
                        <div class="text-center">
                            <h4>Mr.Sunil Singh</h4>
                            <span>Principal</span>
                        </div>

                    </div>
                    <div class="col-md-8 col-12">
                        <div class="visit-content">
                            <h3 class="custom-text-bar">
                                Principal Message
                            </h3><br>
                            <span class="text-italic">Prabhat Engineering College will definitely continue to develop and grow, driven by a strong vision for quality education. Our vision statement rightly declares this to be a "year of education with imagination."</span><br> <br>
                            <span>To match our ambitions, our goals and objectives must rise higher. The emphasis will be on enhancing the intellectual capital of both teacher and pupil — a key step in transforming PEC from a leading institution in Uttar Pradesh to one of national prominence.</span><br> <br>
                            <span>My best wishes are always with you on this journey of growth and learning.</span>
                        </div>
                    </div>

                </div>
            </div>
        </section>


    </div>
</div>


@endsection