@extends('layout.main')

@section('content')

<div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                  <div class="col-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Online Registration View</h6>
                            <div class="table-responsive">
                                @php
                                    $sr=1;
                                @endphp
                                <table class="table" id="myDataTable" table-striped>
                                    <thead>
                                        <tr>
                                            <th scope="col">Sr.</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Courses</th>
                                            <th scope="col">E-Mail</th>
                                            <th scope="col">Phone</th>
                                            <th scope="col">DOB</th>
                                            <th scope="col">Gender</th>
                                            <th scope="col">Action</th>
                                      

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($registrations as $registration)
                                        <tr>
                                            <th>{{$sr++}}</th>
                                            <td>{{$registration->contact_name}}</td>
                                            <td>{{$registration->courses}}</td>
                                            <td>{{$registration->contact_email}}</td>
                                            <td>{{$registration->contact_phone}}</td>
                                            <td>{{$registration->dob}}</td>
                                            <td>{{$registration->gender}}</td>
                                            <td>

                                                <form action="{{ route('online.registration.delete',$registration->id) }}" class="delete-form" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn  btn-sm btn-danger">
                                                        <i class="fa fa-trash text-white"></i>
                                                    </button>
                                                    
                                                </form>
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


