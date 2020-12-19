<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 550px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
        
    /* On small screens, set height to 'auto' for the grid */
    @media screen and (max-width: 767px) {
      .row.content {height: auto;} 
    }

    #a1{
      text-align:center;
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse visible-xs">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Dashboard</a></li>
        <li><a href="#">Age</a></li>
        <li><a href="#">Gender</a></li>
        <li><a href="#">Geo</a></li>
        <li><a href="#">Geo</a></li>
        <li><a href="#">Geo</a></li>
        <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="a1">Page 1 <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{ url('/addstudent') }}" id="a1"></a></li>
            <li><a href="#" id="a1">Page 1-2</a></li>
            <li><a href="#" id="a1">Page 1-3</a></li>
          </ul>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-2 sidenav hidden-xs">
      <h2>Logo</h2>
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#section1" id="a1">Dashboard</a></li>
        <li><a href="#section2" id="a1">Age</a></li>
        <li><a href="#section3" id="a1">Gender</a></li>
        <li><a href="#section3" id="a1">Geo</a></li>
        <li><a href="#section3" id="a1">Geo</a></li>
         <li><a href="#section3" id="a1">Geo</a></li>
          <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="a1">Page 1 <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{ url('/addstudent') }}" id="a1"></a></li>
            <li><a href="#" id="a1">Page 1-2</a></li>
            <li><a href="#" id="a1">Page 1-3</a></li>
          </ul>
        </li>
      </ul><br>
    </div>
    <br>