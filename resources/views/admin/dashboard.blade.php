@extends('layouts.app')


@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">

            <div class="page-header">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-sub-header">
                            <h3 class="page-title ">
                                <h3 class="text-white">Welcome {{ Auth::user()->name }}</h3>
                            </h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active">Admin</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card bg-comman" style="height:120px;width:350px;">
                        <div class="card-body">
                            <div class="db-widgets d-flex justify-content-between align-items-center">
                                <div class="db-info">
                                    <h4> Total Students</h4>
                                    <h3>{{ $totalStudent }}</h3>
                                </div>
                                <div class="db-icon">
                                    <a href="{{ url('admin/student/list') }}">  <img src="{{ url('admin-assets/assets/img/icons/dash-icon-01.svg') }}"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=" col-md-4">
                    <div class="card bg-comman" style="height:120px;width:350px;">
                        <div class="card-body">
                            <div class="db-widgets d-flex justify-content-between align-items-center">
                                <div class="db-info">
                                    <h4> Total Propsals</h4>
                                    <h3>{{ $totalProposal}}</h3>
                                </div>
                                <div class="db-icon">
                                    <img src="{{ url('admin-assets/assets/img/icons/teacher-icon-02.svg') }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bg-comman " style="height:120px;width:350px;">
                        <div class="card-body">
                            <div class="db-widgets d-flex justify-content-between align-items-center">
                                <div class="db-info">
                                    <h4>Total Teachers</h4>
                                    <h3>{{ $totalTeacher }}</h3>
                                </div>
                                <div class="db-icon">
                                    <a href="{{ url('admin/teacher/list') }}"><img src="{{ url('admin-assets/assets/img/icons/dash-icon-01.svg') }}"
                                        alt="Dashboard Icon"></a>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class=" col-md-4">
                    <div class="card bg-comman " style="height:120px;width:350px;">
                        <div class="card-body">
                            <div class="db-widgets d-flex justify-content-between align-items-center">
                                <div class="db-info">
                                    <h4>Total Admins</h4>
                                    <h3>{{ $totalAdmin }}</h3>
                                </div>
                                <div class="db-icon">
                                    <a href="{{ url('admin/admin/list') }}"><img src="{{ url('admin-assets/assets/img/icons/dash-icon-01.svg') }}"
                                        alt="Dashboard Icon"></a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class=" col-md-4">
                    <div class="card bg-comman " style="height:120px;width:350px;">
                        <div class="card-body">
                            <div class="db-widgets d-flex justify-content-between align-items-center">
                                <div class="db-info">
                                    <h4>Total Classes</h4>
                                    <h3>{{ $totalClass }}</h3>
                                </div>
                                <div class="db-icon">
                                    <a href="{{ url('admin/class/list') }}">   <img src="{{ url('admin-assets/assets/img/icons/teacher-icon-01.svg') }}"
                                        alt="Dashboard Icon"></a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




        </div>
        @include('layouts.footer')
    </div>
@endsection
