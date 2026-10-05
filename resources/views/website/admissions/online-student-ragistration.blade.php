@extends('website.layout.main')
@section('content')
    <div class="contents">
        <section id="cnt-section" class="contact-info section-padding pt-0">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6">
                        <div class="section-heading center-heading">
                            <h3>Student Registration</h3>

                            <p>Prabhat Engineering College</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <form method="POST" action="{{ route('online.registration.store') }}" enctype="multipart/form-data"
                        class="thm-form2" id="">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <select id="form_course" name="courses" class="form-control">
                                        <option value="" >Please Select Course</option>
                                        <option value="MBA">MBA</option>
                                        <option value="B.Tech">B.Tech</option>
                                        <option value="Polytechnic">Polytechnic</option>
                                        <option value="Diploma">Diploma</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" id="name" name="contact_name" class="form-control"
                                        placeholder="Full Name">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" name="contact_email" id="email" class="form-control"
                                        placeholder="Email Address">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" name="contact_phone" id="mobile" class="form-control"
                                        placeholder="Phone">
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
                                    <textarea name="address" class="form-control" placeholder="Postal Address"></textarea>
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
                                    <input type="text" name="father_name" id="father" class="form-control"
                                        placeholder="Father's Name">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" name="father_mobile" id="father_mobile" class="form-control"
                                        placeholder="Father's Mobile NO.">
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
                                    <input type="text" name="mothers_name" id="mother_name" class="form-control"
                                        placeholder="Mother's Occupation.">
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
                                    <input type="text" name="institute_name" id="institute_name" class="form-control"
                                        placeholder="Institute Name.">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" name="percentage_grade" id="percenteage_grade"
                                        class="form-control" placeholder="Percentagee/Grade">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" name="examination_board" id="examination_board"
                                        class="form-control" placeholder="Examination Borad">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="mt-4 text-right">
                                <button class="btn btn-main" type="submit">Submit <i
                                        class="fa fa-angle-right ml-2"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
    </div>
    </section>
@endsection
