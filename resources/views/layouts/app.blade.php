<?php namespace App\Http\Controllers; ?>
<html>
    <head>
        <title>MomsInDistress</title>
        <nav class="navbar navbar-dark bg-primary">
        
                <h1>MomsInDistress</h1>
                <div class="dropdown">
                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                      Dropdown
                      <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                      <li><a href="#">Action</a></li>
                      <li><a href="#">Another action</a></li>
                      <li><a href="#">Something else here</a></li>
                      <li role="separator" class="divider"></li>
                      <li><a href="#">Separated link</a></li>
                    </ul>
                  </div>
          </nav>
        
        <h2>A companion for Supporting Moms in Need</h2>
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
<!-- Optional theme -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
<!-- Latest compiled and minified JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    <style>
        h1{font-family: 'Raleway', sans-serif;
}

body { font-family: 'Montserrat', sans-serif;
    padding-top: 70px; }
head{margin-top: 0px;}
h2{font-family: 'Raleway', sans-serif;
background-color:#ff9900;
padding:30px;}
h3{
    font-family: 'Raleway', sans-serif;
    color:white;
    background-color:var(--my-var, var(--my-background,indigo));;    ;
padding:10px;
}

img {
    width:180px;
    height:150px;
}
#inlinebuttons
{
    display:inline;
}
.dropdown{
    position:relative;
}
    </style>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
</head>
<body>
    @yield('content')
</body>
<footer>
<div id="CC">
    <h3>Community</h3>
</div>
<div class="btn-group" role="group" aria-label="...">
        <button type="button" class="btn btn-default"><a href="/AboutUs">About</a></button>
        <button type="button" class="btn btn-default"><a href="/contact">Contact</a></button>
        <button type="button" class="btn btn-default"><a href="/feedback">Feedback</a></button>
    </div>
</footer>
</html>

