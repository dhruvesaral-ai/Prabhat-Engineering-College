@extends('layout.main')

@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-12">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Student Feedback Records</h6>
                    <div class="table-responsive">
                        @php
                            $sr = 1;
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
                                @foreach ($students as $student)
                                    <tr>
                                        <th>{{ $sr++ }}</th>
                                        <td>{{ $student->contact_name }}</td>
                                        <td>{{ $student->department }}</td>
                                        <td>{{ $student->designation }}</td>
                                        <td>{{ $student->suggestions }}</td>
                                        <td>
                                            <form action="{{ route('student.feedback.delete', $student->id) }}" class="delete-form" action="post">
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
