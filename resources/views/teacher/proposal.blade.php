@extends('layouts.app')

@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">

            <div class="page-header">
                <div class="row">
                    <div class="col">
                        <h3 class="page-title text-white">My Students Proposals</h3>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">


                        </div>
                        @include('message')
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="datatable table table-stripped" id="myTable">
                                    <thead>
                                        <tr>
                                            <th>Student Name</th>
                                            <th>Student Reg</th>
                                            <th>Project Title</th>
                                            <th>Status</th>
                                            <th>View Details</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($getRecord as $value)
                                            <tr>
                                                <td>{{ $value->student_name }}</td>
                                                <td>{{ $value->student_email }}</td>
                                                <td>{{ $value->title }}</td>
                                                <td>{{ $value->status }}</td>
                                                <td><a href="{{ url('view', $value->id) }}"
                                                    class="btn btn-primary ">View Details</a></td>
                                                <td>
                                                    <a href="{{ url('teacher/proposal/edit', $value->id) }}"
                                                        class="btn btn-primary ">Suggestion</a>

                                    <a href="{{ url('approve', $value->id) }}"
                                        class="btn btn-primary ">Approve</a>
                                    <a href="{{ url('reject', $value->id) }}"
                                        class="btn btn-danger ">Reject</a>

                                                </td>
                                            </tr>

                                        @empty
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>
@endsection

@section('customJS')
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
@endsection
