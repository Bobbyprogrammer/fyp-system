@extends('layouts.app')

@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">

            <div class="page-header">
                <div class="row">
                    <div class="col">
                        <h3 class="page-title text-white">My Proposal</h3>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">

                            <a style="color: white" href="{{ url('student/proposal/add') }}"
                                class="btn btn-primary card-title mb-2"> Submit Proposal</a>

                        </div>
                        @include('message')
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="datatable table table-stripped" id="myTable">
                                    <thead>
                                        <tr>

                                            <th>Project Title</th>

                                          <th>Status</th>

                                          <th>view</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
@forelse ($getRecord as $value )
<tr>

    <td>{{ $value->title }}</td>

    <td>{{ $value->status }}</td>

    <td>
        <a href="{{ url('view/my_proposal', $value->id) }}"
            class="btn btn-primary">View </a>
    </td>
    @if ($value->status!="Approved")
    <td>

        <a href="{{ url('student/proposal/edit', $value->id) }}"
            class="btn btn-primary">Edit</a>
        <a href="{{ url('student/proposal/delete', $value->id) }}"
            class="btn btn-danger">Delete</a>
    </td>
    @endif

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
