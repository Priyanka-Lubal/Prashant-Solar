<?php
/**
 * Created by PhpStorm.
 * User: meetg
 * Date: 11-03-2017
 * Time: 12:42
 */
?>

<link href="css/elements.css" rel="stylesheet">
<script src="js/my_js.js"></script>

<div id="abc">
    <!-- Popup Div Starts Here -->
    <div id="popupContact">
        <!-- Contact Us Form -->
        <form action="#" id="form1" method="post" name="form">
            <img id="close" src="img/close-128.png" height="25px" onclick="div_hide()">
            <h2>Calculator</h2>
            <hr>
            <strong>Enter Rooftop area</strong></><br><br>
            <input id="name" name="name" placeholder="Enter in square-feet" type="number" onchange="save()"><br><br>
            <a href="#" id="submit1" onclick="check_empty()">Submit</a>
        </form>
    </div>
    <!-- Popup Div Ends Here -->
</div>

<div id="xyz">
    <!-- Popup Div Starts Here -->
    <div id="popupContact">


        <!-- Contact Us Form -->
        <form action="#" id="form1" method="post" name="form">
            <img id="close" src="img/close-128.png" height="25px" onclick="hide()">
            <h3>Calculator</h3>
            <hr>
            <h1>Congratulations!!!</h1>
            <font color="white">You can save upto <span id="unit" style="color: #feff14;font-weight: 900;"></span> units per month by installing a <span id="solar" style="color: #feff14;font-weight: 900;"></span> KWP solar system rooftop system on <span id="display" style="color: #feff14;font-weight: 900;"></span>  sq.ft of roof space.<br><br></font>
            <a href="calculator.php" id="submit1">To know more</a><br>
                <a href="#" onclick="popup()"><u>Re-Enter Rooftop area</u></a>
        </form>
    </div>
    <!-- Popup Div Ends Here -->
</div>