
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="css/app.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <title>Lost And Found @yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<style>

    footer{
        padding: 1em;
        color: #fffef2;
        background-color: black;
        clear: left;
        text-align: center;
    }
    .carousel-inner > .item > img,
    .carousel-inner > .item > a > img {
        width: 100%;
        margin:0px;
    }

</style>
</head>
<div class="container" style="width:auto;" >


        <div class="col-md-1">
            <a href="/"><image src="images/lost.jpg" class="img-circle" style=" width:300px; height:80px;"></a>
        </div>
        <div class="col-md-11" >
            <h1  style="text-align:center;font-family:verdana;" ><b><i>LOST AND FOUND</i></b></h1>
        </div>

    </div>


</div>
</div>
<body style="background-color:ghostwhite;">

<nav class="navbar navbar-inverse">
    <div class="container-fluid">

        <ul class="nav navbar-nav " >
            <li class="active"><a href="/"><span class="glyphicon glyphicon-home"></span> Home</a></li>

            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-search"></span> Search <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="/searchlost">Search Lost</a></li>
                    <li><a href="/searchfound">Search Found</a></li>
                </ul></li>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Report <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="lostitem">Report Lost</a></li>
                    <li><a href="/founditem">Report Found</a></li>
                </ul></li>

            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">About <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="/about">Information</a></li>
                    <li><a href="/contact">Contact</a></li>

                </ul>
            </li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="/"><span class="glyphicon glyphicon-user"></span> Login</a></li>
            <li><a href="register"> <span class="glyphicon glyphicon-log-in"></span> Register</a></li>
        </ul>
    </div>
</nav>
</div>
<div style="height: 500px">
@yield('content')
</div>
</br>
{{--<image src="image/lost.jpg"  class="img-circle" style=" width:1350px; height:400px "/>--}}
</body>

<footer>Copyright ©lostandfound.com</footer>

</html>