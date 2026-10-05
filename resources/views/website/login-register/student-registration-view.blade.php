@extends('layout.main')

@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-12">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Student Record's</h6>
                    <div class="table-responsive">
                        @php
                            $sr = 1;
                        @endphp
                        <table class="table" id="myDataTable" table-striped>
                            <thead>
                                <tr>
                                    <th scope="col">Sr.</th>
                                    <th scope="col">Full Name</th>
                                    <th scope="col">Father's Name</th>
                                    <th scope="col">Gender</th>
                                    <th scope="col">DOB</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Mobile</th>
                                    <th scope="col">Alternate Number</th>
                                    <th scope="col">Aadhar</th>
                                    <th scope="col">Religion</th>
                                    <th scope="col">Courses</th>
                                    <th scope="col">Sub Courses</th>
                                    <th scope="col">State</th>
                                    <th scope="col">City</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($registrations as $registration)
                                    <tr>
                                        <th>{{ $sr++ }}</th>
                                        <td>{{ $registration->full_name }}</td>
                                        <td>{{ $registration->father_name }}</td>
                                        <td>{{ $registration->gender }}</td>
                                        <td>{{ $registration->dob }}</td>
                                        <td>{{ $registration->email }}</td>
                                        <td>{{ $registration->mobile }}</td>
                                        <td>{{ $registration->alt_mobile }}</td>
                                        <td>{{ $registration->aadhaar }}</td>
                                        <td>{{ $registration->religion }}</td>
                                        <td>{{ $registration->courses}}</td>
                                        <td>{{ $registration->sub_courses}}</td>
                                        <td>{{ $registration->state }}</td>
                                        <td>{{ $registration->city }}</td>
                                        <td>
                                            <div class="d-flex align-items-center g-3">
                                                <a href="{{ route('student.records.show', $registration->id) }}"
                                                    style="margin-right: 8px;" class="btn btn-sm btn-info">
                                                    <i class="fa fa-eye text-white"></i>
                                                </a>
                                                <form action="{{ route('student.records.delete', $registration->id) }}"
                                                      method="POST"
                                                      class="delete-form">
                                                
                                                    @csrf
                                                    @method('DELETE')
                                                
                                                    <button type="submit"  class="btn btn-sm btn-danger">
                                                        <i class="fa fa-trash text-white"></i>
                                                    </button>
                                                </form>
                                           </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    
@endsection
