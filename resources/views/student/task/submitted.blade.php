@extends('layouts.app')

@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">

            <div class="page-header">
                <div class="row">
                    <div class="col">
                        <h3 class="page-title text-white"> My Submitted Task</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">

                        @include('message')
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="datatable table table-stripped" id="myTable">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Teacher</th>
                                            <th>Task date</th>
                                            <th>submission date</th>
                                            <th>Description</th>
                                            <th>Document</th>
                                            <th>submitted date</th>
                                            <th>submitted description</th>
                                            <th>submitted Document</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($getRecord as $value)
                                            <tr>
                                                <td>{{ $value->id }}</td>
                                                <td>{{ $value->teacher_name }}</td>
                                                <td>{{ date('d-m-Y', strtotime($value->getTask->task_date)) }}</td>
                                                <td>{{ date('d-m-Y', strtotime($value->getTask->submission_date)) }}</td>

                                                <td>{!! $value->getTask->description !!}</td>
                                                <td>
                                                    @if (!empty($value->getDocument()))
                                                        <a href="{{ $value->getDocument() }}"
                                                            class="btn btn-primary ">Download</a>
                                                    @endif
                                                </td>
                                                <td>{{ date('d-m-Y', strtotime($value->created_at)) }}</td>
                                                <td>{!! $value->description !!}
                                                <td>

                                                <td>
                                                    @if (!empty($value->getDocument()))
                                                        <a href="{{ $value->getTask->getDocument() }}"
                                                            class="btn btn-primary ">Download</a>
                                                    @endif
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
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        })
    </script>
@endsection
