@extends('layouts.app')
@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="row">
            <div class="col-sm-12">
               <center>
                <div class="card" style="height: auto;">
                    <div class="card-header">
                        <h5 class="card-title">Update Task</h5>
                    </div>
                    <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data">
                            @csrf
@method('PUT')
                                <div class="row">
                                    <div class="col-md-8 offset-2 mb-3">
                                        <label for="password">Student</label>
                                        <select name="student_id" class="form-control">
                                            @foreach ($getRecord as $value )
                                            {{-- <option value="{{ $value->id }}">{{ $value->name }}</option> --}}

        <option value="{{ $value->id }}" {{ $value->id == $getData->id ? 'selected' : '' }}>{{ $value->name }}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                </div>
                                <div class="col-md-8 offset-2 mb-3">
                                    <label for="name">Task Date </label>
                                    <input type="date" class="form-control" name="task_date" value="{{ $getData->task_date }}"
                                        required>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-8 offset-2 mb-3">
                                    <label for="name">Submission Date </label>
                                    <input type="date" class="form-control" name="submission_date" value="{{ $getData->submission_date }}" required>

                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-8 offset-2 mb-3  form-group">
                                    <label for="">File </label>
                                    <input type="file" class="form-control" name="file">

                                </div>

                            </div>


                            <div class="row">
                                <label for="">Description</label>
                                <div class="col-md-12 mb-3">

                                    <textarea id="summernote" name="description">
                                        {{ $getData->description }}
                                    </textarea>

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-8 offset-2 mb-3">
                                    @error('description')
                                        {{ $message }}
                                    @enderror
                                </div>

                            </div>

                                <div class="row">
                                    <div class="col-md-8 offset-2 mb-3">

                                        <button type="submit">Update Task</button>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
               </center>
            </div>
        </div>

    </div>


@endsection

@section('customJS')
<script>
    $(document).ready(function() {
        $('#summernote').summernote({

            tabsize: 2,
            height: 200
        });
    });
</script>
@endsection

