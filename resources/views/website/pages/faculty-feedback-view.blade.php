@extends('layout.main')

@section('content')

<div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                  <div class="col-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Faculty Feedback Records</h6>
                            <div class="table-responsive">
                                @php
                                    $sr=1;
                                @endphp
                                <table class="table" id="myDataTable" table-striped>
                                    <thead>
                                        <tr>
                                            <th scope="col">Sr.</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Department</th>
                                            <th scope="col">Designation</th>
                                            <th scope="col">Suggestions</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($faculties as $faculty)
                                        <tr>
                                            <th>{{$sr++}}</th>
                                            <td>{{$faculty->contact_name}}</td>
                                            <td>{{$faculty->department}}</td>
                                            <td>{{$faculty->designation}}</td>
                                            <td>{{$faculty->suggestions}}</td>
                                            <td>
                                                <form action="{{ route('faculty.feedback.delete',$faculty->id) }}" class="delete-form" method="post">
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


