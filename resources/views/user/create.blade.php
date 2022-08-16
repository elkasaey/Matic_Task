<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Tag Description -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="format-detection" content="telephone=no">
    <!-- Meta Tag Description -->

    <!-- Page Title Text -->
    <title>Create</title>
    <!-- Page Title Text -->

    <!--Fevicon Icon Start-->
    <link rel="icon" href="{{asset('images/favicon.png')}}" type="image/x-icon">
    <!--Fevicon Icon End-->

    <!--Font Description-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <!--Font Description-->

    <!-- Css Part Start -->
    <link rel="stylesheet" href="{{asset('css/bootstrap/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/font/material-icon/materialdesignicons.css')}}">
    <link rel="stylesheet" href="{{asset('css/font/font-awesome/font-awesome.css')}}">
    <!-- <link rel="stylesheet" href="{{asset('css/plugin/AdminLTE.min.css')}}"> -->
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
    <!-- Css Part End -->

    <!--[if lt IE 9]>
        <script type="text/javascript" src="assets/js/html5shiv.min.js"></script>
        <script type="text/javascript" src="assets/js/respond.min.js"></script>
   <![endif]-->

</head>
<body>
<div class="container mt-2">
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left mb-2">
<h2>Add User</h2>
</div>
<div class="pull-right">
<a class="btn btn-primary" href="{{ route('user.index') }}"> Back</a>
</div>
</div>
</div>
@if(session('status'))
<div class="alert alert-success mb-1 mt-1">
{{ session('status') }}
</div>
@endif
<form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
@csrf
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>First Name:</strong>
<input type="text" name="f_name" class="form-control" placeholder="First Name">
@error('f_name')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
</div>
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Last Name:</strong>
<input type="text" name="l_name" class="form-control" placeholder="Last Name">
@error('l_name')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Phone:</strong>
<input type="text" name="mobile_no" class="form-control" placeholder="Phone">
@error('mobile_no')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
<button type="submit" class="btn btn-primary ml-3">Submit</button>
</div>
</form>
</body>
</html>
