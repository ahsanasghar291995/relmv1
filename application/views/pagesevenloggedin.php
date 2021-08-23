<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <script
  src="https://code.jquery.com/jquery-2.1.0.js"
  integrity="sha256-D6d1KSapXjq2tfZ6Ie9AYozkRHyB3fT2ys9mO2+4Wvc="
  crossorigin="anonymous"></script>


    <style>
        .container-login10 {
        background: linear-gradient(360deg,#517190, #756B90,#D6B0E4);
        background-size: 800% 800%;
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
            margin: 5px 25px;

        }

        .items22 {
            display: flex;
            justify-content: space-between;
            color: gray;
            margin: 5px 25px;
            margin-right: 52.5px;
        }

        .items222 {
            display: flex;
            justify-content: space-between;
            color: gray;
            margin: 5px 25px;
            margin-right: 50px;
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

        .fa {
            margin-top: 5px;
        }

        .thumbnail img {
            margin-left: 8%;
            margin-right: 8%;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            color: gray;
        }

        .fa-2x {
            font-size: 150%;
        }
    </style>
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
        var images33 = new Array(
            //"<?php echo base_url(); ?>assets/images/arrow-33.png",
            //"<?php echo base_url(); ?>assets/images/arrow-37.png",
            "<?php echo base_url(); ?>assets/images/logos-35.png",
            "<?php echo base_url(); ?>assets/images/logos-33.png");
        var images333 = new Array(
            //"<?php echo base_url(); ?>assets/images/arrow-33.png",
            //"<?php echo base_url(); ?>assets/images/arrow-37.png",
            "<?php echo base_url(); ?>assets/images/logos-35.png",
            "<?php echo base_url(); ?>assets/images/logos-33.png");
        var images4 = new Array(
            //"<?php echo base_url(); ?>assets/images/arrow-34.png",
            //"<?php echo base_url(); ?>assets/images/arrow-38.png",
            "<?php echo base_url(); ?>assets/images/logos-36.png",
            "<?php echo base_url(); ?>assets/images/logos-34.png");
        var images444 = new Array(
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
                document.getElementById("img33").src = images33[countimages];
                document.getElementById("img333").src = images333[countimages];
                document.getElementById("img444").src = images444[countimages];
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
            $('.redirect').click(function() {

                window.location.href = "<?php echo base_url(); ?>index.php/main/pageseven/2";

            });
            $('.credits').click(function() {

                window.location.href = "<?php echo base_url(); ?>index.php/main/credits";

            });
            $('.groups').click(function() {

                window.location.href = "<?php echo base_url(); ?>index.php/main/groups";

            });
            $('.back').click(function() {

                window.location.href = "<?php echo base_url(); ?>index.php/main/";

            });
        });
    </script>

</head>

<body class="container-login10">

    <div class="" id="img14">

        <div class="container-login100">

            <div class="wrap-login100 p-l-25 p-r-25 p-t-20 p-b-24">
                <div class="top">
                    <a href="#" class="back"><img id="img3" src="<?php echo base_url(); ?>assets/images/logos-33.png" style="width:10%; height:100%; "></a></img>
                    <button type="button" class="fa fa-bars fa-2x" data-toggle="dropdown" aria-expanded="false" style="color:gray; float:right">
                    </button>
                    <ul class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; transform: translate3d(0px, 38px, 0px);">
                        <li><a class="dropdown-item" href="matching" style="color:gray;">matching</a></li>
                        
                        <li><a class="dropdown-item" href="pageone" style="color:gray;">sign out</a></li>
                    </ul>
                </div>

                <form class="login100-form validate-form" method="post" action="matching">

                    <span class="login100-form-title p-b-49">
                        <img id="" src="<?php echo base_url(); ?>assets/images/Relm-53.png" style="width:20%; height:50%; background-color:white; color:white;" />
                    </span>

                    <div class="col-md-14" style="color:gray; font-size:20px; text-align:center;">
                        <div class="col-md-12" style="display:flex; text-align:center; justify-content:center;">
                        <i class="fa fa-user fa-5x" aria-hidden="true"></i>
                        <i type="button" class="fa fa-cog" data-toggle="dropdown" aria-expanded="false" style="color:gray; float:right;">
                        </i>
                            <ul class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; transform: translate3d(0px, 38px, 0px);">
                            <li><a class="dropdown-item" href="pagetwo_replace" style="color:gray;">edit</a></li>
                            </ul>
                        </div>
                        <p><strong>manny roman</strong></p>
                        <p style="font-size:10px;">@manny.gabe</p>
                        <br>
                        <br>
                        <p><strong style="color:gray;">my matches</strong></p>
                        <p style="color:gray;"><strong style="color:gray;">you matched with <?php echo $matchinguser;?> and matching results are: <?php echo $matchingresult;?>%</strong></p>
                        
                    </div>
                    <br>
                    <!--
                    <div class="col-md-14" style="border:2px solid gray; border-radius:10px; color:gray; font-size:20px; text-align:center;">
                        <img src="<?php echo base_url(); ?>assets/images/social_space_icon1.svg" style="width:15%; float:right; padding-top:10px; padding-right:10px;" />
                        <br>
                        <p><strong style="color:gray; padding-left:50px;">professionals</strong></p><br>
                        <div class="col-md-14 thumbnail" style="justify-content:space-between;">
                            <img id="img33" class="back" src="<?php echo base_url(); ?>assets/images/logos-33.png" style="width:10%; padding-top:100px;"></img>
                            <img src="<?php echo base_url(); ?>/assets/images/girl2.png" style="width:20%;"></img>
                            <img id="img4" src="<?php echo base_url(); ?>assets/images/logos-34.png" style="width:10%; padding-top:100px;" />
                        </div>
                        <br>
                        <p>32</p>
                        <p>86% match</p>
                        <p>los angeles</p>
                        <p>philanthropist</p>
                        <p>156,348 credits</p>
                        <br>

                    </div>
                    <br>
                    -->
                    <div class="col-md-14" style="border:2px solid gray; border-radius:10px; color:gray; font-size:20px; text-align:center;">
                        <br>
                        <p><strong style="color:gray;">housemates</strong></p><br>
                        <div class="col-md-14 thumbnail" style="justify-content:space-between;">
                            <img id="img333" src="<?php echo base_url(); ?>assets/images/logos-33.png" style="width:10%; padding-top:100px;"></img>
                            <img src="<?php echo base_url(); ?>/assets/images/girl2.png" style="width:20%;"></img>
                            <img id="img444" src="<?php echo base_url(); ?>assets/images/logos-34.png" style="width:10%; padding-top:100px;" />
                        </div>
                        <br>
                        <p>32</p>
                        <p>anna</p>
                        <p>93% overall match</p>
                        <p>volunteering, yoga, surfing</p>
                        <p>desired move date: 1.1.2021</p>
                        <br>

                    </div>
                    <br>
                    <div class="col-md-14" style="border:2px solid gray; border-radius:10px; color:gray; font-size:20px; text-align:center;">
                        <br>
                        <br><br><p><strong style="color:gray;">+  /  -  skills</strong></p><br><br><br>
                        <!--<img src="<?php echo base_url(); ?>assets/images/social_space_icon3.svg" style="width:50px; float:right; padding-top:10px; padding-right:10px;" />
                        <br>
                        <p><strong style="color:gray; padding-left:50px;">shared experiences</strong></p><br>
                        <img src="<?php echo base_url(); ?>/assets/images/girl2.png" style="width:18%;"></img>
                        <img src="<?php echo base_url(); ?>/assets/images/girl2.png" style="width:18%;"></img>
                        <img src="<?php echo base_url(); ?>/assets/images/girl2.png" style="width:18%;"></img>
                        <img src="<?php echo base_url(); ?>/assets/images/girl2.png" style="width:18%;"></img>
                        <img src="<?php echo base_url(); ?>/assets/images/girl2.png" style="width:18%;"></img>
                        <br>
                        <br>
                        <p>92% survey match</p>
                        <br>
                        <div class="col-md-12">
                            <input type="text" name="message" placeholder="plan a group activity" class="form-control" style="color:lightgray; text-align:center; height:220px;">
                        </div>
                        <br>-->

                    </div>
                    <br>
                    <div class="col-md-14" style="border:2px solid gray; border-radius:10px; color:gray; font-size:20px; text-align:center;">
                        <br>
                        <br><br><p><strong style="color:gray;">shared experiences</strong></p><br><br><br>
                    </div>
                    <br>
                    <!--<div class="col-md-14" style="border:2px solid gray; border-radius:10px; color:gray; ">
                        <br>
                        <p style="text-align:center;"><strong style="color:gray;">gigs to consider</strong></p><br>

                        <div class="col-md-14" style="text-align:center;">
                            <div class="items">
                                <p>project name </p>
                                <p>credits</p>
                                <p>deadline</p>

                            </div>
                            <div class="items22">
                                <p>logo design</p>
                                <p>+120</p>
                                <p>1.9.21</p>
                            </div>
                            <div class="items222">
                                <p>web design</p>
                                <p>+180</p>
                                <p>2.11.21</p>
                            </div>
                        </div>
                        <br>
                        <p style="text-align:center;">+ 8 more</p>
                        <br>
                    </div>
                    <br>
                    <div class="col-md-14" style="border:2px solid gray; border-radius:10px; color:gray; font-size:20px; text-align:center;">
                        <br>
                        <p><strong style="color:gray;">workroom</strong></p><br>
                        <p style="margin-left:4px;">logo design_________<button type="button" style="color:green;">90% completed</button></p>
                        <p style="margin-left:4px;">web design_________<button type="button" style="color:green;"> 50% completed</button></p>
                        <p style="margin-left:2px;">app design_________ <button type="button" style="color:green; margin-left:3px;"> 10% completed</button></p>
                        <br>
                    </div>
                    -->


                    <div class="flex-col-c p-t-30">
                         <button type="" id="che"><img id="img4" src="<?php echo base_url(); ?>assets/images/logos-34.png" style="width:10%; height:10%; margin-left:85%;" /></button>
                        <span class="txt1 p-b-17">

                        </span>

                        <a href="#" class="txt2">

                        </a>
                        <div class="bottom">
                            <img src="<?php echo base_url(); ?>assets/images/as-06.png" class="bottom credits" style="width:15%; height:15%;" />
                            <img id="" src="<?php echo base_url(); ?>assets/images/Relm-52.png" class="bottom" style="width:25%; height:50%; margin-top:20px; margin-left:15px;" class="wow" />
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