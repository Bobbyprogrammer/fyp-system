
@extends('layouts.app')

@section('content')

<div class="page-wrapper">
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row">
                <div class="col">
                    <h3 class="page-title text-white">Task</h3>

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <a style="color: white" href="{{ url('teacher/task/add') }}" class="btn btn-primary btn-sm card-title mb-2"> Assign Task</a>

                    </div>

                    @include('message')
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="datatable table table-stripped" id="myTable">
                                <thead>
                                    <tr>

                                        <th>Task date</th>
                                        <th>Submission date</th>
                                        <th>Description</th>
                                        <th>Download</th>
                                        <th>Student Name</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                               <tbody>
@forelse ($getRecord as $value)

    <tr>
        <td>{{ $value->task_date}}</td>
        <td>{{ $value->submission_date}}</td>
        <td>{!! $value->description !!}</td>
        <td>
            @if (!empty($value->getDocument()))
                <a href="{{ $value->getDocument() }}" class="btn btn-primary btn-sm">Download</a>


            @endif
        </td>
        <td>{{ $value->student_name}}</td>
        <td>
            <a href="{{  url('teacher/task/edit',$value->id)}}" class="btn btn-primary btn-sm">Edit</a>
            <a href="{{  url('teacher/task/delete',$value->id)}}" class="btn btn-danger btn-sm">Delete</a>

            <a href="{{  url('teacher/task/submitted',$value->id)}}" class="btn btn-primary btn-sm">Submitted</a>
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
    $(document).ready(function(){
        $('#myTable').DataTable();
    })
   </script>
@endsection
