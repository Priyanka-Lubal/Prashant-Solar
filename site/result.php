<!DOCTYPE html>
<html lang="en">
<link href="css/elements.css" rel="stylesheet">
<script src="js/my_js.js"></script>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Prashant-Solar</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800"
          rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic"
          rel="stylesheet" type="text/css">
    <link href="css/elements.css" rel="stylesheet">
    <script src="js/my_js.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body onload="display_in_calculator()">

<?php include 'includes/header.php'; ?>

<div class="container">
    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <hr>
                <h2 class="intro-text text-center">Prashant Solar
                    <strong>Calculator</strong>
                </h2>
                <center>Calcuate your solar generation and start saving now!!!</center>
                <hr>
            </div>
            <div class="col-lg-12 text-center">
                <img class="img-responsive img-border img-full" src="img/calculator.jpg" alt="hello">
                <br>

                <div id="result" class="col-md-6 boxed">
<!--                    <div class="col-lg-12">-->
<!--                        <hr>-->
<!--                        <h2 class="intro-text text-center">-->
<!--                            <strong>Savings</strong>-->
<!--                        </h2>-->
<!--                        <hr>-->
<!--                    </div>-->
                    <br>
                    <h3 class="highlght">Savings</h3>
                    <p>
                    <div class="boxed">
                        <h3>Rooftop area is:<span id="rooftop"></span></h3>
                    </div>
                    <br>
                    <div class="boxed">
                        <h3>Solar Capacity is:<span id="capacity"></span></h3>
                    </div>
                    <br>
                    <div class="boxed">
                        <h3>Total energy generated in one year:<span id="energy"></span></h3>
                    </div>
                    <br>
                    <div class="boxed">
                        <h3>Average Yearly Savings:<span id="savings"></span></h3>
                    </div>
                    <br>
                    <h3 class="highlght">Green Quotient</strong></h3>
                    <div class="boxed">
                        <h3>Carbon foot print reduced over 25 years :<span id="carbon"></span></h3>
                    </div>
                    <br>
                    <div class="boxed">
                        <h3>Equivalent number of trees saved in 25 years:<span id="trees"></span></h3>
                    </div>
                    <br>
                </div>
                <div id="result" class="col-md-6 boxed">
<!--                    <div class="col-lg-12">-->
<!--                        <hr>-->
<!--                        <h2 class="intro-text text-center">-->
<!--                            <strong>Investments</strong>-->
<!--                        </h2>-->
<!--                        <hr>-->
<!--                    </div>-->
                    <br>
                    <h3 class="highlght">Investment</strong></h3>
                    <p>
                    <div class="boxed">
                        <h3>Total Load:<span id="load"></span></h3>
                    </div>
                    <br>
                    <div class="boxed">
                        <h3>Cost of Panel:<span id="panel"></span></h3>
                    </div>
                    <br>
                    <div class="boxed">
                        <h3>Cost Of Batteries:<span id="battery"></span></h3>
                    </div>
                    <br>
                    <div class="boxed">
                        <h3>Cost of Inverter:<span id="inverter"></span></h3>
                    </div>
                    <br>
                    <div class="boxed">
                        <h3>Cost of BOS:<span id="bos"></span></h3>
                    </div>
                    <br>
                </div>
            </div>
        </div>
    </div>
    <a id="back-to-top" href="#" class="btn btn-default btn-lg back-to-top" role="button"
           title="Click to return on the top page" data-toggle="tooltip" data-placement="left"><span
                class="glyphicon glyphicon-chevron-up"></span></a>
</div>
<?php include 'includes/footer.php'; ?>

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>


<!--popup-->
<?php include 'includes/popup.php'; ?>

</body>

</html>
