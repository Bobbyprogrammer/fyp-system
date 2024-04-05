
@extends('layouts.app')

@section('content')

<div class="page-wrapper">
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row">
                <div class="col">
                    <h3 class="page-title text-white"> My Task</h3>

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

                                        <th>Teacher</th>
                                        <th>Task date</th>
                                        <th>Submission date</th>
                                        <th>Description</th>
                                        <th>Download</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                               <tbody>
@forelse ($getRecord as $value)

    <tr>
        <td>{{ $value->teacher_name}}</td>
        <td>{{ date('d-m-Y',strtotime($value->task_date))}}</td>
        <td>{{ date('d-m-Y',strtotime($value->submission_date)) }}</td>
        <td>{!! $value->description !!}</td>
        <td>
            @if (!empty($value->getDocument()))
                <a href="{{ $value->getDocument() }}" class="btn btn-primary ">Download</a>
            @endif
        </td>
        <td>
           <a href="{{ url('student/my_task/submit',$value->id) }}" class="btn btn-primary ">Submit Task</a>
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
