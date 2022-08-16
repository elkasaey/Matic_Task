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
<a class="btn btn-success" href="{{ route('owened.create') }}"> Create User</a>
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
<th>Owner name</th>
<th>Owner Phone</th>
<th>Model</th>
<th>Body Number</th>
<th>Motor Number</th>
<th>Color</th>
<th>Model Year</th>
<th width="280px">Action</th>
</tr>
@foreach ($owened_cars as $car)
<tr>
<td>{{ $car->id }}</td>
<td>{{ $car->user->f_name}} {{$car->user->l_name }}</td>
<td>{{ $car->user->mobile_no}} </td>
<td>{{ $car->model }}</td>
<td>{{ $car->body_number }}</td>
<td>{{ $car->motor_number }}</td>
<td>{{ $car->color }}</td>
<td>{{ $car->model_year }}</td>
<td>
<form action="{{ route('owened.destroy',$car->id) }}" method="Post">
<a class="btn btn-primary" href="{{ route('owened.edit',$car->id) }}">Edit</a>
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
