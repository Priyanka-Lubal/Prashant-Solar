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
            <input id="name" name="name" placeholder="Enter in squaremeter" type="number" onchange="save()"><br><br>
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
            <h2>Calculator</h2>
            <hr>
            <label>Your Input is:</label>
            <p><span id="display"></span></p>
            <a href="calculator.php" id="submit1">To know more</a>
        </form>
    </div>
    <!-- Popup Div Ends Here -->
</div>