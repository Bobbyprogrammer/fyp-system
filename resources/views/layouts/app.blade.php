<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>{{ !empty($header_title) ? $header_title : '' }} FYP</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700&display=swap"rel="stylesheet">
    <link rel="stylesheet" href="{{ url('admin-assets/assets/plugins/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('admin-assets/assets/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="//cdn.datatables.net/2.0.2/css/dataTables.dataTables.min.css">
    <link rel="stylesheet" href="{{ url('admin-assets/assets/plugins/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ url('admin-assets/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ url('admin-assets/assets/plugins/datatables/datatables.min.css') }}">

    <link rel="stylesheet" href="{{ url('admin-assets/assets/plugins/summernote/summernote-bs4.min.css') }}">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        body {
            font-family: "Gill Sans", sans-serif;
            background: #2f3e46;
            color: #0d1b2a;
        }

        .form-control {
            height: 40px;
            font-size: 17px;

        }

        .card {
            height: auto;
        }

        label {
            font-size: 18px;
        }

        ::placeholder {

            font-size: 16px;
        }




        table,
        th,
        td {
            font-size: 20px;
            font-weight: 400;
            border: 2px solid:black;
        }

        button {

            display: inline-block;
            outline: none;
            cursor: pointer;
            font-weight: 600;
            border-radius: 3px;
            padding: 12px 24px;
            margin-top: 20px;
            border: 0;
            color: #fff;
            background: #ff5000;
            line-height: 1.15;
            font-size: 16px;

            :hover {
                transition: all .1s ease;
                box-shadow: 0 0 0 0 #fff, 0 0 0 3px #1de9b6;
            }

        }

        li>a {
            color: inherit;
            text-decoration: none !important;
        }

        input {
            padding: 15px;
        }
    </style>
    @yield('css')
</head>

<body>
    <div class="main-wrapper">@include('layouts.main') @yield('content') @include('layouts.footer') </div>
    <script src="{{ url('admin-assets/assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ url('admin-assets/assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('admin-assets/assets/plugins/apexchart/chart-data.js') }}"></script>
    <script src="{{ url('admin-assets/assets/js/script.js') }}"></script>
    <script src="{{ url('admin-assets/assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ url('admin-assets/assets/plugins/datatables/datatables.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/2.0.2/js/dataTables.min.js"></script>
    <script src="{{ url('admin-assets/assets/plugins/summernote/summernote-bs4.min.js') }}"></script>
    @yield('customJS')
</body>

</html>
