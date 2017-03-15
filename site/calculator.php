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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

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
                <img class="img-responsive img-border img-full" src="img/1.jpg" alt="hello">
                <div class="col-md-8">
                <h2>Calculate the Load
                    <br>
                </h2>
                <script>
                    function calc_load() {

                        total_load = 0;
                        for (i = 0; i <= 20; i++) {

                            total_load = total_load + (Number($('#qty_' + i).val()) * Number($('#watt_' + i).val()));

                        }

                        $('#total_load').val(total_load);

                        document.getElementById('total_load').innerHTML = total_load;
                    }
                </script>
                <form method="post" action="value.php" name="form1" id="form1">
                    <table class="table table-condensed" style="max-width:600px;">
                        <tr>
                            <th>Load</th>
                            <th>Watt</th>
                            <th>Quantity</th>
                        </tr>
                        <tr>
                            <td>4' TubeLight LED</td>
                            <td>15<input type="hidden" name="watt_0" id="watt_0" value="15"></td>
                            <td><input type="text" name="watt_0" id="qty_0" placeholder="0" class="form-control"
                                       style="max-width:70px; max-height:30px; " onchange="calc_load()">
                            </td>
                        </tr>
                        <tr>
                            <td>2' TubeLight LED</td>
                            <td>8<input type="hidden" name="watt_1" id="watt_1" value="8"></td>
                            <td><input type="text" name="watt_1" id="qty_1" value="0" class="form-control"
                                       style="max-width:70px; max-height:30px; " onchange="calc_load()">
                            </td>
                        </tr>
                        <tr>
                            <td>4' TubeLight CFL</td>
                            <td>60<input type="hidden" name="watt_2" id="watt_2" value="60"></td>
                            <td><input type="text" name="watt_2" id="qty_2" value="0" class="form-control"
                                       style="max-width:70px; max-height:30px; " onchange="calc_load()">
                            </td>
                        </tr>
                        <tr>
                            <td>2' TubeLight CFL</td>
                            <td>30<input type="hidden" name="watt_3" id="watt_3" value="30"></td>
                            <td><input type="text" name="watt_3" id="qty_3" value="0" class="form-control"
                                       style="max-width:70px; max-height:30px; " onchange="calc_load()">
                            </td>
                        </tr>
                        <tr>
                            <td>Ceiling Fan</td>
                            <td>75<input type="hidden" name="watt_4" id="watt_4" value="75"></td>
                            <td><input type="text" name="watt_4" id="qty_4" value="0" class="form-control"
                                       style="max-width:70px; max-height:30px; " onchange="calc_load()">
                            </td>
                        </tr>
                        <tr>
                            <td>Table Fan</td>
                            <td>40<input type="hidden" name="watt_5" id="watt_5" value="40"></td>
                            <td><input type="text" name="watt_5" id="qty_5" value="0" class="form-control"
                                       style="max-width:70px; max-height:30px; " onchange="calc_load()">
                            </td>
                        </tr>
                        <tr>
                            <td>Pedestal Fan</td>
                            <td>100<input type="hidden" name="watt_6" id="watt_6" value="100"></td>
                            <td><input type="text" name="watt_6" id="qty_6" value="0" class="form-control"
                                       style="max-width:70px; max-height:30px; " onchange="calc_load()">
                            </td>
                        </tr>
                        <tr>
                            <td>Exhaust Fan</td>
                            <td>250<input type="hidden" name="watt_7" id="watt_7" value="250"></td>
                            <td><input type="text" name="watt_7" id="qty_7" value="0" class="form-control"
                                       style="max-width:70px; max-height:30px; " onchange="calc_load()">
                            </td>
                        </tr>
                        <tr>
                            <td>Refrigerator 165 LTR</td>
                            <td>100<input type="hidden" name="watt_8" id="watt_8" value="100"></td>
                            <td><input type="text" name="watt_8" id="qty_8" value="0" class="form-control"
                                       style="max-width:70px; max-height:30px; " onchange="calc_load()">
                            </td>
                        </tr>
                        <tr>
                            <td>Refrigerator 310 LTR</td>
                            <td>400<input type="hidden" name="watt_9" id="watt_9" value="400"></td>
                            <td><input type="text" name="watt_9" id="qty_9" value="0" class="form-control"
                                       style="max-width:70px; max-height:30px; " onchange="calc_load()">
                            </td>
                        </tr>
                        <tr>
                            <td>CD/DVD</td>
                            <td>30<input type="hidden" name="watt_10" id="watt_10" value="30"></td>
                            <td><input type="text" name="watt_10" id="qty_10" value="0" class="form-control"
                                       style="max-width:70px; max-height:30px; " onchange="calc_load()">
                            </td>
                        </tr>
                        <tr>
                            <td>Printer</td>
                            <td>25<input type="hidden" name="watt_11" id="watt_11" value="25"></td>
                            <td><input type="text" name="watt_11" id="qty_11" value="0" class="form-control"
                                       style="max-width:70px; max-height:30px; " onchange="calc_load()">
                            </td>
                        </tr>
                        <tr>
                            <td>Computrer</td>
                            <td>120<input type="hidden" name="watt_12" id="watt_12" value="120"></td>
                            <td><input type="text" name="watt_12" id="qty_12" value="0" class="form-control"
                                       style="max-width:70px; max-height:30px; " onchange="calc_load()">
                            </td>
                        </tr>
                        <tr>
                            <td>Fax</td>
                            <td>250<input type="hidden" name="watt_13" id="watt_13" value="250"></td>
                            <td><input type="text" name="watt_13" id="qty_13" value="0" class="form-control"
                                       style="max-width:70px; max-height:30px; " onchange="calc_load()">
                            </td>
                        </tr>
                        <tr>
                            <td>Water Pump-0.5 HP</td>
                            <td>375<input type="hidden" name="watt_14" id="watt_14" value="375"></td>
                            <td><input type="text" name="watt_14" id="qty_14" value="0" class="form-control"
                                       style="max-width:70px; max-height:30px; " onchange="calc_load()">
                            </td>
                        </tr>
                        <tr>
                            <td>Air cooler-Small</td>
                            <td>250<input type="hidden" name="watt_15" id="watt_15" value="250"></td>
                            <td><input type="text" name="watt_15" id="qty_15" value="0" class="form-control"
                                       style="max-width:70px; max-height:30px; " onchange="calc_load()">
                            </td>
                        </tr>
                        <tr>
                            <td>Air cooler-Big</td>
                            <td>400<input type="hidden" name="watt_16" id="watt_16" value="400"></td>
                            <td><input type="text" name="watt_16" id="qty_16" value="0" class="form-control"
                                       style="max-width:70px; max-height:30px; " onchange="calc_load()">
                            </td>
                        </tr>
                        <tr>
                            <td>AC-1 ton</td>
                            <td>1400<input type="hidden" name="watt_17" id="watt_17" value="1400"></td>
                            <td><input type="text" name="watt_17" id="qty_17" value="0" class="form-control"
                                       style="max-width:70px; max-height:30px; " onchange="calc_load()">
                            </td>
                        </tr>
                        <tr>
                            <td>AC-1.5 ton</td>
                            <td>2100<input type="hidden" name="watt_18" id="watt_18" value="2100"></td>
                            <td><input type="text" name="watt_18" id="qty_18" value="0" class="form-control"
                                       style="max-width:70px; max-height:30px; " onchange="calc_load()">
                            </td>
                        </tr>
                        <tr>
                            <td>Vacuum Cleaner</td>
                            <td>500<input type="hidden" name="watt_19" id="watt_19" value="500"></td>
                            <td><input type="text" name="watt_19" id="qty_19" value="0" class="form-control"
                                       style="max-width:70px; max-height:30px; " onchange="calc_load()">
                            </td>
                        </tr>
                        <tr>
                            <td>Other</td>
                            <td><input type="text" name="watt_20" id="watt_20" value="0" class="form-control"
                                       style="max-width:70px; max-height:30px; " onchange="calc_load()">
                            </td>
                            <td><input type="text" name="watt_20" id="qty_20" value="0" class="form-control"
                                       style="max-width:70px; max-height:30px; " onchange="calc_load()">
                            </td>
                        </tr>
                        <tr>
                            <td><b>Total Load</b></td>
                            <td>
                                <!--                                <input type="button" class="btn btn-sm btn-default" onclick="calc_load();"-->
                                <!--                                       value="Recalculate Load"></td>-->
                            <td><input type="text" name="total_load" id="total_load" value="0" class="form-control"
                                       style="max-width:100px; max-height:30px;">
                                <div class="error_holder"></div>
                            </td>
                        </tr>
                    </table>
                    <p><input type="submit" class="btn btn-primary" value="Submit"/></p>
                </form>

            </div>
                <div class="col-md-8">
                    <p><h1>Rooftop area is:<span id="rooftop"></span></h1>
                    <h1>Total energy generated in one year</h1>
                </div>
            </div>
        </div>
    </div>
</div>


<!--footer-->
<?php include 'includes/footer.php'; ?>

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>


<!--popup-->
<?php include 'includes/popup.php'; ?>

</body>

</html>