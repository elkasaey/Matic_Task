<html lang="en">

<head>
    <!-- Meta Tag Description -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="format-detection" content="telephone=no">
    <!-- Meta Tag Description -->

    <!-- Page Title Text -->
    <title>Matic</title>
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
<div class="pull-left">
<h2>list</h2>
</div>
<div class="pull-right mb-2">
<a class="btn btn-success" href="{{ route('user.create') }}"> Create User</a>
</div>
</div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
<p>{{ $message }}</p>
</div>
@endif
<table class="table table-bordered">
<tr>
<th>S.No</th>
<th>Name</th>
<th>Phone</th>
<th width="280px">Action</th>
</tr>
@foreach ($users as $user)
<tr>
<td>{{ $user->id }}</td>
<td>{{ $user->f_name}} {{$user->l_name }}</td>
<td>{{ $user->mobile_no }}</td>

<td>
<form action="{{ route('user.destroy',$user->id) }}" method="Post">
<a class="btn btn-primary" href="{{ route('user.edit',$user->id) }}">Edit</a>
@csrf
@method('DELETE')
<button type="submit" class="btn btn-danger">Delete</button>
</form>
</td>
</tr>
@endforeach
</table>
</body>
</html>
