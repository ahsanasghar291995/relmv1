<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>


    <style>
        .container-login1 {
            background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
            background-size: 400% 400%;
            animation: gradient 15s ease infinite;
        }

        .container-login10 {
            background: linear-gradient(360deg, #517190, #756B90, #D6B0E4);
            background-size: 400% 400%;
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

        .form-check-input {
            margin-top: 7px;
        }

        .container {
            display: flex;
            flex-flow: row nowrap;
            /* Align on the same line */
            justify-content: space-between;
            /* Equal margin between the child elements */
        }
    </style>
    <script language="javascript" type="text/javascript">
        var timerid = 0;
        var id = 1;
        var images = new Array(
            //"<?php echo base_url(); ?>assets/images/logos-199.png",
            //"<?php echo base_url(); ?>assets/images/logos-188.png",
            "<?php echo base_url(); ?>assets/images/logos-16.png",
            "<?php echo base_url(); ?>assets/images/logos-19.png");
        var images2 = new Array(
            //"<?php echo base_url(); ?>assets/images/logos-3111.png",
            //"<?php echo base_url(); ?>assets/images/logos-3222.png",
            "<?php echo base_url(); ?>assets/images/logos-30.png",
            "<?php echo base_url(); ?>assets/images/logos-29.png");
        var images3 = new Array(
            //"<?php echo base_url(); ?>assets/images/arrow-33.png",
            //"<?php echo base_url(); ?>assets/images/arrow-37.png",
            "<?php echo base_url(); ?>assets/images/logos-35.png",
            "<?php echo base_url(); ?>assets/images/logos-33.png");
        var images4 = new Array(
            //"<?php echo base_url(); ?>assets/images/arrow-34.png",
            //"<?php echo base_url(); ?>assets/images/arrow-38.png",
            "<?php echo base_url(); ?>assets/images/logos-36.png",
            "<?php echo base_url(); ?>assets/images/logos-34.png");
        var images5 = new Array(
            //"<?php echo base_url(); ?>assets/images/logos-4444.png",
            //"<?php echo base_url(); ?>assets/images/logos-4111.png",
            "<?php echo base_url(); ?>assets/images/logos-42.png",
            "<?php echo base_url(); ?>assets/images/logos-41.png");
        // var images6 = new Array(
        //     "<?php echo base_url(); ?>assets/images/logos-91.png",
        //     "<?php echo base_url(); ?>assets/images/logos-90.png",
        //     "<?php echo base_url(); ?>assets/images/logos-89.png",
        //     "<?php echo base_url(); ?>assets/images/logos-88.png");
        var images7 = new Array(
            //"<?php echo base_url(); ?>assets/images/logos-101.jpg",
            //"<?php echo base_url(); ?>assets/images/logos-102.jpg",
            "<?php echo base_url(); ?>assets/images/logos-103.jpg",
            "<?php echo base_url(); ?>assets/images/logos-104.jpg");
        var countimages = 0;
        var c = 0;

        function startTime() {
            var backcount = 101;

            if (timerid) {
                timerid = 0;
            }
            var tDate = new Date();

            if (countimages == images.length) {
                countimages = 0;
            }
            if (tDate.getSeconds() % 5 == 0) {
                //document.getElementById("container").id = two;
                //document.getElementById("img1").src = images[countimages];
                //document.getElementById("img2").src = images2[countimages];
                document.getElementById("img3").src = images3[countimages];
                document.getElementById("img4").src = images4[countimages];
                document.getElementById("img5").src = images5[countimages];
                // document.getElementById("img6").src = images6[countimages];
                // document.getElementById("img7").src = images6[countimages];
                // document.getElementById("img8").src = images6[countimages];
                // document.getElementById("img9").src = images6[countimages];
                // document.getElementById("img10").src = images6[countimages];
                // document.getElementById("img11").src = images6[countimages];
                // document.getElementById("img12").src = images6[countimages];
                // document.getElementById("img13").src = images6[countimages];
                if (c == 0) {
                    //document.getElementById("img14").style.background = 'linear-gradient(-45deg,red,blue)';
                    //document.getElementById("img14").style.animation = 'gradient 15s ease infinite';
                    //document.getElementById("img14").className = "limiter hello";

                }
                if (c == 1) {
                    //document.getElementById("img14").style.background = 'linear-gradient(-45deg,green,yellow)';
                    //document.getElementById("img14").className = "limiter hello3";
                }
                if (c == 2) {
                    //document.getElementById("img14").style.background = 'linear-gradient(-45deg,green,yellow)';
                    //document.getElementById("img14").className = "limiter hello2";
                }
                if (c == 3) {
                    //document.getElementById("img14").style.background = 'linear-gradient(green,yellow)';
                    document.getElementById("img14").className = "limiter hello4";
                }

            }
            countimages++;
            c++;
            if (c == 4) {
                c = 0;
            }

            timerid = setTimeout("startTime()", 1000);
        }
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#checkBtn').click(function() {
                checked = $("input[type=checkbox]:checked").length;

                if (checked < 3) {

                    alert("You must check at least three checkbox.");
                    return false;
                }
                // if (checked > 3) {
                //     window.location.href = "<?php echo base_url(); ?>index.php/main/update_value_pagefour";
                // }

            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.redirect').click(function() {

                window.location.href = "<?php echo base_url(); ?>index.php/main/findpageseven/6";

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

    <div class="" id="img14">

        <div class="container-login100">
            <div class="wrap-login100 p-l-25 p-r-25 p-t-20 p-b-24">
                <div class="top">
                    <a href="matching"><img id="img3" src="<?php echo base_url(); ?>assets/images/logos-33.png" style="width:10%; height:100%; "></a></img>
                    <button type="button" class="fa fa-bars fa-2x" data-toggle="dropdown" aria-expanded="false" style="color:gray; float:right;">
                    </button>
                    <ul class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; transform: translate3d(0px, 38px, 0px);">
                        <li><a class="dropdown-item" href="matching" style="color:gray;">matching</a></li>
                        <!--<li><a class="dropdown-item" href="#" style="color:gray;">feedback</a></li>
                        <li><a class="dropdown-item" href="list_property_pageone" style="color:gray;">list property</a></li>
                        <li><a class="dropdown-item" href="pagefive" style="color:gray;">get involved</a></li>
                        <li id="ie2s0aa61" data-direction="ltr" data-listposition="center" data-data-id="bmi24vh" data-state="menu false  link" data-index="1" class="_3vxeZ _2TFvc dropdown-item" data-original-gap-between-text-and-btn="10" aria-hidden="false" style="width: 100%; height: 30px; position: relative; box-sizing: border-box; overflow: visible; visibility: inherit;"><a data-testid="linkElement" href="http://launchpad.stagflux.com/assets/pdf/aboutusv3new.pdf" target="_blank" class="_25Cim" aria-haspopup="false">
                                <div class="_3zfdd">
                                    <div class="" style="text-align:left">
                                        <p class="_3YCIf" style=" color:gray; text-align: left;" id="ie2s0aa61label">about us</p>
                                    </div>
                                </div>
                            </a>
                        </li>-->
                        <li><a class="dropdown-item" href="pageone" style="color:gray;">sign out</a></li>
                    </ul>
                </div>
                <form class="login100-form validate-form" method="post" action="update_value_pagefour">

                    <span class="login100-form-title p-b-49">
                        <img id="" src="<?php echo base_url(); ?>assets/images/Relm-53.png" style="width:20%; height:50%; background-color:white; color:white;" />
                    </span>
                    <div class="col-md-12">
                        <p style="text-align:center; color:gray;">home features</p>
                    </div>
                    <br>
                    <div class="col-md-14">
                        <div class="form-check container">
                            <div class="left">
                                <input class="form-check-input" type="checkbox" value="assigned parking" name="checkboxvalue[]" id="defaultCheck1" style="padding-left:5px; margin-left:5px;">
                                <label class="form-check-label" for="defaultCheck1">
                                    assigned parking
                                </label>
                            </div>
                            <div class="center">
                                <input class="form-check-input" type="checkbox" value="swimming pool" name="checkboxvalue[]" id="defaultCheck2" style="padding-left:5px; margin-left:5px;">
                                <label class="form-check-label" for="defaultCheck2">
                                    swimming pool
                                </label>
                            </div>
                            <div class="right">
                                <input class="form-check-input" type="checkbox" value="fire place" name="checkboxvalue[]" id="defaultCheck3" style="padding-left:5px; margin-left:5px;">
                                <label class="form-check-label" for="defaultCheck3" style="padding-right:8px;">
                                    fire place
                                </label>
                            </div>

                        </div>
                    </div>
                    <br>

                    <div class="col-md-14">
                        <div class="form-check container">
                            <div class="left">
                                <input class="form-check-input" type="checkbox" value="covered parking" name="checkboxvalue[]" id="defaultCheck4" style="padding-left:5px; margin-left:5px;">
                                <label class="form-check-label" for="defaultCheck4" style="padding-right:10px;">
                                    covered parking
                                </label>
                            </div>
                            <div class="center">
                                <input class="form-check-input" type="checkbox" value="wireless internet" name="checkboxvalue[]" id="defaultCheck5" style="padding-left:5px; margin-left:5px;">
                                <label class="form-check-label" for="defaultCheck5">
                                    wireless internet
                                </label>
                            </div>
                            <div class="right">
                                <input class="form-check-input" type="checkbox" value="spa/sauna" name="checkboxvalue[]" id="defaultCheck6" style="padding-left:5px; margin-left:5px;">
                                <label class="form-check-label" for="defaultCheck6">
                                    spa/sauna
                                </label>
                            </div>
                        </div>

                    </div>
                    <br>
                    <div class="col-md-14">
                        <div class="form-check container">
                            <div class="left">
                                <input class="form-check-input" type="checkbox" value="community kitchen" name="checkboxvalue[]" id="defaultCheck7" style="padding-left:5px; margin-left:5px;">
                                <label class="form-check-label" for="defaultCheck7">
                                    community kitchen
                                </label>
                            </div>
                            <div class="center">
                                <input class="form-check-input" type="checkbox" value="wired internet" name="checkboxvalue[]" id="defaultCheck8" style="padding-left:5px; margin-left:5px;">
                                <label class="form-check-label" for="defaultCheck8" style="padding-right:16px;">
                                    wired internet
                                </label>
                            </div>
                            <div class="right">
                                <input class="form-check-input" type="checkbox" value="garage" name="checkboxvalue[]" id="defaultCheck9" style="padding-left:5px; margin-left:5px;">
                                <label class="form-check-label" for="defaultCheck9" style="padding-right:15px;">
                                    garage
                                </label>
                            </div>
                        </div>

                    </div>
                    <br>
                    <div class="col-md-14">
                        <div class="form-check container">
                            <div class="left">
                                <input class="form-check-input" type="checkbox" value="gated community" name="checkboxvalue[]" id="defaultCheck10" style="padding-left:5px; margin-left:5px;">
                                <label class="form-check-label" for="defaultCheck10" style="padding-right:35px;">
                                    gated community
                                </label>
                            </div>
                            <div class="center">
                                <input class="form-check-input" type="checkbox" value="high-rise" name="checkboxvalue[]" id="defaultCheck11" style="padding-left:5px; margin-left:5px;">
                                <label class="form-check-label" for="defaultCheck11" style="padding-right:55px;">
                                    high-rise
                                </label>
                            </div>
                            <div class="right">
                                <input class="form-check-input" type="checkbox" value="naturally well lit" name="checkboxvalue[]" id="defaultCheck12" style="padding-left:5px; margin-left:5px;">
                                <label class="form-check-label" for="defaultCheck12">
                                    naturally well lit
                                </label>
                            </div>
                        </div>

                    </div>
                    <br>
                    <div class="col-md-14">
                        <div class="form-check container">
                            <div class="left">
                                <input class="form-check-input" type="checkbox" value="nearby bus stop" name="checkboxvalue[]" id="defaultCheck13" style="padding-left:5px; margin-left:5px;">
                                <label class="form-check-label" for="defaultCheck13">
                                    nearby bus stop
                                </label>
                            </div>
                            <div class="center">
                                <input class="form-check-input" type="checkbox" value="low-rise" name="checkboxvalue[]" id="defaultCheck14" style="padding-left:5px; margin-left:5px;">
                                <label class="form-check-label" for="defaultCheck14" style="padding-right:30px;">
                                    low-rise
                                </label>
                            </div>
                            <div class="right">
                                <input class="form-check-input" type="checkbox" value="gym" name="checkboxvalue[]" id="defaultCheck15" style="padding-left:5px; margin-left:5px;">
                                <label class="form-check-label" for="defaultCheck15" style="padding-right:25px;">
                                    gym
                                </label>
                            </div>
                        </div>

                    </div>
                    <br>
                    <div class="col-md-14">
                        <div class="form-check container">
                            <div class="left">
                                <input class="form-check-input" type="checkbox" value="near subway" name="checkboxvalue[]" id="defaultCheck16" style="padding-left:5px; margin-left:5px;">
                                <label class="form-check-label" for="defaultCheck16" style="padding-right:55px;">
                                    near subway
                                </label>
                            </div>
                            <div class="center">
                                <input class="form-check-input" type="checkbox" value="on-site landry" name="checkboxvalue[]" id="defaultCheck17" style="padding-left:5px; margin-left:5px;">
                                <label class="form-check-label" for="defaultCheck17" style="padding-right:52px;">
                                    on-site laundry
                                </label>
                            </div>
                            <div class="right">
                                <input class="form-check-input" type="checkbox" value="disability access" name="checkboxvalue[]" id="defaultCheck18" style="padding-left:5px; margin-left:5px;">
                                <label class="form-check-label" for="defaultCheck18">
                                    disability access
                                </label>
                            </div>
                        </div>

                    </div>
                    <br>
                    <div class="col-md-14">
                        <div class="form-check container">
                            <div class="left">
                                <input class="form-check-input" type="checkbox" value="street parking" name="checkboxvalue[]" id="defaultCheck19" style="padding-left:5px; margin-left:5px;">
                                <label class="form-check-label" for="defaultCheck19" style="padding-right:40px;">
                                    street parking
                                </label>
                            </div>
                            <div class="center">
                                <input class="form-check-input" type="checkbox" value="doorman" name="checkboxvalue[]" id="defaultCheck20" style="padding-left:5px; margin-left:5px;">
                                <label class="form-check-label" for="defaultCheck20" style="padding-right:40px;">
                                    doorman
                                </label>
                            </div>
                            <div class="right">
                                <input class="form-check-input" type="checkbox" value="fitness club" name="checkboxvalue[]" id="defaultCheck21" style="padding-left:5px; margin-left:5px;">
                                <label class="form-check-label" for="defaultCheck21">
                                    fitness club
                                </label>
                            </div>
                        </div>

                    </div>
                    <br>
                    <div class="col-md-14">
                        <div class="form-check container">
                            <div class="left">
                                <input class="form-check-input" type="checkbox" value="security guard" name="checkboxvalue[]" id="defaultCheck22" style="padding-left:5px; margin-left:5px;">
                                <label class="form-check-label" for="defaultCheck22" style="padding-right:52px;">
                                    security guard
                                </label>
                            </div>
                            <div class="center">
                                <input class="form-check-input" type="checkbox" value="garage" name="checkboxvalue[]" id="defaultCheck23" style="padding-left:5px; margin-left:5px;">
                                <label class="form-check-label" for="defaultCheck23" style="padding-right:50px;">
                                    garage
                                </label>
                            </div>
                            <div class="right">
                                <input class="form-check-input" type="checkbox" value="electronic entry" name="checkboxvalue[]" id="defaultCheck24" style="padding-left:5px; margin-left:5px;">
                                <label class="form-check-label" for="defaultCheck24">
                                    electronic entry
                                </label>
                            </div>
                        </div>

                    </div>
                    <br>
                    <div class="col-md-14">
                        <div class="form-check container">
                            <div class="left">
                                <input class="form-check-input" type="checkbox" value="walk up" name="checkboxvalue[]" id="defaultCheck25" style="padding-left:5px; margin-left:5px;">
                                <label class="form-check-label" for="defaultCheck25" style="padding-right:40px;">
                                    walk up
                                </label>
                            </div>
                            <div class="center">
                                <input class="form-check-input" type="checkbox" value="visitor parking" name="checkboxvalue[]" id="defaultCheck26" style="padding-left:5px; margin-left:5px;">
                                <label class="form-check-label" for="defaultCheck26">
                                    visitor parking
                                </label>
                            </div>
                            <div class="right">
                                <input class="form-check-input" type="checkbox" value="elevator" name="checkboxvalue[]" id="defaultCheck27" style="padding-left:5px; margin-left:5px;">
                                <label class="form-check-label" for="defaultCheck27" style="padding-right:5px;">
                                    elevator
                                </label>
                            </div>
                        </div>

                    </div>

                    <br><br>
                    <div class="col-md-12">
                        <div class="progress mb-3">
                            <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%; background-color:gray;">
                                <span class="sr-only">100% Complete (success)</span>
                            </div>
                        </div>
                    </div>








                    <div class="flex-col-c p-t-10">
                        <button type="submit" id="checkBtn"><img id="img4" src="<?php echo base_url(); ?>assets/images/logos-34.png" style="width:10%; height:10%; margin-left:85%;" /></button>
                        <span class="txt1 p-b-17">

                        </span>

                        <a href="#" class="txt2">

                        </a>
                        <div class="bottom">
                            <img src="<?php echo base_url(); ?>assets/images/as-06.png" class="bottom credits" style="width:15%; height:15%;" />
                            <img id="" src="<?php echo base_url(); ?>assets/images/Relm-52.png" class="bottom redirect" style="width:25%; height:50%; margin-top:20px;" class="wow" />
                            <img id="img5" src="<?php echo base_url(); ?>assets/images/logos-41.png" class="bottom groups" style="width:20%; height:20%; margin-top:20px;" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div id="dropDownSelect1"></div>



</body>

</html>