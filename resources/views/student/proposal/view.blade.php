@extends('layouts.app')
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="row">

                <div class="col-md-12 col-xl-4 col-sm-12 d-flex">
                    <div class="blog grid-blog flex-fill">
                        <div class="container">
                            <div class="row">
                                <a href="{{ url('student/proposal/list') }}"
                                    class="btn btn-primary btn-sm" style="font-size: 20px;">Back</a>
                                <div class="col-md-12">
                                    <div>
                                        <h2>Project Title : {{ $data->title }}</h2>


                                        <h2>
                                            Description
                                        </h2>
                                        <p>
                                            {!! $data->description !!}
                                        </p>
                                        <hr style="width: 100%; height:5px;">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div>
                                        <h2> Project Features </h2>
                                        <h4 class="post-title" style="color: black">{{ $data->feature }}</h4>

                                        <h2>

                                           Project Mthodology
                                        </h2>
                                        <h4>
                                            {{ $data->methodology }}
                                        </h4>
                                        <hr style="width: 100%; height:5px;">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div>
                                        <h2> Project Tools </h2>
                                        <h4 class="post-title" style="color: black">{{ $data->tools }}</h4>

                                        <h2>

                                           Supervisor Suggestion
                                        </h2>
                                        <h4>
                                            {{ $data->suggestion }}
                                        </h4>
                                        <hr style="width: 100%; height:5px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
