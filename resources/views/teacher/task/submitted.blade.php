@extends('layouts.app')

@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">

            <div class="page-header">
                <div class="row">
                    <div class="col">
                        <h3 class="page-title text-white"> Submitted Task</h3>

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
<th>ID</th>
                                            <th>Student Name</th>
                                            <th>Description</th>
                                            <th>Download</th>
                                            <th>Submission date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       @forelse ($getRecord as $value )

                                       <tr>
                                        <td>{{ $value->id }}</td>
                                        <td>{{ $value->student_name }}</td>
                                        <td>{!! $value->description !!}</td>
                                        <td>
                                            @if (!empty($value->getDocument()))
                                            <a href="{{ $value->getDocument() }}" class="mybtn">Download</a>
                                        @endif
                                        </td>
                                        <td>{{ date('d-m-Y',strtotime($value->created_at)) }}</td>
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
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        })
    </script>
@endsection
