<!DOCTYPE html>
<html>
<head>
    <title>Baltikon</title>
   <!-- Latest compiled and minified CSS -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css"> 

<!-- Optional theme -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
 
<!-- datatable -->
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
{{ HTML::style('https://cdn.datatables.net/1.10.4/css/jquery.dataTables.css')}}
{{ HTML::script('js/main.js') }}
{{ HTML::style('http://www.datatables.net/release-datatables/media/css/jquery.dataTables.css')}}
{{ HTML::script('http://www.datatables.net/release-datatables/media/js/jquery.js') }}
{{ HTML::script('http://www.datatables.net/release-datatables/media/js/jquery.dataTables.js') }}
{{ HTML::script('http://bootstrap-ru.com/204/assets/js/bootstrap-dropdown.js') }}
{{ HTML::script('http://bootstrap-ru.com/204/assets/js/bootstrap-modal.js') }}

</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        
        <a class="navbar-brand" href="#">Baltikon</a>
    </div>
    <ul class="nav navbar-nav">
         <li><a href="{{ URL::to('clients') }}">Sakums</a></li>
         <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Izveidot<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="clients/create">Ierakstu</a></li>
            <li class="divider"></li>
            <li><a href="#">Lietotaju</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
        <li><a href="{{ URL::to('search') }}">Meklešana</a>
       
    </ul>
</nav>



    

	@yield('content')

</html>