@extends('website.layout.main')
@section('content')
<style>
    .contact-card {
    position: relative;
    background: linear-gradient(135deg,rgb(135, 165, 228),rgb(222, 222, 222));
    /* background-color: #1f3971; */
    color: #fff;
    border-radius: 20px;
    padding: 30px 10px;
    text-align: center;
    overflow: hidden;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }
   /* .contact-card  h5{
    color:#fff;
   } */

  .contact-card::before,
  .contact-card::after {
    content: "";
    position: absolute;
    border-radius: 50%;
    background: rgba(0, 0, 0, 0.33);
    z-index: 0;
  }

  .contact-card::before {
    width: 110px;
    height: 110px;
    top: -30px;
    left: -30px;
  }



  .contact-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 12px 25px rgba(31, 57, 113, 0.4);
  }

  .contact-card .icon {
    font-size: 30px;
    /* margin-bottom: 25px; */
    margin-top:-8px;
    z-index: 1;
    position: relative;
  }

  .contact-card h5 {
    font-size: 20px;
    margin-bottom: 10px;
    z-index: 1;
    position: relative;
  }

  .contact-card p,
  .contact-card a {
    font-size: 16px;
    color: #1f3971;
    z-index: 1;
    position: relative;
    font-weight: 600;
    text-decoration: none;
  }

  .contact-card a:hover {
    text-decoration: underline;
  }
</style>
<div class="contents">
    <!-- Contact Cards Section -->
    <section class="container my-5">
        <div class="row g-4 justify-content-center">
            <!-- Phone Card -->
            <div class="col-md-4">
                <div class="contact-card">
                    <div class="icon"><i class="fas fa-phone"></i></div>
                    <h5>Phone Number</h5>
                    <p><a href="tel:+917007343755">+91-7007343755</a></p>
                </div>
            </div>
            <!-- Email Card -->
            <div class="col-md-4">
                <div class="contact-card">
                    <div class="icon"><i class="fas fa-envelope"></i></div>
                    <h5>Email Address</h5>
                    <p><a href="mailto:info@prabhateng.co.in">info@prabhateng.co.in</a></p>
                </div>
            </div>
            <!-- Address Card -->
            <div class="col-md-4">
                <div class="contact-card">
                    <div class="icon"><i class="fas fa-map-marker-alt"></i></div>
                    <h5>Office Address</h5>
                    <p>N.H-2 Kalpi Road, Near Bara Toll, Kanpur-209311 (UP)</p>
                </div>
            </div>
        </div>
    </section>

    <section id="cnt-section" class="contact-info section-padding pt-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <div class="section-heading">
                        <h3>Contact Us</h3>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <form method="POST" action="" accept-charset="UTF-8" class="thm-form2" id="">
                        @csrf
                        <div class="row justify-content-center">
                            <div class="col-12">
                                <div class="form-group text-center">
                                    <input type="text" id="name" name="contact_name" class="form-control mx-auto" placeholder="Full Name" style="max-width: 100%">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group text-center">
                                    <input type="text" name="contact_email" id="email" class="form-control mx-auto" placeholder="Email Address" style="max-width: 100%">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group text-center">
                                    <textarea name="address" id="address" class="form-control mx-auto" placeholder="Your Message" rows="5" style="max-width: 100%"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-center">
                            <div class="col-12 text-center">
                                <div class="mt-4">
                                    <button class="btn btn-main" type="submit">Send Message <i class="fa fa-angle-right ml-2"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    
</div>

@endsection