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


    <link href="css/footer.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <style>
        td {
            font-size: larger;
        }

        th {
            font-size: large;
        }
    </style>

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
                <div class="col-lg-6 text-center">
                    <hr>
                    <h2 class="intro-text text-center">
                        <strong>Your Savings</strong>
                    </h2>
                    <hr>
                    <div class="col-lg-12 text-left">
                        <div class="table-responsive">
                            <table class="table table-hover">

                                <tr>
                                    <td>Rooftop area</td>
                                    <td><span id="rooftop"></span> Sq. ft</td>
                                </tr>
                                <tr>
                                    <td>Solar Capacity installed (by area)</td>
                                    <td><span id="capacity"></span>-<span id="s2"></span>  kWp</td>
                                </tr>
                                <tr>
                                    <td>Total energy generated in one year</td>
                                    <td><span id="energy"></span> Units</td>
                                </tr>
                                <tr>
                                    <td>Units saved per month</td>
                                    <td><span id="units"></span> Units</td>
                                </tr>
                                <tr>
                                    <td>Average Yearly Savings</td>
                                    <td>&#8377; <span id="savings"></span></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 text-center">
                    <hr>
                    <h2 class="intro-text text-center">
                        <strong>Your Investment</strong>
                    </h2>
                    <hr>
                    <div class="col-lg-12 text-left">
                        <div class="table-responsive">
                            <table class="table table-hover">

                                <tr>
                                    <td>Total Load</td>
                                    <td><span id="load"></span> W</td>
                                </tr>
                                <tr>
                                    <td>Cost of Panel</td>
                                    <td>&#8377; <span id="panel"></span></td>
                                </tr>
                                <tr>
                                    <td>Cost of Batteries</td>
                                    <td>&#8377; <span id="battery"></span></td>
                                </tr>
                                <tr>
                                    <td>Cost of Inverter</td>
                                    <td>&#8377; <span id="inverter"></span></td>
                                </tr>
                                <tr>
                                    <td>Cost of BOS</td>
                                    <td>&#8377; <span id="bos"></span></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div align="left">
                <ul type="3">
                    <li>State Policy - 30% subsidy is available on the total project cost (Depending on the state)</li>
                    <li>Central Govt Policy - Extra subsidy is available on the project cost</li>
                </ul>
                </div>
            </div>
        </div>
        <a id="back-to-top" href="#" class="btn btn-default btn-lg back-to-top" role="button"
           title="Click to return on the top page" data-toggle="tooltip" data-placement="left"><span
                    class="glyphicon glyphicon-chevron-up"></span></a>
    </div>
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
