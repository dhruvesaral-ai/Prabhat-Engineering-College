@extends('layout.main')

@section('content')

<div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                  <div class="col-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Admission Enquiry View</h6>
                            <div class="table-responsive">
                                @php
                                    $sr=1;
                                @endphp
                                <table class="table" id="myDataTable" table-striped>
                                    <thead>
                                        <tr>
                                            <th scope="col">Sr.</th>
                                            <th scope="col">Full Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Mobile</th>
                                            <th scope="col">Address</th>
                                            <th scope="col">Enquiry date</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($enquiries as $enquiry)
                                        <tr>
                                            <th>{{$sr++}}</th>
                                            <td>{{$enquiry->name}}</td>
                                            <td>{{$enquiry->mobile}}</td>
                                            <td>{{$enquiry->email}}</td>
                                            <td>{{$enquiry->courses}}</td>
                                            <td>{{ $enquiry->created_at->format('d-m-Y') }}</td>
                                            <td>

                                                <form action="{{ route('enquiry.delete',$enquiry->id) }}" class="delete-form" action="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger">
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


