<!DOCTYPE html>
<!--
THE FINAL VERSION COMMIT WHICH IS VERSION 3
THIS PROJECT HANDLED ON BY
-EMRE TUFEKCI ===> All Bootsrap Functionality and HTML&HTML Comments
-ERCAN HAVARE
-SAMED BICER
-->
<html>
<head>
    <title>Car Plate</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="fa/webfont/css/fontawesome-all.css">
    <style>


        .errorStar{
            color: red;
        }
        body {
            background-image: url("BackgroundImages/bg-3.jpg");
            background-color: #cccccc;
            < < < < < < < HEAD
            background-size: cover;
            background-repeat: no-repeat;
            min-height: 100vh;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;

        = = = = = = = background-size: cover;
            background-repeat: no-repeat;
            min-height: 100vh;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;

        > > > > > > > afc3160b1db7163a556f6baffc12d1123eaa04e3
        }

        @media (max-width: 480px) {
        }

        @media (max-width: 720px) {
        }

        @media (max-width: 1024px) {
        }

        #cardContainer {
            float: right;
            margin-top: 3%;
        }

        <
        <
        <
        <
        <
        <
        <
        HEAD
        .navbar {

            opacity: 0.6;
            filter: alpha(opacity=60);
        }

        =
        =
        =
        =
        =
        =
        =
        .navbar {

            opacity: 0.6;
            filter: alpha(opacity=60);
        }

        > > > > > > > afc3160b1db7163a556f6baffc12d1123eaa04e3
    </style>



</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">

    <a style="color:blue;" class="navbar-brand" href="#">Car Plate Register System</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Terms</a>
            </li>

        </ul>
        <span class="navbar-text">
    	<div style="font-size:2em; color:Black">
		<a href="https://github.com/emretufekci/Car-Plate-Program"><i class="fab fa-github"></i></a>
	</div>

    </span>
    </div>
</nav>

<div class="container col-sm-5" id="cardContainer">
    <div class="card w-75">


        <!-- Form -->
        <form name="registerForm" class="form-horizontal" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"
              method="post">
            <!-- Form -->


            <div class="card-body">

                <!--Car Model Row-->
                <div class="form-group form-group-sm col-sm">
                    <div class="row">
                        <label for="carmodel" class="col-sm-4 col-form-label">Car
                            Model<span class="errorStar">*</span><?php //echo $carModelErr; ?></label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control form-control-lg" name="car_model" id="carmodel"
                                   placeholder="Toyota Corolla WRC"/>
                        </div>
                    </div>
                </div>
                <!--Car Model Row-->


                <!-- Car Plate Row-->
                <div class="form-group form-group-sm col-sm">
                    <div class="row">
                        <label for="carplate" class="col-sm-4 col-form-label">Car
                            Plate<span class="errorStar">*</span><?php //echo $carPlateErr; ?></label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control form-control-lg" name="car_plate" id="carplate"
                                   placeholder="EP 345"/>
                        </div>
                    </div>
                </div>
                <!-- Car Plate Row-->


                <!--Fullname Row-->
                <div class="form-group form-group-sm col-sm">
                    <div class="row">
                        <label for="fullname" class="col-sm-4 col-form-label">Full
                            Name<span class="errorStar">*</span><?php //echo $driverFullNameErr; ?></label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control form-control-lg" name="full_name" id="fullname"
                                   placeholder="Volkan Işık"/>
                        </div>
                    </div>
                </div>
                <!--Fullname Row-->


                <!-- Licence Agreement Check Box -->
                <center>
                    <div class="form-group row">
                        <div class="col-sm-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck1" name="accepted">
                                <label class="form-check-label" for="gridCheck1">
                                    I accepted the <a href="#" data-toggle="modal"
                                                      data-target="#ChomarsLicenceModalAgreement">Chomars Software
                                        License Terms</a>
                                </label>
                            </div>
                        </div>
                    </div>
                </center>


                <!-- Modal -->
                <div class="modal fade" id="ChomarsLicenceModalAgreement" tabindex="-1" role="dialog"
                     aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="ChomarsLicenceAgreementTitle">Chomars Software Licence
                                    Agreement</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">


                                <!-- This paragraph should be filled by samed -->
                                <p> 1. You should confirm this paragraph </p>
                                <p> 2. You should confirm this paragraph </p>
                                <p> 3. You should confirm this paragraph </p>
                                <p> 4. You should confirm this paragraph </p>
                                <p> 5. You should confirm this paragraph </p>
                                <!-- This paragraph should be filled by samed -->


                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal -->

                <!-- Licence Agreement Check Box -->

                <!-- Card Body -->
            </div>
            <!-- Card Body-->

            <!--Submit Row-->
            <center>
                <div class="card-footer text-muted">
                    <div class="form-group row">
                        <div class="col-sm-12 text-center">
                            <div class="col-sm-12">
                                <button type="submit" name="submitRegister" class="btn btn-primary btm-lg btn-block">
                                    Register
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </center>
            <!--Submit Row-->


            <!-- Card -->
    </div>
    <!-- Card -->

    <!-- Container -->
</div>
<!-- Container -->

<!-- Form -->
</form>
<!-- Form -->



<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<?php
	include("db/validation.php"); 
?>

</body>
</html>
