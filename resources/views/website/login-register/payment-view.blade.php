@extends('layout.main')

@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-12">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Fees Record's</h6>
                    <div class="table-responsive">
                        @php
                            $sr = 1;
                        @endphp
                        <table class="table table-striped" id="myDataTable">
                            <thead>
                                <tr>
                                    <th scope="col">Sr.</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Mobile</th>
                                    <th scope="col">Course</th>
                                    <th scope="col">Roll No.</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">
                                       Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($fees as $fee)
                                    <tr>
                                        <th scope="row">{{ $sr++ }}</th>
                                        <td>{{ $fee->contact_name }}</td>
                                        <td>{{ $fee->email }}</td>
                                        <td>{{ $fee->mobile }}</td>
                                        <td>{{ $fee->course }}</td>
                                        <td>{{ $fee->roll_no }}</td>
                                        <td>{{ $fee->amount_inr }}</td>
                                        {{-- <td>{{ $fee->razorpay_payment_id }}</td> --}}
                                        <td>
                                            <form action="{{ route('payment.delete', $fee->id) }}"  class="delete-form"  method="POST" >
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
