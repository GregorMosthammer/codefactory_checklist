<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .layout{
                height: 60px;
            }
        </style>
    </head>
    <body>


<nav class="navbar navbar-default">
  <div class="container-fluid">
    
    
                <img src="/img\logo.png" alt="LOGO" width="200px" height="70px">

            
    
    <ul class="nav navbar-nav" style="float:right;">


            @if (Route::has('login'))
                
                    @if (Auth::check())
                    <li class="col-lg-4"><a href="{{ url('/home') }}">Home</a></li>
                    @else
                    <li class="col-lg-4"><a href="{{ url('/login') }}">Login</a></li>
                    <li class="col-lg-4"><a href="{{ url('/register') }}">Register</a></li>
                    @endif
                
            @endif

     
    </ul>
  </div>
</nav>

<div class="container" style="margin-top: -20px;">



<div class="row">
<div class="col-lg-4" style="background-color:#FFF101; border: 1px solid black;">

<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
<br>
<img src="/img\chris.png" alt="CTO" width="110px" height="100px">
</div>
<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
<h3>"Coding is THE most important skill of the 21st century. With it, you can change everything."</h3>
<h3> -Christoph Pirringer <br> CTO</h3>
</div>


<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
<h3>"At CodeFactory, I learned more professional skills in such a short time than I ever thought possible. Even before the End of the course, I had companies looking to hire me!"</h3>
<h3> -Simona Mirauta</h3>
</div>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
<br>
<img src="/img\stu.png" alt="CTO" width="110px" height="110px">
</div>

</div>

<div class="col-lg-8" style="background-color:#231F20;">
<h2>What are you waiting for?</h2>
    <ul>
    <li>Average Full-Stack Developer Salary $88,488</li>
    <li>Life Changing Experience</li>
    <li>In-Demand Career</li>
    </ul>
    <br>
    <a href="https://www.codefactory.wien/">www.codefactory.wien</a>
    <br>
    <br>
    <br>
    <h3>Refer a friend and receive 10% off your cost up to $10,000</h3>
    <div class="col-lg-12">
        <img src="/img\wien1.jpg" alt="wien" width="100%" height="327px">
    </div>
    
</div>

</div>

<div class="row" style="background-color:#231F20;">

<div class="col-lg-offset-3 col-lg-6">
<h2 style="color: #FFF101;">Get a new career and the experience of a lifetime</h2>
</div>
</div>

<div class="row" style="background-color:#231F20;">
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
</div>

<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
    <h3 style="color: #FFF101;">The Package:</h3>
    <ul style="color: white;">
        <li>4 Months Full-Time Course in Vienna</li>
        <li>Housing and Flights</li>
        <li>HTML5, CSS3, JavaScript, JQuery, Bootstrap, Project Documentaion, TypeScript, AngularJS 4.0</li>
        <li>SQL(MySQL), SCRUM, PHP, AJAX, Symphony PHP framework, WorldPress, Software Testing AND Many other Skills</li>
        <li>Only $18.500</li>
    </ul>
</div>

<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
    <h3 style="color: #FFF101;">Additional Perks:</h3>
    <ul style="color: white;">
        <li>Graduation in Salzburg, Austria</li>
        <li>Food and Insurance</li>
        <li>Finals Week on the beach</li>
        <li>Tours, Hackthons, enjoying Vienna's nightlife, and other fun group activities</li>
    </ul>
</div>

<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
</div>

</div>

<div class="row" style="background-color:#231F20;">
    <div class="col-lg-12">
        <img src="/img\wien4.jpg" alt="wien" width="100%" height="313px">
    </div>

    <div class="col-lg-offset-2 col-lg-8">
    <h2>Contact Us Here:</h2>
    <br>
    <h4><a href="https://www.facebook.com/CodeFactoryVienna/">https://www.facebook.com/CodeFactoryVienna/</a></h4>
    <h4>office@codefactory.wien</h4>
    <h4 style="float:right">+43 699 12255185</h4>
    <br>
    <img src="/img\logo.png" alt="LOGO" width="330px" height="120px">
    </div>
    
</div>





</div> <!-- end container-->

        
    </body>
</html>
