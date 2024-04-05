
@extends('layouts.app')

@section('content')

<div class="page-wrapper">
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row">
                <div class="col">
                    <h3 class="page-title text-white">Teachers</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">

                        <a style="color: white" href="{{ url('admin/teacher/add') }}" class="btn btn-primary btn-sm card-title mb-2"> Add New Teacher</a>

                    </div>

                    @include('message')
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="datatable table table-stripped" id="myTable">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                       

                                    </tr>
                                </thead>
                               <tbody>
                                @foreach($getTeacher as $value)
<tr>
    <td>{{ $value->id }}</td>
    <td>{{ $value->name }}</td>
    <td>{{ $value->email }}</td>
    <td>
        @if($value->status==0)
        active
        @else
        Inctive
        @endif
    </td>
    <td>
        <a href="{{  url('admin/teacher/edit',$value->id)}}" class="btn btn-primary btn-sm ">Edit</a>
        <a href="{{  url('admin/teacher/delete',$value->id)}}" class=" btn btn-danger btn-sm ">Delete</a>
        <a href="{{  url('admin/teacher/my-student',$value->id)}}" class="btn btn-primary btn-sm ">My Students</a>
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
