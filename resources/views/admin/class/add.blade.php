@extends('layouts.app')
@section('content')

<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <center>
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Add New Class</h5>

                        </div>
                        <div class="card-body">
                            <form action="" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-md-8 offset-2 mb-3">
                                        <label for="name">Class Name </label>
                                        <input type="text" class="form-control" name="name"
                                            id="" placeholder="Enter name" value="{{ old('name') }}"
                                            >

                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-8 offset-2 mb-3 alert-danger">
                                        @error('name')
                                        {{ $message }}

                                        @enderror
                                    </div>

                                </div>




                                <div class="row">
                                    <div class="col-md-8 offset-2 mb-3">
                                        <label for="password">Status</label>
                                        <select name="status" id="" class="form-control">
                                            <option value="">Select Status</option>
                                            <option value="0"> Active</option>
                                            <option value="1">Inactive Status</option>
                                        </select>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8 offset-2 mb-3 alert-danger">
                                        @error('status')
                                        {{ $message }}

                                        @enderror
                                    </div>

                                </div>

                                    <div class="row">
                                        <div class="col-md-8 offset-2 mb-3">

                                            <button type="submit">Submit Data</button>
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


