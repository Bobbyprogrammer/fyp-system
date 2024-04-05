@extends('layouts.app')
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <center>
                        <div class="card" style="height: auto;">
                            <div class="card-header">
                                <h5 class="card-title">Add Task</h5>
                            </div>
                            <div class="card-body">
                                <form action="" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-8 offset-2 mb-3">
                                            <label for="">Student</label>
<select value="" name="student_id" class="form-control" required>
    <option value=""> Select Student</option>
    @foreach ($getRecord as $value)
        <option value="{{ $value->id }}">{{ $value->name }}</option>
    @endforeach
</select>
                                        </div>
                                    </div>
                                    <div class="col-md-8 offset-2 mb-3">
                                        <label for="name">Task Date </label>
                                        <input type="date" class="form-control" name="task_date" required>
                                    </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8 offset-2 mb-3">
                                    <label for="name">Submission Date </label>
                                    <input type="date" class="form-control" name="submission_date" required>
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
                                    <textarea id="summernote" name="description"></textarea>
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

                                    <button type="submit">Add Task</button>
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
