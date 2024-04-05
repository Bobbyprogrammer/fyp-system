@extends('layouts.app')

@section('css')

<style>
    label{
        font-size: 20px;
    }
    .btn{
        padding: 15px;
        background: black;
        color: white;
        border: none;
        border-radius: 10px;
    }
    .btn:hover{
        background: grey;
        color: black;
        transition: .4s ease-in;
    }
</style>
@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <center>
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Add New Student</h5>

                        </div>
                        <div class="card-body">
                            <form action="" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-md-8 offset-2 mb-3">
                                        <label for="name">Name </label>
                                        <input type="text" class="form-control" name="name"
                                            id="" placeholder="Enter name" value="{{ old('name') }}"
                                            >

                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-8 offset-2 mb-3">
                                        @error('name')
                                        {{ $message }}

                                        @enderror
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-8 offset-2 mb-3">
                                        <label for="name">Class </label>
                                        <select name="class_id" id="" class="form-control">
                                            <option value="">Select Class</option>
                                            @foreach($getClass as $class)
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
                                        <label for="email">Email</label>
                                        <input type="email"  name="email" value="{{ old('email') }}" class="form-control"
                                            id="email" placeholder="Enter Email" >

                                    </div>


                                </div>
                                <div class="row">
                                    <div class="col-md-8 offset-2 mb-3">
                                        @error('email')
                                        {{ $message }}

                                        @enderror
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-8 offset-2 mb-3">
                                        <label for="password">Password</label>
                                        <input type="password"  name="password" class="form-control"
                                            id="email" placeholder="Enter Password" >

                                    </div>


                                </div>
                                <div class="row">
                                    <div class="col-md-8 offset-2 mb-3">
                                        @error('password')
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
                                            <option value="1">Inactive</option>
                                        </select>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8 offset-2 mb-3">
                                        @error('status')
                                        {{ $message }}

                                        @enderror
                                    </div>

                                </div>

                                    <div class="row">
                                        <div class="col-md-8 offset-2 mb-3">

                                            <button  type="submit">Submit Data</button>
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


