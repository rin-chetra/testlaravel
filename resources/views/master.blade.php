<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Learning Laravel- @yield('title')</title>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="">
  <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">


</head>
<body>
  <div class="container">
   <!--nav bar-->
   @include('layouts.nav',['var'=>'Learning Laravel'])

   <div class="row">
     <!--nav bar-->

     <div class="col-md-8">
       @yield('content')
     </div>
     <!--aside-->
     <div class="col-md-4">
     @section('sidebar')
      <ul class="list-group">
        <li class="list-group-item">Content1</li>
        <li class="list-group-item">Content2</li>
        <li class="list-group-item">Content3</li>
        <li class="list-group-item">Content4</li>
        <li class="list-group-item">Content5</li>
      </ul>
       @show
    </div>
  </div>
  <!--end aside-->
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<!-- Bootstrap -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>