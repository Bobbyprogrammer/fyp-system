
@extends('layouts.app')

@section('content')

<div class="page-wrapper">
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row">
                <div class="col">
                    <h3 class="page-title text-white">Notice Board</h3>

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">

                        <a style="color: white" href="{{ url('admin/notice_board/add') }}" class="btn btn-primary btn-sm card-title mb-2"> Add New Notice</a>

                    </div>

                    @include('message')
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="datatable table table-stripped" id="myTable">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Title</th>

                                        <th>Notice Date</th>
                                        <th>publish on</th>
                                        <th>Message To</th>
                                        <th>Created By</th>
                                        <th>Actions</th>

                                    </tr>
                                </thead>
                               <tbody>
@forelse ($getRecord as $value )
<tr>
    <td>{{ $value->id }}</td>
    <td>{{ $value->title }}</td>
    <td>{{ $value->notice_date }}</td>
    <td>{{ $value->publish_date }}</td>
    <td>
        @foreach ($value->getMessage as $message )

       @if ( $message->message_to ==2)

<div>Teacher</div>
       @elseif( $message->message_to ==3)

      <div>Student</div>

       @endif

        @endforeach
    </td>
    <td>{{ $value->created_by }}</td>
    <td>
        <a href="{{ url('admin/notice_board/edit', $value->id) }}"
            class="btn btn-primary btn-sm">Edit</a>
        <a href="{{ url('admin/notice_board/delete', $value->id) }}"
            class="btn btn-danger btn-sm">Delete</a>
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
