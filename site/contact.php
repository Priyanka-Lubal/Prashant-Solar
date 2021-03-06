<!DOCTYPE html>
<html lang="en">

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

    <!--    <link>-->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link href="css/footer.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

</head>

<body>

<?php include 'includes/header.php'; ?>

<div class="container">

    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <hr>
                <h2 class="intro-text text-center">Contact
                    <strong>Prashant Solar</strong>
                </h2>
                <hr>
            </div>
            <div class="col-md-8">
                <!-- Embedded Google Map using an iframe - to select your location find it on Google maps and paste the link as the iframe src. If you want to use the Google Maps API instead then have at it! -->
                <iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3768.2516175640085!2d73.18973711490285!3d19.184209387025973!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be793678f27a6a1%3A0xc7fd7e4f3cce8d3d!2sPRASHANT+SOLAR!5e0!3m2!1sen!2sin!4v1491629105917"></iframe>
            </div>
            <div class="col-md-4">
                <p>Phone:
                    <strong><a href="tel:+91 79777 47687​⁠​">+91 79777 47687</a>​⁠​</strong>
                </p>
                <p>Email:
                    <strong><a href="mailto:info@prashantsolar.com">info@prashantsolar.com</a></strong>
                </p>
                <p>Address:
                    <strong>
                        W - 75 / 76 ( A ),
                        <br>Additional M. I. D. C,
                        <br>Anand Nagar, Ambernath East,
                        <br>District Thane, 421506.
                        <br>Maharashtra, India.
                    </strong>
                </p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <hr>
                <h2 class="intro-text text-center">Contact
                    <strong>form</strong>
                </h2>
                <hr>
                <p>Light it up <strong>GREEN</strong> with <strong>Prashant Solar</strong> because <strong>GREEN IS THE NEW GOLD</strong>!!</p>
                <p>Please leave us your contact number and email id.</p>
                <form role="form" method="post" action="form-handler-nodb.php">
                    <div class="row">
                        <div class="form-group col-lg-4">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group col-lg-4">
                            <label>Email Address</label>
                            <input type="email" name="email" class="form-control">
                        </div>
                        <div class="form-group col-lg-4">
                            <label>Phone Number</label>
                            <input type="tel" name="phone" class="form-control">
                        </div>
                        <div class="clearfix"></div>
                        <div class="form-group col-lg-12">
                            <label>Message</label>
                            <textarea class="form-control" name="message" rows="6"></textarea>
                        </div>
                        <div class="form-group col-lg-12">
                            <input type="hidden" name="save" value="contact">
                            <button type="submit" class="btn btn-default">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>



</div>
<!-- /.container -->

<!--footer-->
<?php include 'includes/footer.php'; ?>

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<a id="back-to-top" href="#" class="btn btn-default btn-lg back-to-top" role="button"
   title="Click to return on the top page" data-toggle="tooltip" data-placement="left"><span
            class="glyphicon glyphicon-chevron-up"></span></a>

<!--popup-->
<?php include 'includes/popup.php'; ?>


</body>

</html>
