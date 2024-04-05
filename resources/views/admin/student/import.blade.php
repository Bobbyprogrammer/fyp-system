@extends('layouts.app')

@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <center>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Import Students</h5>
                            </div>
                            <div class="card-body">
                                @include('message')
                                <form action="" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-8 offset-2 mb-3">
                                            <label for="">Select File</label>
                                            <input type="file" name="file" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 offset-2 mb-3">
                                            <label for="name">Class </label>
                                            <select name="class_id" id="" class="form-control">
                                                <option value="">Select Class</option>
                                                @foreach ($getClass as $class)
                                                    <option value="{{ $class->id }}"> {{ $class->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 offset-2 mb-3">
                                            @error('class')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 offset-2 mb-3">

                                            <button type="submit">Import Data</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </center>
                </div>
            </div>
        </div>
    </div>
@endsection
