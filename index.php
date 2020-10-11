<?php
$files = glob('images/*');
if ($files) {
    $FERRET_NUM = count($files);

    if (!isset($_GET['i'])) {
        $random_ferret_index = rand(1, $FERRET_NUM);
    } else if (ctype_digit($_GET['i'])) {
        $random_ferret_index = $_GET['i'];
    }
} else {
    $FERRET_NUM = 0;
    $random_ferret_index = 0;
}

?>

<html>

<head>
    <title>RandomFerret - HOME</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <style>
        .img-border {
            border: 5px #333 solid;
        }

        .img-center {
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 80%;
        }

        .img-responsive {
            max-width: 40%;
            height: auto;
        }

        html {
            position: relative;
            min-height: 100%;
        }

        body {
            /* Margin bottom by footer height */
            margin-bottom: 60px;
      		background: url(background.jpg) no-repeat center center fixed; 
      		-webkit-background-size: cover;
      		-moz-background-size: cover;
      		-o-background-size: cover;
      		background-size: cover;
        }

        .footer {
    		position: absolute;
    		bottom: 0;
    		width: 100%;
    		height: 60px;
    		line-height: 60px;
    		background-color: rgba(0,0,0,0.3);
        }

		.navbar {
    		background-color: rgba(0,0,0,0.3) !important;
		}

		.dropdown-menu {
    		background-color: rgba(0,0,0,0.3) !important;
		}
    </style>
</head>
<body>
<body>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <a class="navbar-brand text-white" href="#">
            <img src="/docs/4.0/assets/brand/bootstrap-solid.svg" class="d-inline-block align-top" alt="" width="30" height="30">&nbsp;
            RandomFerret
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active"><a class="nav-link text-white" href="#">Home</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="dook">API</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="https://github.com/DeJzer/randomferret.fun">GitHub Project</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Contact</a>
                    <div class="dropdown-menu text-white" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item text-white" href="#">Discord</a>
                        <a class="dropdown-item text-white" href="https://github.com/DeJzer">GitHub</a>
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" style="color: #ffc0cb;" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Add more ferrets!</a>
                    <div class="dropdown-menu text-white" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item text-white" href="mailto:contact@randomferret.fun?subject=Ferret%20Pictures%20Upload%20Request">Email</a>
                        <a class="dropdown-item text-white" href="https://github.com/DeJzer/randomferret.fun">GitHub</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <img class="img-border img-responsive img-center" src="http://randomferret.fun/images/<?= $random_ferret_index ?>.jpg">
    </div>
    <div class="container">
        <div class="text-center">
    		<a style="color: #d4af37;" class="font-weight-bold">Ferret Count: <?= $FERRET_NUM ?></a>
            <br><br>
            <label for="shareButton" class="text-white font-weight-bold">Share this ferret!</label>
            <br>
            <input style="width: 19%;" type="text" id="shareButton" value="http://randomferret.fun/?i=1" onclick="this.select();">
        </div>
    </div>
    
    <footer class="footer">
        <div class="container">
            <div class="text-center text-white">Copyright © 2020 <a style="color: #ffc0cb;" href="https://dejzer.site">DeJzer<a></div>
        </div>
    </footer>

</body>
</html>
