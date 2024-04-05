@extends('layouts.app')

@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header text-white">
                            <h5 class="card-title">Add Proposal</h5>
                        </div>
                        <div class="card-body ">
                            <form action="" method="post">
                                @csrf
                                <div class="row text-dark">
                                    <div class="col-md-6 mb-3">
                                        <label for="name"> Project Title </label>
                                        <input type="text" class="form-control" name="title" id=""
                                            placeholder="Enter Title" value="{{ old('title') }}">

                                    </div>

                                </div>
                                <div class="row text-dark">
                                    <div class="col-md-6 mb-3">
                                        @error('title')
                                            {{ $message }}
                                        @enderror
                                    </div>

                                </div>




                                <div class="row ">
                                    <label for="">Description Of Project</label>
                                    <div class="col-md-12 mb-3">

                                        <textarea id="summernote" name="description"></textarea>

                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        @error('description')
                                            {{ $message }}
                                        @enderror
                                    </div>

                                </div>

                                <div class="row text-dark">
                                    <div class="col-md-12 mb-3" style="color:white;">
                                        <label for="name"  class="text-dark"> Project Features </label>
                                        <textarea class="form-control" name="feature" placeholder="Write Features" value="{{ old('feature') }}">
                                    </textarea>

                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        @error('feature')
                                            {{ $message }}
                                        @enderror
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-12 mb-3" style="color:white;">
                                        <label for="name"  class="text-dark"> Methodology </label>
                                        <textarea class="form-control" name="methodology" placeholder="Write Methodology" value="{{ old('methodology') }}">
                                    </textarea>

                                    </div>

                                </div>
                                <div class="row ">
                                    <div class="col-md-6 mb-3">
                                        @error('methodology')
                                            {{ $message }}
                                        @enderror
                                    </div>

                                </div>


                                <div class="row ">
                                    <div class="col-md-12 mb-3" style="color:white;">
                                        <label for="name"  class="text-dark"> Tools </label>
                                        <textarea class="form-control" name="tools" placeholder="Write tools" value="{{ old('tools') }}">
                                    </textarea>

                                    </div>

                                </div>
                                <div class="row text-dark">
                                    <div class="col-md-6 mb-3">
                                        @error('tools')
                                            {{ $message }}
                                        @enderror
                                    </div>

                                    <div class="row ">
                                        <div class="col-md-12 mb-3" style="color:white;">
                                            <label for="name" class="text-dark"> Supervisor Suggestion </label>
                                            <textarea class="form-control" name="suggestion" placeholder="Supervisor Suggestions" value="{{ old('suggestion') }}">
                                        </textarea>

                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            @error('suggestion')
                                                {{ $message }}
                                            @enderror
                                        </div>


                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">

                                        <button  type="submit">Submit Proposal</button>
                                    </div>
                                </div>
                        </div>





                        </form>
                    </div>
                </div>




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
