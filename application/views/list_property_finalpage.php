<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyABiaR57UoULf-yk8s81qXHg4AURzygRjQ&callback=initMap&libraries=&v=weekly" defer></script>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <style type="text/css">
        /* Set the size of the div element that contains the map */
        #map {
            height: 400px;
            /* The height is 400 pixels */
            width: 100%;
            /* The width is the width of the web page */
        }
    </style>
    <style>
        .profile-pic {
            display: block;

        }

        .file-upload {
            display: none;
        }

        .circle {
            border-radius: 0px !important;
            border: 1px solid lightgray;
            overflow: hidden;
            width: 102px;
            height: 102px;

            position: absolute;
            top: -30px;
            left: 5px;
        }

        img {
            max-width: 150px;
            height: 100px;
        }

        .p-image {
            position: absolute;
            top: 10px;
            right: 40px;
            color: #666666;
            transition: all .3s cubic-bezier(.175, .885, .32, 1.275);
        }

        .p-image:hover {
            transition: all .3s cubic-bezier(.175, .885, .32, 1.275);
        }

        .upload-button {
            font-size: 0.5em;
        }

        .upload-button:hover {
            transition: all .3s cubic-bezier(.175, .885, .32, 1.275);
            color: #999;
        }
    </style>
    <script>
        // Initialize and add the map
        function initMap() {
            // The location of Uluru
            const uluru = {
                lat: -25.344,
                lng: 131.036
            };
            // The map, centered at Uluru
            const map = new google.maps.Map(document.getElementById("map"), {
                zoom: 4,
                center: uluru,
            });
            // The marker, positioned at Uluru
            const marker = new google.maps.Marker({
                position: uluru,
                map: map,
            });
        }
    </script>
    <style>
        .container-login10 {
            background: linear-gradient(360deg, #517190, #756B90, #D6B0E4);
            background-size: 2000% 2000%;
            animation: gradient 12s ease infinite;
        }

        @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        .hello {
            background: linear-gradient(-120deg, #99c1db, #9898b0, #e1d4de);
            background-size: 400% 400%;
            animation: gradient 10s ease infinite;
        }

        @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        .hello2 {
            background: linear-gradient(-120deg, #9802A6, #F26C6D, #FCB9B3);
            background-size: 400% 400%;
            animation: gradient 10s ease infinite;
        }

        @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        .hello3 {
            background: linear-gradient(-120deg, #7e7250, #808284, #efebee);
            background-size: 400% 400%;
            animation: gradient 10s ease infinite;
        }

        @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        .hello4 {
            background: linear-gradient(-120deg, #FF0006, #FF00BF, #A541BE, #3196B7);
            background-size: 400% 400%;
            animation: gradient 10s ease infinite;
        }

        @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        .top {
            color: gray;
        }

        .bottom {
            display: flex;
            justify-content: space-between;
        }

        .items {
            display: flex;
            justify-content: space-between;
            color: gray;
            margin: 15px 50px;
        }

        .filter-option-inner-inner {
            color: gray !important;
        }

        span {
            color: gray;
        }

        .bootstrap-select>.dropdown-toggle:after {
            color: gray;
        }

        label {
            font-size: 10px;
        }

        label.form-check-label {
            color: gray;
        }

        .center {
            margin: 0% 10%;
            padding: 0% 10%;
        }

        p {
            color: gray;
        }

        b {
            color: gray;
        }

        .bootstrap-select:not([class*=col-]):not([class*=form-control]):not(.input-group-btn) {
            width: 30%;
        }

        .progress-bar {
            width: 100% !important;
            background-color: gray !important;
        }

        h3 {
            color: gray;
        }

        .container {
            display: flex;
            flex-flow: row nowrap;
            /* Align on the same line */
            justify-content: space-between;
            /* Equal margin between the child elements */
        }
    </style>

    <script type="text/javascript">
        $(document).ready(function() {
            $('.redirect').click(function() {

                window.location.href = "<?php echo base_url(); ?>index.php/main/pageseven";

            });
            $('.credits').click(function() {

                window.location.href = "<?php echo base_url(); ?>index.php/main/credits";

            });
            $('.groups').click(function() {

                window.location.href = "<?php echo base_url(); ?>index.php/main/groups";

            });

        });
    </script>

</head>

<body class="container-login10">

    <div>

        <div class="container-login100">
            <div class="wrap-login100 p-l-25 p-r-25 p-t-15 p-b-15">
                <div class="top">
                    <a href="#"><img id="img3" src="<?php echo base_url(); ?>assets/images/backlogo.png" style="width:10%; height:100%; "></a></img>
                    <button type="button" class="fa fa-bars fa-2x" data-toggle="dropdown" aria-expanded="false" style="color:gray; float:right">
                    </button>
                    <ul class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; transform: translate3d(0px, 38px, 0px);">
                        <li><a class="dropdown-item" href="matching" style="color:gray;">Matching</a></li>
                        <li><a class="dropdown-item" href="#" style="color:gray;">Feedback</a></li>
                        <li><a class="dropdown-item" href="list_property_pageone" style="color:gray;">list property</a></li>
                        <li id="ie2s0aa61" data-direction="ltr" data-listposition="center" data-data-id="bmi24vh" data-state="menu false  link" data-index="1" class="_3vxeZ _2TFvc dropdown-item" data-original-gap-between-text-and-btn="10" aria-hidden="false" style="width: 100%; height: 30px; position: relative; box-sizing: border-box; overflow: visible; visibility: inherit;"><a data-testid="linkElement" href="http://launchpad.stagflux.com/assets/pdf/aboutusv3new.pdf" target="_blank" class="_25Cim" aria-haspopup="false">
                                <div class="_3zfdd">
                                    <div class="" style="text-align:left">
                                        <p class="_3YCIf" style=" color:gray; text-align: left;" id="ie2s0aa61label">about us</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li><a class="dropdown-item" href="pageone" style="color:gray;">Sign out</a></li>
                    </ul>
                </div>
                <form class="login100-form validate-form" method="post" action="update_property" enctype="multipart/form-data">

                    <span class="login100-form-title p-b-30">
                        <img id="img1" src="<?php echo base_url(); ?>assets/images/Relm-53.png" style="width:25%; padding-left:30px;" />
                    </span>


                    <div class="col-md-12">
                        <h3 style="text-align:center;">property lister</h3>
                    </div>

                    <br>
                    <div class="col-md-12" style="display:flex; justify-content:space-between;">
                        <img id="img33" src="<?php echo base_url(); ?>assets/images/backlogo.png" onClick="window.location='<?php echo base_url(); ?>index.php/main/list_property_finalpage3'" style="width:10%; height:100%;"></img>
                        <p>office</p>
                        <p><b>room</b></p>
                        <p>car</p>
                        <img id="img4" src="<?php echo base_url(); ?>assets/images/frontlogo.png" onClick="window.location='<?php echo base_url(); ?>index.php/main/list_property_finalpage2'" style="width:10%; height:100%;" />
                    </div>
                    <br>
                    <div class="col-md-12">
                        <div class="col-md-12">
                            <div class="col-md-12">
                                <div class="col-md-12" style="border:2px solid gray; border-radius:10px; color:gray; font-size:20px; text-align:center;">
                                    <br>
                                    <br>
                                    <div class="col-md-12">
                                        <div class="col-md-12">
                                            <div class="col-md-12">
                                                <div class="col-md-12" style="display:flex; justify-content:space-between;">
                                                    <div class="col-md-10">
                                                        <div class="row">
                                                            <div class="small-12 medium-2 large-2 columns">
                                                                <div class="circle">
                                                                    <img class="profile-pic" src="<?php echo base_url() ?>assets/images/add-image.png">
                                                                </div>
                                                                <div class="p-image">
                                                                    <input class="file-upload" type="file" name="file" required />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label for="file" class="upload-button">
                                                            Add photos</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="col-md-12">
                        <div class="col-md-12">
                            <div class="col-md-12">
                                <div class="col-md-12">
                                    <h4 style="color:gray;">listing type</h4>
                                    <br>
                                    <div class="col-md-12">
                                        <div class="col-md-12">
                                            <div class="col-md-12" style="display:flex; justify-content:space-between;">
                                                <input class="form-check-input" type="checkbox" name="listing_type[]" value="for rent" id="defaultCheck1">
                                                <label class="form-check-label" for="defaultCheck1">
                                                    <p><b>for rent</b></p>
                                                </label>
                                            </div>
                                            <br>
                                            <div class="col-md-12" style="display:flex; justify-content:space-between;">
                                                <input class="form-check-input" type="checkbox" name="listing_type[]" value="barter for skill" id="defaultCheck2">
                                                <label class="form-check-label" for="defaultCheck2">
                                                    <p><b>barter for skill</b></p>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="col-md-12">
                        <div class="col-md-12">
                            <div class="col-md-12">
                                <div class="col-md-12">
                                    <h4 style="color:gray;">a room in a...</h4>
                                    <br>
                                    <div class="col-md-12">
                                        <div class="col-md-12">
                                            <div class="col-md-12" style="display:flex; justify-content:space-between;">
                                                <input class="form-check-input" type="checkbox" name="room_in[]" value="apartment" id="defaultCheck3">
                                                <label class="form-check-label" for="defaultCheck3">
                                                    <p><b>apartment</b></p>
                                                </label>
                                            </div>
                                            <br>
                                            <div class="col-md-12" style="display:flex; justify-content:space-between;">
                                                <input class="form-check-input" type="checkbox" name="room_in[]" value="house" id="defaultCheck4">
                                                <label class="form-check-label" for="defaultCheck4">
                                                    <p><b>house</b></p>
                                                </label>
                                            </div>
                                            <br>
                                            <div class="col-md-12" style="display:flex; justify-content:space-between;">
                                                <input class="form-check-input" type="checkbox" name="room_in[]" value="condo" id="defaultCheck5">
                                                <label class="form-check-label" for="defaultCheck5">
                                                    <p><b>condo</b></p>
                                                </label>
                                            </div>
                                            <br>
                                            <div class="col-md-12" style="display:flex; justify-content:space-between;">
                                                <input class="form-check-input" type="checkbox" name="room_in[]" value="townhouse" id="defaultCheck6">
                                                <label class="form-check-label" for="defaultCheck6">
                                                    <p><b>townhouse</b></p>
                                                </label>
                                            </div>
                                            <br>
                                            <div class="col-md-12" style="display:flex; justify-content:space-between;">
                                                <input class="form-check-input" type="checkbox" name="room_in[]" value="ranch" id="defaultCheck7">
                                                <label class="form-check-label" for="defaultCheck7">
                                                    <p><b>ranch</b></p>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="col-md-12">
                        <div class="col-md-12">
                            <div class="col-md-12" style="display:flex; justify-content:space-between;">
                                <p>bedrooms</p>
                                <p>bathrooms</p>
                                <p>pets</p>
                            </div>
                            <br>
                            <div class="col-md-12" style="display:flex; justify-content:space-between;">
                                <select class="selectpicker" name="bed" title="bed">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                </select>
                                <select class="selectpicker" name="bath" title="bath">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                </select>
                                <select class="selectpicker" name="pets" title="pets">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="col-md-12">
                        <div class="col-md-12">
                            <div class="col-md-12">
                                <div class="col-md-12">
                                    <h4 style="color:gray;">furnishings</h4>
                                    <br>
                                    <div class="col-md-12">
                                        <div class="col-md-12">
                                            <div class="col-md-12" style="display:flex; justify-content:space-between;">
                                                <input class="form-check-input" type="checkbox" name="furnishings[]" value="apartment" id="defaultCheck8">
                                                <label class="form-check-label" for="defaultCheck8">
                                                    <p><b>yes</b></p>
                                                </label>
                                            </div>
                                            <br>
                                            <div class="col-md-12" style="display:flex; justify-content:space-between;">
                                                <input class="form-check-input" type="checkbox" name="furnishings[]" value="house" id="defaultCheck9">
                                                <label class="form-check-label" for="defaultCheck9">
                                                    <p><b>available</b></p>
                                                </label>
                                            </div>
                                            <br>
                                            <div class="col-md-12" style="display:flex; justify-content:space-between;">
                                                <input class="form-check-input" type="checkbox" name="furnishings[]" value="condo" id="defaultCheck10">
                                                <label class="form-check-label" for="defaultCheck10">
                                                    <p><b>no</b></p>
                                                </label>
                                            </div>
                                            <br>
                                            <div class="col-md-12" style="display:flex; justify-content:space-between;">
                                                <input class="form-check-input" type="checkbox" name="furnishings[]" value="townhouse" id="defaultCheck11">
                                                <label class="form-check-label" for="defaultCheck11">
                                                    <p><b>partially</b></p>
                                                </label>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="col-md-12">
                        <div class="col-md-12">
                            <div class="col-md-12">
                                <div class="col-md-12" style="display:flex; justify-content:space-between;">
                                    <p>sq.feet</p>
                                    <input type="text" name="sq_feet" style="width:30%; color:gray; border:1px solid gray;"></input>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="col-md-12">
                        <div class="col-md-12">
                            <div class="col-md-12">
                                <div class="col-md-12" style="display:flex; justify-content:space-between;">
                                    <p>monthly rent</p>
                                    <input type="text" name="monthly_rent" style="width:30%; color:gray; border:1px solid gray;"></input>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="col-md-12">
                        <div class="col-md-12">
                            <div class="col-md-12">
                                <div class="col-md-12" style="display:flex; justify-content:space-between;">
                                    <p>lease term</p>
                                    <input type="text" name="lease_term" style="width:30%; color:gray; border:1px solid gray;"></input>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                    <br>
                    <div class="col-md-12">
                        <div class="col-md-12">
                            <p>property location</p>
                        </div>
                    </div>
                    <br>
                    <div class="col-md-12">
                        <div class="col-md-12">
                            <div class="col-md-12" style="display:flex; border-bottom: 1px solid #aaa; width:90%;">
                                <i class="fa fa-search" style="color:gray; padding-top:10px;"></i>
                                <p style="color:white;">aa</p>
                                <input type="text" name="location_name" id="location_name" onchange="myfunc()" style="width:80%;" placeholder="address,city,state,zip" />
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="col-md-12">
                        <section id="google-map123">
                            <iframe style="border:1px solid gray; border-radius:50px;" width=" 100%" height="300" src="https://maps.google.com/maps?q=america&output=embed">
                            </iframe>
                        </section>
                    </div>


                    <br>
                    <div class="col-md-12">
                        <div class="col-md-12">
                            <div class="col-md-12" style="border:1px solid gray; border-radius:10px;">
                                <br>
                                <textarea type="text" name="description" placeholder="description"></textarea>
                                <br><br><br><br><br>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="col-md-12">
                        <div class="col-md-12">
                            <div class="col-md-12" style="display:flex; justify-content:space-between;">
                                <p>laundary</p>
                                <p>parking</p>
                                <p>amenities</p>
                            </div>

                            <div class="col-md-14" style="display:flex; justify-content:space-between;">
                                <select class="selectpicker" title="laundary" name="laundary" style="width:30%;">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                </select>
                                <select class="selectpicker" title="parking" name="parking" style="width:30%;">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                </select>
                                <select class="selectpicker" title="amenities" name="amenities" style="width:30%;">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                </select>
                            </div>

                        </div>
                    </div>
                    <br><br><br><br>
                    <div class="container">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="chk_red">
                            <label class="form-check-label" for="chk_red">assigned parking</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="chk_green">
                            <label class="form-check-label" for="chk_green">swimming pool</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="chk_blue">
                            <label class="form-check-label" for="chk_blue">fire place</label>
                        </div>
                    </div>
                    <br>
                    <div class="container">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="chk_red">
                            <label class="form-check-label" for="chk_red">community kitchen</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="chk_green">
                            <label class="form-check-label" for="chk_green">wired internet</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="chk_blue">
                            <label class="form-check-label" for="chk_blue">garage</label>
                        </div>
                    </div>
                    <br>
                    <div class="container">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="chk_red">
                            <label class="form-check-label" for="chk_red">nearby bus stop</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="chk_green">
                            <label class="form-check-label" for="chk_green">low-rise</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="chk_blue">
                            <label class="form-check-label" for="chk_blue">gym</label>
                        </div>
                    </div>
                    <br>
                    <div class="card">
                        <div class="col-md-14">
                            <div class="form-check container" style="display:flex; justify-content:space between;">
                                <div class="left" style="width:100px; display:flex; justify-content:space-between;">
                                    <input class="form-check-input" type="checkbox" value="assigned parking" name="checkboxvalue[]" id="defaultCheck12">
                                    <label class="form-check-label" for="defaultCheck12">
                                        assigned parking
                                    </label>
                                </div>
                                <div class="center" style="width:100px;">
                                    <input class="form-check-input" type="checkbox" value="swimming pool" name="checkboxvalue[]" id="defaultCheck13">
                                    <label class="form-check-label" for="defaultCheck13">
                                        swimming pool
                                    </label>
                                </div>
                                <div class="right" style="width:100px;">
                                    <input class="form-check-input" type="checkbox" value="fire place" name="checkboxvalue[]" id="defaultCheck14">
                                    <label class="form-check-label" for="defaultCheck14">
                                        fire place
                                    </label>
                                </div>

                            </div>
                        </div>
                        <br>

                        <div class="col-md-14">
                            <div class="form-check container">
                                <div class="left">
                                    <input class="form-check-input" type="checkbox" value="covered parking" name="checkboxvalue[]" id="defaultCheck15">
                                    <label class="form-check-label" for="defaultCheck15">
                                        covered parking
                                    </label>
                                </div>
                                <div class="center">
                                    <input class="form-check-input" type="checkbox" value="wireless internet" name="checkboxvalue[]" id="defaultCheck16">
                                    <label class="form-check-label" for="defaultCheck16">
                                        wireless internet
                                    </label>
                                </div>
                                <div class="right">
                                    <input class="form-check-input" type="checkbox" value="spa/sauna" name="checkboxvalue[]" id="defaultCheck17">
                                    <label class="form-check-label" for="defaultCheck17">
                                        spa/sauna
                                    </label>
                                </div>
                            </div>

                        </div>
                        <br>
                        <div class="col-md-14">
                            <div class="form-check container">
                                <div class="left">
                                    <input class="form-check-input" type="checkbox" value="community kitchen" name="checkboxvalue[]" id="defaultCheck18">
                                    <label class="form-check-label" for="defaultCheck18">
                                        community kitchen
                                    </label>
                                </div>
                                <div class="center">
                                    <input class="form-check-input" type="checkbox" value="wired internet" name="checkboxvalue[]" id="defaultCheck19">
                                    <label class="form-check-label" for="defaultCheck19">
                                        wired internet
                                    </label>
                                </div>
                                <div class="right">
                                    <input class="form-check-input" type="checkbox" value="garage" name="checkboxvalue[]" id="defaultCheck20">
                                    <label class="form-check-label" for="defaultCheck20">
                                        garage
                                    </label>
                                </div>
                            </div>

                        </div>
                        <br>
                        <div class="col-md-14">
                            <div class="form-check container">
                                <div class="left">
                                    <input class="form-check-input" type="checkbox" value="gated community" name="checkboxvalue[]" id="defaultCheck21">
                                    <label class="form-check-label" for="defaultCheck21">
                                        gated community
                                    </label>
                                </div>
                                <div class="center">
                                    <input class="form-check-input" type="checkbox" value="high-rise" name="checkboxvalue[]" id="defaultCheck22">
                                    <label class="form-check-label" for="defaultCheck22">
                                        high-rise
                                    </label>
                                </div>
                                <div class="right">
                                    <input class="form-check-input" type="checkbox" value="naturally well lit" name="checkboxvalue[]" id="defaultCheck23">
                                    <label class="form-check-label" for="defaultCheck23">
                                        naturally well lit
                                    </label>
                                </div>
                            </div>

                        </div>
                        <br>
                        <div class="col-md-14">
                            <div class="form-check container">
                                <div class="left">
                                    <input class="form-check-input" type="checkbox" value="nearby bus stop" name="checkboxvalue[]" id="defaultCheck24">
                                    <label class="form-check-label" for="defaultCheck24">
                                        nearby bus stop
                                    </label>
                                </div>
                                <div class="center">
                                    <input class="form-check-input" type="checkbox" value="low-rise" name="checkboxvalue[]" id="defaultCheck25">
                                    <label class="form-check-label" for="defaultCheck25">
                                        low-rise
                                    </label>
                                </div>
                                <div class="right">
                                    <input class="form-check-input" type="checkbox" value="gym" name="checkboxvalue[]" id="defaultCheck26">
                                    <label class="form-check-label" for="defaultCheck26">
                                        gym
                                    </label>
                                </div>
                            </div>

                        </div>
                        <br>
                        <div class="col-md-14">
                            <div class="form-check container">
                                <div class="left">
                                    <input class="form-check-input" type="checkbox" value="near subway" name="checkboxvalue[]" id="defaultCheck27">
                                    <label class="form-check-label" for="defaultCheck27">
                                        near subway
                                    </label>
                                </div>
                                <div class="center">
                                    <input class="form-check-input" type="checkbox" value="on-site landry" name="checkboxvalue[]" id="defaultCheck28">
                                    <label class="form-check-label" for="defaultCheck28">
                                        on-site laundry
                                    </label>
                                </div>
                                <div class="right">
                                    <input class="form-check-input" type="checkbox" value="disability access" name="checkboxvalue[]" id="defaultCheck29">
                                    <label class="form-check-label" for="defaultCheck29">
                                        disability access
                                    </label>
                                </div>
                            </div>

                        </div>
                        <br>
                        <div class="col-md-14">
                            <div class="form-check container">
                                <div class="left">
                                    <input class="form-check-input" type="checkbox" value="street parking" name="checkboxvalue[]" id="defaultCheck30">
                                    <label class="form-check-label" for="defaultCheck30">
                                        street parking
                                    </label>
                                </div>
                                <div class="center">
                                    <input class="form-check-input" type="checkbox" value="doorman" name="checkboxvalue[]" id="defaultCheck31">
                                    <label class="form-check-label" for="defaultCheck31">
                                        doorman
                                    </label>
                                </div>
                                <div class="right">
                                    <input class="form-check-input" type="checkbox" value="fitness club" name="checkboxvalue[]" id="defaultCheck32">
                                    <label class="form-check-label" for="defaultCheck32">
                                        fitness club
                                    </label>
                                </div>
                            </div>

                        </div>
                        <br>
                        <div class="col-md-14">
                            <div class="form-check container">
                                <div class="left">
                                    <input class="form-check-input" type="checkbox" value="security guard" name="checkboxvalue[]" id="defaultCheck33">
                                    <label class="form-check-label" for="defaultCheck33">
                                        security guard
                                    </label>
                                </div>
                                <div class="center">
                                    <input class="form-check-input" type="checkbox" value="garage" name="checkboxvalue[]" id="defaultCheck34">
                                    <label class="form-check-label" for="defaultCheck34">
                                        garage
                                    </label>
                                </div>
                                <div class="right">
                                    <input class="form-check-input" type="checkbox" value="electronic entry" name="checkboxvalue[]" id="defaultCheck35">
                                    <label class="form-check-label" for="defaultCheck35">
                                        electronic entry
                                    </label>
                                </div>
                            </div>

                        </div>
                        <br>
                        <div class="col-md-14">
                            <div class="form-check container">
                                <div class="left">
                                    <input class="form-check-input" type="checkbox" value="walk up" name="checkboxvalue[]" id="defaultCheck36">
                                    <label class="form-check-label" for="defaultCheck36">
                                        walk up
                                    </label>
                                </div>
                                <div class="center">
                                    <input class="form-check-input" type="checkbox" value="visitor parking" name="checkboxvalue[]" id="defaultCheck37">
                                    <label class="form-check-label" for="defaultCheck37">
                                        visitor parking
                                    </label>
                                </div>
                                <div class="right">
                                    <input class="form-check-input" type="checkbox" value="elevator" name="checkboxvalue[]" id="defaultCheck38">
                                    <label class="form-check-label" for="defaultCheck38">
                                        elevator
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="col-md-12" style="text-align:center;">
                        <button type="submit" class="btn btn-default" style="border-radius:25px; color:gray; text-align:center; height:50px; width:50%;">Submit</button>
                    </div>
                    <div class="col-md-14 p-t-20">
                        <span class="txt1 p-b-17">

                        </span>

                        <a href="#" class="txt2">

                        </a>
                        <div class="bottom">
                            <img src="<?php echo base_url(); ?>assets/images/as-06.png" class="bottom credits" style="width:15%; height:15%;" />
                            <img id="img2" src="<?php echo base_url(); ?>assets/images/Relm-52.png" class="bottom redirect" style="width:25%; height:25%; margin-top:20px;" class="wow" />
                            <img id="img5" src="<?php echo base_url(); ?>assets/images/groups.png" class="bottom groups" style="width:20%; height:20%; margin-top:20px;" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div id="dropDownSelect1"></div>

    <script>
        function myfunc() {
            console.log(document.getElementById("location_name").value);
            var place = document.getElementById("location_name").value;

            var updatedmaps = `<iframe id="maps" src="https://maps.google.com/maps?q=`;
            var updatedmaps2 = `&output=embed" style="border:1px solid gray; border-radius:50px;" width=" 100%" height="300" allowfullscreen=""></iframe>`;
            document.getElementById("google-map123").innerHTML = updatedmaps + place + updatedmaps2;

        }
    </script>


    <script>
        $(document).ready(function() {
            if (window.File && window.FileList && window.FileReader) {
                $("#file").on("change", function(e) {
                    var files = e.target.files,
                        filesLength = files.length;
                    for (var i = 0; i < filesLength; i++) {
                        var f = files[i]
                        var fileReader = new FileReader();
                        fileReader.onload = (function(e) {
                            var file = e.target;
                            $("<span class=\"pip\">" +
                                "<img class=\"imageThumb\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" +
                                "<br/><span class=\"remove\">Remove image</span>" +
                                "</span>").insertAfter("#files");
                            $(".remove").click(function() {
                                $(this).parent(".pip").remove();
                            });

                            // Old code here
                            /*$("<img></img>", {
                              class: "imageThumb",
                              src: e.target.result,
                              title: file.name + " | Click to remove"
                            }).insertAfter("#files").click(function(){$(this).remove();});*/

                        });
                        fileReader.readAsDataURL(f);
                    }
                    console.log(files);
                });
            } else {
                alert("Your browser doesn't support to File API")
            }
        });
    </script>

    <script>
        $(document).ready(function() {


            var readURL = function(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        $('.profile-pic').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(input.files[0]);
                }
            }


            $(".file-upload").on('change', function() {
                readURL(this);
            });

            $(".upload-button").on('click', function() {
                $(".file-upload").click();
            });
        });
    </script>

</body>

</html>