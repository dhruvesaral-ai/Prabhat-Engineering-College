@extends('website.layout.main')
@section('content')

        <div class="contents">
            <section id="cnt-section" class="contact-info section-padding pt-0">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8"> <!-- Changed from col-lg-6 to col-lg-8 to match form width -->
                            <div class="section-heading center-heading text-center"> <!-- Added text-center -->
                                <h3>Student Registration</h3>
                                <p>Prabhat Engineering College</p>
                            </div>
                            
                            <form method="POST" action="https://smslucknow.ac.in/contact/submit" accept-charset="UTF-8"
                                class="contact__form contactForm" id="contactForm"><input name="_token" type="hidden"
                                    value="QDEcXQRPUkOZPWFOAqiRgezGmhe2uei0ZAgHG843">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="alert alert-success contact__msg" style="display: none"
                                            role="alert">
                                            Your message was sent successfully.
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <select id="form_course" name="course" class="form-control">
                                                <option value="">Please Select Course</option>
                                                <option value="MBA">MBA</option>
                                                <option value="B.Tech">B.Tech</option>
                                                <option value="Polytechnic">Polytechnic</option>
                                                <option value="Diploma">Diploma</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" id="name" name="contact_name"
                                                class="form-control" placeholder="Full Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" name="contact_email" id="email"
                                                class="form-control" placeholder="Email Address">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" name="contact_phone" id="mobile"
                                                class="form-control" placeholder="Phone">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="date" name="dob" id="mobile" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <select id="form_course" name="gender" class="form-control">
                                                <option value="" selected disabled>Gender</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                        </div>
                                    </div>


                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" name="caste" id="caste" class="form-control"
                                                placeholder="Caste">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input type="file" name="file" id="file" class="form-control"
                                                placeholder="Choose File">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <textarea name="address" id="address" class="form-control" placeholder="Postal Address" rows="3"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <input type="text" name="country" id="country" class="form-control"
                                                placeholder="Country">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <input type="text" name="state" id="state" class="form-control"
                                                placeholder="state">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <input type="text" name="city" id="city" class="form-control"
                                                placeholder="city">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" name="pin" id="pin" class="form-control"
                                                placeholder="PIN Code">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" name="father_name" id="father"
                                                class="form-control" placeholder="Father's Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" name="father_mobile" id="father_mobile"
                                                class="form-control" placeholder="Father's Mobile NO.">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" name="father_occupation" id="father_occupation"
                                                class="form-control" placeholder="Father's Occupation.">
                                        </div>
                                    </div>


                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" name="mothers_name" id="mother_name"
                                                class="form-control" placeholder="Mother's Occupation.">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" name="academic" id="academic_qualification"
                                                class="form-control" placeholder="Academic Qualification.">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" name="institute_name" id="institute_name"
                                                class="form-control" placeholder="Institute Name.">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" name="percenteage_grade" id="percenteage_grade"
                                                class="form-control" placeholder="Percentagee/Grade">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" name="examination_borad" id="examination_borad"
                                                class="form-control" placeholder="Examination Borad">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group d-flex justify-content-center"> <!-- Centered the captcha -->
                                            <div class="g-recaptcha"
                                                data-sitekey="6LdSIhshAAAAAEQ1pawrEmwwxWA7ilWq2pYbSgL9"
                                                name="captcha"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="mt-4 text-center"> <!-- Changed from text-right to text-center -->
                                        <button class="btn btn-main ajax" type="button">Send Message <i
                                                class="fa fa-angle-right ml-2"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>

@endsection



<style>
    .contact-info {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: calc(100vh - 200px); /* Adjust based on your header/footer height */
    }
    
    .contact__form {
        background: #fff;
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    }
    
    .section-heading {
        margin-bottom: 30px;
    }
</style>


