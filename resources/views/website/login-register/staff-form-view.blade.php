@extends('layout.main')

@section('content')

<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Faculty Career Record's</h6>
                <div class="table-responsive">
                    @php
                        $sr = 1;
                    @endphp
                    <table class="table table-striped" id="myDataTable">
                        <thead>
                            <tr>
                                <th scope="col">Sr.</th>
                                <th scope="col">Post Applied</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Experience</th>
                                <th scope="col">Highest Degree</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Resume</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($staffs as $staff)
                                <tr>
                                    <th scope="row">{{ $sr++ }}</th>
                                    <td>{{ $staff->post_applied }}</td>
                                    <td>{{ $staff->full_name }}</td>
                                    <td>{{ $staff->email }}</td>
                                    <td>{{ $staff->experience }}</td>
                                    <td>{{ $staff->highest_degree }}</td>
                                    <td>{{ $staff->phone }}</td>
                                    <td style="min-width:300px;">
                                     <div class="d-flex align-items-center">
                                        <a class="btn btn-sm btn-success me-2" href="{{ route('staff.view.resume', $staff->id) }}" target="_blank">
                                          <i class="fa fas fa-file-pdf"></i> Show Resume
                                        </a>
                                        <a class="btn btn-sm btn-warning" href="{{ route('staff.resume.download', $staff->id) }}" target="_blank">
                                            <i class="fa fas fa-file-pdf"></i> Download Resume
                                        </a>
                                     </div>
                                    </td>
                                    <td>
                                        <form action="{{ route('staff.records.delete', $staff->id) }}" method="POST" class="delete-form">
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
