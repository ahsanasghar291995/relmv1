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
            font-size: 12px;
            padding-left: 25px;
        }

        .form-check-input {
            margin-top: .45rem;

        }

        input[type=checkbox] {
            /* Double-sized Checkboxes */
            -ms-transform: scale(1.5);
            /* IE */
            -moz-transform: scale(1.5);
            /* FF */
            -webkit-transform: scale(1.5);
            /* Safari and Chrome */
            -o-transform: scale(1.5);
            /* Opera */
            transform: scale(1.5);
            padding: 10px;
        }


        .progress-bar {
            width: 60% !important;
            background-color: gray !important;
        }
    </style>
    <script language="javascript" type="text/javascript">
        var timerid = 0;
        var id = 1;
        var images = new Array(
            "<?php echo base_url(); ?>assets/images/logos-199.png",
            "<?php echo base_url(); ?>assets/images/logos-188.png",
            "<?php echo base_url(); ?>assets/images/logos-16.png",
            "<?php echo base_url(); ?>assets/images/logos-19.png");
        var images2 = new Array(
            "<?php echo base_url(); ?>assets/images/logos-3111.png",
            "<?php echo base_url(); ?>assets/images/logos-3222.png",
            "<?php echo base_url(); ?>assets/images/logos-30.png",
            "<?php echo base_url(); ?>assets/images/logos-29.png");
        var images3 = new Array(
            "<?php echo base_url(); ?>assets/images/arrow-33.png",
            "<?php echo base_url(); ?>assets/images/arrow-37.png",
            "<?php echo base_url(); ?>assets/images/logos-35.png",
            "<?php echo base_url(); ?>assets/images/logos-33.png");
        var images4 = new Array(
            "<?php echo base_url(); ?>assets/images/arrow-34.png",
            "<?php echo base_url(); ?>assets/images/arrow-38.png",
            "<?php echo base_url(); ?>assets/images/logos-36.png",
            "<?php echo base_url(); ?>assets/images/logos-34.png");
        var images44 = new Array(
            "<?php echo base_url(); ?>assets/images/arrow-34.png",
            "<?php echo base_url(); ?>assets/images/arrow-38.png",
            "<?php echo base_url(); ?>assets/images/logos-36.png",
            "<?php echo base_url(); ?>assets/images/logos-34.png");
        var images444 = new Array(
            "<?php echo base_url(); ?>assets/images/arrow-34.png",
            "<?php echo base_url(); ?>assets/images/arrow-38.png",
            "<?php echo base_url(); ?>assets/images/logos-36.png",
            "<?php echo base_url(); ?>assets/images/logos-34.png");
        var images4444 = new Array(
            "<?php echo base_url(); ?>assets/images/arrow-34.png",
            "<?php echo base_url(); ?>assets/images/arrow-38.png",
            "<?php echo base_url(); ?>assets/images/logos-36.png",
            "<?php echo base_url(); ?>assets/images/logos-34.png");
        var images44444 = new Array(
            "<?php echo base_url(); ?>assets/images/arrow-34.png",
            "<?php echo base_url(); ?>assets/images/arrow-38.png",
            "<?php echo base_url(); ?>assets/images/logos-36.png",
            "<?php echo base_url(); ?>assets/images/logos-34.png");
        var images5 = new Array(
            "<?php echo base_url(); ?>assets/images/logos-4444.png",
            "<?php echo base_url(); ?>assets/images/logos-4111.png",
            "<?php echo base_url(); ?>assets/images/logos-42.png",
            "<?php echo base_url(); ?>assets/images/logos-41.png");
        // var images6 = new Array(
        //     "<?php echo base_url(); ?>assets/images/logos-91.png",
        //     "<?php echo base_url(); ?>assets/images/logos-90.png",
        //     "<?php echo base_url(); ?>assets/images/logos-89.png",
        //     "<?php echo base_url(); ?>assets/images/logos-88.png");
        var images7 = new Array(
            "<?php echo base_url(); ?>assets/images/logos-101.jpg",
            "<?php echo base_url(); ?>assets/images/logos-102.jpg",
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
                document.getElementById("img1").src = images[countimages];
                document.getElementById("img2").src = images2[countimages];
                document.getElementById("img3").src = images3[countimages];
                document.getElementById("img4").src = images4[countimages];
                //document.getElementById("img44").src = images44[countimages];
                //document.getElementById("img444").src = images444[countimages];
                //document.getElementById("img4444").src = images4444[countimages];
                //document.getElementById("img44444").src = images44444[countimages];
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
                    document.getElementById("img14").className = "limiter hello";

                }
                if (c == 1) {
                    //document.getElementById("img14").style.background = 'linear-gradient(-45deg,green,yellow)';
                    document.getElementById("img14").className = "limiter hello3";
                }
                if (c == 2) {
                    //document.getElementById("img14").style.background = 'linear-gradient(-45deg,green,yellow)';
                    document.getElementById("img14").className = "limiter hello2";
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

<body onload="startTime();">

    <div class="limiter hello4" id="img14">

        <div class="container-login100">
            <div class="wrap-login100 p-l-25 p-r-25 p-t-15 p-b-15">
                <div class="top">
                    <a href="list_property_pagetwo"><img id="img3" src="<?php echo base_url(); ?>assets/images/logos-33.png" style="width:10%; height:100%; "></a></img>
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
                <form class="login100-form validate-form" method="post" action="">

                    <span class="login100-form-title p-b-30">
                        <img id="img1" src="<?php echo base_url(); ?>assets/images/logos-19.png" style="width:70%; padding-left:50px;" />
                    </span>
                    <div class="col-md-12">
                        <p style="text-align:center; font-size:16px;"><b style="font-size:16px; text-align:center;"> list in many ways</b></p>
                    </div>
                    <br>
                    <div class="col-md-14" style="padding-left:80px;">
                        <div class="col-md-12">
                            <input class="form-check-input" type="checkbox" value="room for rent" name="checkboxvalue[]" id="defaultCheck1" style="padding-left:5px; margin-left:5px;">
                            <label class="form-check-label" for="defaultCheck1" style="padding-right:8px;">
                                <p><b>room for rent</b></p>
                            </label>
                        </div>
                        <br>
                        <div class="col-md-12">
                            <input class="form-check-input" type="checkbox" value="home for rent" name="checkboxvalue[]" id="defaultCheck2" style="padding-left:5px; margin-left:5px;">
                            <label class="form-check-label" for="defaultCheck2" style="padding-right:8px;">
                                <p><b>home for rent</b></p>
                            </label>
                        </div>
                        <br>
                        <div class="col-md-12">
                            <input class="form-check-input" type="checkbox" value="list for sale" name="checkboxvalue[]" id="defaultCheck3" style="padding-left:5px; margin-left:5px;">
                            <label class="form-check-label" for="defaultCheck3" style="padding-right:8px;">
                                <p><b>list for sale</b></p>
                            </label>
                        </div>
                        <br>
                        <div class="col-md-12">
                            <input class="form-check-input" type="checkbox" value="rent as venue" name="checkboxvalue[]" id="defaultCheck4" style="padding-left:5px; margin-left:5px;">
                            <label class="form-check-label" for="defaultCheck4" style="padding-right:8px;">
                                <p><b>rent as venue</b></p>
                            </label>
                        </div>
                        <br>
                        <div class="col-md-12">
                            <input class="form-check-input" type="checkbox" value="barter for skill" name="checkboxvalue[]" id="defaultCheck5" style="padding-left:5px; margin-left:5px;">
                            <label class="form-check-label" for="defaultCheck5" style="padding-right:8px;">
                                <p><b>barter for skill</b></p>
                            </label>
                        </div>
                    </div>
                    <br><br><br>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:70%">
                            <span class="sr-only">60% Complete</span>
                        </div>
                    </div>
                    <br>


                    <div class="col-md-14 p-t-20">
                        <a href="list_property_pagefour"><img id="img4" src="<?php echo base_url(); ?>assets/images/logos-34.png" style="width:10%; height:10%; margin-left:85%;" /></a>
                        <span class="txt1 p-b-17">

                        </span>

                        <a href="#" class="txt2">

                        </a>
                        <div class="bottom">
                            <img src="<?php echo base_url(); ?>assets/images/as-06.png" class="bottom credits" style="width:15%; height:15%;" />
                            <img id="img2" src="<?php echo base_url(); ?>assets/images/logos-29.png" class="bottom redirect" style="width:50%; height:50%; margin-top:20px;" class="wow" />
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