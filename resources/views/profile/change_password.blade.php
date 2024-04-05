@extends('layouts.app')

@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <center>
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Change Password</h5>

                        </div>
                        <div class="card-body">
                            @include('message')
                            <form action="" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-md-8 offset-2 mb-3">
                                        <label for="name">Old Password </label>
                                        <input type="password" class="form-control" name="old_password"
                                            id="" placeholder="Old Password" value="{{ old('password') }}"
                                       required     >

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
                                        <label for="name">New Password </label>
                                        <input type="password" class="form-control" name="new_password"
                                            id="" placeholder="New Password" value="{{ old('new_password') }}"
                                         required   >

                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-8 offset-2 mb-3 alert-danger">
                                        @error('new_password')
                                        {{ $message }}

                                        @enderror
                                    </div>

                                </div>

                                    <div class="row">
                                        <div class="col-md-8 offset-2 mb-3">

                                            <button type="submit">Change  Password</button>
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


