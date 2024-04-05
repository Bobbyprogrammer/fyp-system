@extends('layouts.app')
@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="row">
            <div class="col-sm-12">


               <center>
                <div class="card" style="height: auto;">
                    <div class="card-header">
                        <h5 class="card-title">Add New Notice</h5>

                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-8 offset-2 mb-3">
                                    <label for="name">Title </label>
                                    <input type="text" class="form-control" name="title"
                                        id="" placeholder="Enter Title" value="{{ old('title') }}"
                                        required>

                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-8 offset-2 mb-3">
                                    @error('title')
                                    {{ $message }}

                                    @enderror
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-8 offset-2 mb-3">
                                    <label for="name">Notice Date </label>
                                    <input type="date" class="form-control" name="notice_date"

                                        required>

                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-8 offset-2 mb-3">
                                    <label for="name">Publish Date </label>
                                    <input type="date" class="form-control" name="publish_date"

                                        required>

                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-8 offset-2 mb-3">
                                    <label for="name" style="display: block">Message To </label>
                                   <label for="" style="margin-right:30px;">  <input type="checkbox" name="message_to[]" value="3">Student</label>
                                   <label for="" style="margin-right:30px;">  <input type="checkbox" name="message_to[]" value="2">Teacher</label>

                                </div>

                            </div>


                            <div class="row">
                                <label for="">Message</label>
                                <div class="col-md-12 mb-3">

                                    <textarea id="summernote" name="message"></textarea>

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

                                        <button type="submit">Add Notice</button>
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

