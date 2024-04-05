@extends('layouts.app')

@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">

            <div class="page-header">
                <div class="row">
                    <div class="col">
                        <h3 class="page-title text-white"> Students List</h3>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="card">


                        @include('message')

                    <div class="card">


                        @include('message')
                        <div class="card-body">

                            <div class="table-responsive">
                                <table class="datatable table table-stripped" id="myTable">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Class</th>
                                            <th>Status</th>
                                            <th>Log</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($getRecord as $value)
                                            <tr>
                                                <td>{{ $value->id }}</td>
                                                <td>{{ $value->name }}</td>
                                                <td>{{ $value->email }}</td>
                                                <td>{{ $value->class_name }}</td>

                                                <td>
                                                    @if ($value->status == 0)
                                                        active
                                                    @else
                                                        Inctive
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="{{ url('teacher/task/add') }}" class="btn btn-primary btn-sm">Assign Task</a>
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
        </div>



    </div>
@endsection

@section('customJS')
   <script>
    $(document).ready(function(){
        $('#myTable').DataTable();
    })
   </script>
@endsection
