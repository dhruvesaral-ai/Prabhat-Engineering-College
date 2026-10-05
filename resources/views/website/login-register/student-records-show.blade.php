@extends('layout.main')

@section('content')
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card shadow-lg border-0 rounded-4">
                    <div class="card-header bg-primary text-white rounded-top-4 py-3">
                        <h4 class="mb-0 text-center" style="color: whiteSmoke">Student Profile Details</h4>
                    </div>

                    <div class="card-body">
                        <div class="text-center mb-4">
                            {{-- Profile Image --}}
                            <a href="{{ asset('public/' . $registrations->photo) }}" target="_blank">
                                <img src="{{ asset('public/' . $registrations->photo) }}"
                                    onerror="this.onerror=null; this.src='{{ asset('uploads/photos/profile-default.png') }}';"
                                    alt="Profile Image" class="rounded-circle shadow" width="150" height="150"
                                    style="object-fit: cover; border: 4px solid #f8f9fa;">
                            </a>
                            <h3 class="mt-3 fw-bold text-primary">{{ $registrations->full_name }}</h3>
                            <p class="text-muted">
                          
                            </p>
                        </div>

                        <div class="card mb-4 border-0 shadow-sm">
                            <div class="card-header bg-light">
                                <h5 class="mb-0 fw-bold">Personal Information</h5>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover">
                                        <tbody>
                                            <tr>
                                                <th width="30%">Father's Name</th>
                                                <td>{{ $registrations->father_name }}</td>
                                            </tr>
                                            <tr>
                                                <th>Mother's Name</th>
                                                <td>{{ $registrations->mother_name }}</td>
                                            </tr>
                                            <tr>
                                                <th>Gender</th>
                                                <td>{{ $registrations->gender }}</td>
                                            </tr>
                                            <tr>
                                                <th>Date of Birth</th>
                                                <td>{{ \Carbon\Carbon::parse($registrations->dob)->format('d M, Y') }}</td>
                                            </tr>
                                            <tr>
                                                <th>Religion</th>
                                                <td>{{ $registrations->religion }}</td>
                                            </tr>
                                            <tr>
                                                <th>Category</th>
                                                <td>{{ $registrations->category }}</td>
                                            </tr>
                                            <tr>
                                                <th>Caste</th>
                                                <td>{{ $registrations->caste }}</td>
                                            </tr>
                                            <tr>
                                                <th>Aadhaar Number</th>
                                                <td>{{ $registrations->aadhaar }}</td>
                                            </tr>
                                            <tr>
                                                <th>PAN Card</th>
                                                <td>{{ $registrations->pan_card }}</td>
                                            </tr>
                                            <tr>
                                                <th>Blood Group</th>
                                                <td>{{ $registrations->blood }}</td>
                                            </tr>
                                            <tr>
                                                <th>Marital Status</th>
                                                <td>{{ $registrations->maritul_status }}</td>
                                            </tr>
                                            <tr>
                                                <th>Nationality</th>
                                                <td>{{ $registrations->nationality }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        {{-- Contact Information --}}
                        <div class="card mb-4 border-0 shadow-sm">
                            <div class="card-header bg-light">
                                <h5 class="mb-0 fw-bold">Contact Information</h5>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover">
                                        <tbody>
                                            <tr>
                                                <th width="30%">Permanent Address</th>
                                                <td>{{ $registrations->p_address }}</td>
                                            </tr>
                                            <tr>
                                                <th>Correspondence Address</th>
                                                <td>{{ $registrations->c_address }}</td>
                                            </tr>
                                            <tr>
                                                <th>State</th>
                                                <td>{{ $registrations->state }}</td>
                                            </tr>
                                            <tr>
                                                <th>City</th>
                                                <td>{{ $registrations->city }}</td>
                                            </tr>
                                            <tr>
                                                <th>PIN Code</th>
                                                <td>{{ $registrations->pin }}</td>
                                            </tr>
                                            <tr>
                                                <th>Mobile</th>
                                                <td>{{ $registrations->mobile }}</td>
                                            </tr>
                                            <tr>
                                                <th>Alternate Mobile</th>
                                                <td>{{ $registrations->alt_mobile }}</td>
                                            </tr>
                                            <tr>
                                                <th>Email</th>
                                                <td>{{ $registrations->email }}</td>
                                            </tr>
                                            <tr>
                                                <th>Parent Email</th>
                                                <td>{{ $registrations->parent_email }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        {{-- Academic Information --}}
                        <div class="card mb-4 border-0 shadow-sm">
                            <div class="card-header bg-light">
                                <h5 class="mb-0 fw-bold">Academic Information</h5>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover">
                                        <tbody>
                                            <tr>
                                                <th width="30%">Course</th>
                                                <td>{{ $registrations->courses}}</td>
                                                




                                            </tr>
                                            <tr>
                                                <th>Sub Course</th>
                                                <td>{{ $registrations->sub_courses }}</td>
                                            </tr>
                                            <tr>
                                                <th>Admission Mode</th>
                                                <td>{{ $registrations->admission_mode }}</td>
                                            </tr>
                                            <tr>
                                                <th>Year/Semester</th>
                                                <td>{{ $registrations->year_semester }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <h6 class="mt-4 fw-bold">10th Details</h6>
                                <div class="table-responsive mt-2">
                                    <table class="table table-sm table-bordered">
                                        <tbody>
                                            <tr>
                                                <th width="30%">Exam Name</th>
                                                <td>{{ $registrations->exam_10 }}</td>
                                            </tr>
                                            <tr>
                                                <th>Board</th>
                                                <td>{{ $registrations->board_10 }}</td>
                                            </tr>
                                            <tr>
                                                <th>School</th>
                                                <td>{{ $registrations->school_10 }}</td>
                                            </tr>
                                            <tr>
                                                <th>Passing Year</th>
                                                <td>{{ $registrations->passing_year_10 }}</td>
                                            </tr>
                                            <tr>
                                                <th>Percentage</th>
                                                <td>{{ $registrations->percentage_10 }}</td>
                                            </tr>
                                            <tr>
                                                <th>Roll Number</th>
                                                <td>{{ $registrations->roll_10 }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        {{-- Bank Details --}}
                        <div class="card mb-4 border-0 shadow-sm">
                            <div class="card-header bg-light">
                                <h5 class="mb-0 fw-bold">Bank Details</h5>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover">
                                        <tbody>
                                            <tr>
                                                <th width="30%">Account Holder Name</th>
                                                <td>{{ $registrations->account_holder_name }}</td>
                                            </tr>
                                            <tr>
                                                <th>Bank Name</th>
                                                <td>{{ $registrations->bank_name }}</td>
                                            </tr>
                                            <tr>
                                                <th>Account Number</th>
                                                <td>{{ $registrations->account_number }}</td>
                                            </tr>
                                            <tr>
                                                <th>IFSC Code</th>
                                                <td>{{ $registrations->ifsc_code }}</td>
                                            </tr>
                                            <tr>
                                                <th>Branch Name</th>
                                                <td>{{ $registrations->branch_name }}</td>
                                            </tr>
                                            <tr>
                                                <th>Declaration Accepted</th>
                                                <td>{{ $registrations->declaration ? 'Yes' : 'No' }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        {{-- Documents --}}
                        <div class="card border-0 shadow-sm">
                            <div class="card-header bg-light">
                                <h5 class="mb-0 fw-bold">Uploaded Documents</h5>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover">
                                        <tbody>
                                            <tr>
                                                <th width="30%">Signature</th>
                                                <td>
                                                    <a href="{{ asset('public/' . $registrations->signature) }}"
                                                        class="btn btn-sm btn-outline-primary" download target="_blank">
                                                        <i class="fas fa-download me-1"></i> Download
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Aadhar Card</th>
                                                <td>
                                                    <a href="{{ asset('public/' . $registrations->aadhar_card) }}"
                                                        class="btn btn-sm btn-outline-primary" download target="_blank">
                                                        <i class="fas fa-download me-1"></i> Download
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>PAN Card Certificate</th>
                                                <td>
                                                    <a href="{{ asset('public/' . $registrations->pan_card_certificate) }}"
                                                        class="btn btn-sm btn-outline-primary" download target="_blank">
                                                        <i class="fas fa-download me-1"></i> Download
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Bank Passbook</th>
                                                <td>
                                                    <a href="{{ asset('public/' . $registrations->bank_passbook) }}"
                                                        class="btn btn-sm btn-outline-primary" download target="_blank">
                                                        <i class="fas fa-download me-1"></i> Download
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Income Certificate</th>
                                                <td>
                                                    <a href="{{ asset('public/' . $registrations->income_certificate) }}"
                                                        class="btn btn-sm btn-outline-primary" download target="_blank">
                                                        <i class="fas fa-download me-1"></i> Download
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Caste Certificate</th>
                                                <td>
                                                    <a href="{{ asset('public/' . $registrations->caste_certificate) }}"
                                                        class="btn btn-sm btn-outline-primary" download target="_blank">
                                                        <i class="fas fa-download me-1"></i> Download
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Domicile Certificate</th>
                                                <td>
                                                    <a href="{{ asset('public/' . $registrations->domicile_certificate) }}"
                                                        class="btn btn-sm btn-outline-primary" download target="_blank">
                                                        <i class="fas fa-download me-1"></i> Download
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Transfer Certificate</th>
                                                <td>
                                                    <a href="{{ asset('public/' . $registrations->transfer_certificate) }}"
                                                        class="btn btn-sm btn-outline-primary" download target="_blank">
                                                        <i class="fas fa-download me-1"></i> Download
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Migration Certificate</th>
                                                <td>
                                                    <a href="{{ asset('public/' . $registrations->migration_certificate) }}"
                                                        class="btn btn-sm btn-outline-primary" download target="_blank">
                                                        <i class="fas fa-download me-1"></i> Download
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>10th Marksheet</th>
                                                <td>
                                                    <a href="{{ asset('public/' . $registrations->marksheet_10) }}"
                                                        class="btn btn-sm btn-outline-primary" download target="_blank">
                                                        <i class="fas fa-download me-1"></i> Download
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>12th Marksheet</th>
                                                <td>
                                                    <a href="{{ asset('public/' . $registrations->marksheet_12) }}"
                                                        class="btn btn-sm btn-outline-primary" download target="_blank">
                                                        <i class="fas fa-download me-1"></i> Download
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Graduation Marksheet</th>
                                                <td>
                                                    <a href="{{ asset('public/' . $registrations->marksheet_grad) }}"
                                                        class="btn btn-sm btn-outline-primary" download target="_blank">
                                                        <i class="fas fa-download me-1"></i> Download
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer bg-light rounded-bottom-4 text-end">
                        <small class="text-muted">Last updated:
                            {{ $registrations->updated_at->format('d M Y, h:i A') }}</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
