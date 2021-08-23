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
            background: linear-gradient(-120deg, #5AD843, #B7F004, #D6BB00);
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
            background: linear-gradient(-120deg, #0472FE, #00F8E7, #4EC5EF, #B27CFA);
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
            display: flex;
            justify-content: space-between;
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
            margin: 10px 5px;
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

        .dropdown-item {
            width: 90%;
            margin-left: 5%;
        }

        .bootstrap-select:not([class*=col-]):not([class*=form-control]):not(.input-group-btn) {
            width: 100%;
        }

        .wrap-login100 {
            width: 95%;
        }
    </style>
    </style>
    <script language="javascript" type="text/javascript">
        var timerid = 0;
        var id = 1;
        var images = new Array(
            "<?php echo base_url(); ?>assets/images/logos-18.png",
            "<?php echo base_url(); ?>assets/images/logos-17.png",
            "<?php echo base_url(); ?>assets/images/logos-16.png",
            "<?php echo base_url(); ?>assets/images/logos-19.png");
        var images2 = new Array(
            "<?php echo base_url(); ?>assets/images/logos-32.png",
            "<?php echo base_url(); ?>assets/images/logos-31.png",
            "<?php echo base_url(); ?>assets/images/logos-30.png",
            "<?php echo base_url(); ?>assets/images/logos-29.png");
        var images3 = new Array(
            "<?php echo base_url(); ?>assets/images/logos-39.png",
            "<?php echo base_url(); ?>assets/images/logos-37.png",
            "<?php echo base_url(); ?>assets/images/logos-35.png",
            "<?php echo base_url(); ?>assets/images/logos-33.png");
        var images4 = new Array(
            "<?php echo base_url(); ?>assets/images/logos-40.png",
            "<?php echo base_url(); ?>assets/images/logos-38.png",
            "<?php echo base_url(); ?>assets/images/logos-36.png",
            "<?php echo base_url(); ?>assets/images/logos-34.png");
        var images5 = new Array(
            "<?php echo base_url(); ?>assets/images/logos-44.png",
            "<?php echo base_url(); ?>assets/images/logos-43.png",
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

                window.location.href = "<?php echo base_url(); ?>index.php/main/findpageseven/3";

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
            <div class="wrap-login100 p-l-25 p-r-25 p-t-20 p-b-24">
                <div class="top">
                    <a href="pagetwo"><img id="img3" src="<?php echo base_url(); ?>assets/images/logos-33.png" style="width:10%; height:100%; "></a></img>
                    <i class="fa fa-bars fa-2x"></i>
                </div>
                <form class="login100-form validate-form" method="post" action="update_records_pagethree">

                    <span class="login100-form-title p-b-5">
                        <img id="img1" src="<?php echo base_url(); ?>assets/images/logos-19.png" style="width:50%; height:50%; background-color:white; color:white;" />
                    </span>
                    <div class="items" style="text-align:center; color:gray; margin-left:20%;">
                        <?php
                        echo $this->session->flashdata("error");
                        ?>
                    </div>
                    <div class="items">
                        <select class="selectpicker" id="mySelect" name="lifestyle_entertainment[]" title="lifestyle & entertainment" style="width:100%; border:none; color:gray;" multiple required>
                            <!-- <option>Pets</option> -->
                            <option value="socialites & nightlife">socialites & nightlife</option>
                            <option value="work hard / play hard">work hard / play hard</option>
                            <option value="global travelers">global travelers</option>
                            <option value="art festivals">art festivals</option>
                            <option value="420 friendly">420 friendly</option>
                            <option value="sports fan">sports fan</option>
                            <option value="lgbt friendly">lgbt friendly</option>
                        </select>
                    </div>
                    <div class="items">
                        <select class="selectpicker" name="education_studentlife[]" title="education & student life" style="width:100%; border:none; color:gray;" multiple required>
                            <!-- <option>Pets</option> -->
                            <option value="undergraduate">undergraduate</option>
                            <option value="graduate">graduate</option>
                            <option value="masters">masters</option>
                            <option value="doctorate">doctorate</option>
                            <option value="greek associations">greek associations</option>
                            <option value="foreign exchange">foreign exchange</option>
                        </select>
                    </div>
                    <div class="items">
                        <select class="selectpicker" name="health_fitness[]" title="health & fitness" style="width:100%; border:none; color:gray;" multiple required>
                            <!-- <option>Pets</option> -->
                            <option value="crossfit / circuit training">crossfit / circuit training</option>
                            <option value="power lifting / ironman">power lifting / ironman</option>
                            <option value="yoga / meditation">yoga / meditation</option>
                            <option value="cooking / culinary arts">cooking / culinary arts</option>
                            <option value="vegan / vegetarian">vegan / vegetarian</option>
                            <option value="cardio / swimming">cardio / swimming</option>
                            <option value="hiking / climbing">hiking / climbing</option>
                            <option value="biking / running">biking / running</option>
                        </select>
                    </div>
                    <div class="items">
                        <select class="selectpicker " name="business_entrepreneurship[]" title="business & entrepreneurship" style="width:100%; border:none; color:gray;" multiple required>
                            <!-- <option>Pets</option> -->
                            <option value="startups">startups</option>
                            <option value="blockchain & cryptocurrency">blockchain & cryptocurrency</option>
                            <option value="general business networking">general business networking</option>
                            <option value="investments & real estate">investments & real estate</option>
                            <option value="agriculture & renewables">agriculture & renewables</option>
                            <option value="professional growth & development">professional growth & development</option>
                        </select>
                    </div>

                    <div class="items">
                        <select class="selectpicker " name="social_interest_housing[]" title="social interest housing" style="width:100%; border:none; color:gray;" multiple required>
                            <!-- <option>Pets</option> -->
                            <option value="single parents">single parents</option>
                            <option value="couples living">couples living</option>
                            <option value="pet lovers">pet lovers</option>
                            <option value="military & reserve">military & reserve</option>
                            <option value="seniors">seniors</option>
                            <option value="volunteering & philanthropy">volunteering & philanthropy</option>
                            <option value="accessible living">accessible living</option>

                        </select>
                    </div>
                    <div class="items">
                        <select class="selectpicker " name="sports_recreation[]" title="sports & recreation" style="width:100%; border:none; color:gray;" multiple required>
                            <!-- <option>Pets</option> -->
                            <option value="sports leagues / running">sports leagues / running</option>
                            <option value="crossfit / boot camp training / pilates / yoga">crossfit / boot camp training / pilates / yoga</option>
                            <option value="video games / e-sports">video games / e-sports</option>
                            <option value="surfing / beach">surfing / beach</option>
                            <option value="skiing / snowboarding o hiking">skiing / snowboarding o hiking</option>
                            <option value="motor sports">motor sports</option>
                            <option value="mountain biking">mountain biking</option>
                            <option value="water sports">water sports</option>
                            <option value="Carclubs & Motorhead">Carclubs & Motorhead</option>
                            <option value="Beach goer">Beach goer</option>
                        </select>
                    </div>
                    <div class="items">
                        <select class="selectpicker " name="creative_performers[]" title="creative & perfomers" style="width:100%; border:none; color:gray;" multiple required>
                            <!-- <option>Pets</option> -->
                            <option value="photography">photography</option>
                            <option value="film production">film production</option>
                            <option value="musicians">musicians</option>
                            <option value="performing arts & models">performing arts & models</option>
                            <option value="graphic artist / designers">graphic artist / designers</option>
                            <option value="creative arts">creative arts</option>
                            <option value="fashion">fashion</option>
                            <option value="Painter">Painter</option>
                            <option value="Video editing">Video editing</option>
                        </select>
                    </div>
                    <div class="items">
                        <select class="selectpicker " name="frequency_of_guests_2[]" title="frequency of guests" style="width:100%; border:none; color:gray;" multiple required>
                            <!-- <option>Pets</option> -->
                            <option value="not often">not often</option>
                            <option value="1-2 times a week">1-2 times a week</option>
                            <option value="3-5 times a week">3-5 times a week</option>
                            <option value="nearly everyday">nearly everyday</option>
                        </select>
                    </div>

                    <div class="flex-col-c p-t-30">
                        <button type="submit"><img id="img4" src="<?php echo base_url(); ?>assets/images/logos-34.png" style="width:10%; height:10%; margin-left:85%;" /></button>
                        <span class="txt1 p-b-17">

                        </span>

                        <a href="#" class="txt2">

                        </a>
                        <div class="bottom">
                            <img src="<?php echo base_url(); ?>assets/images/as-06.png" class="bottom" style="width:15%; height:15%;" />
                            <img id="img2" src="<?php echo base_url(); ?>assets/images/logos-29.png" class="bottom redirect" style="width:50%; height:50%; margin-top:20px;" class="wow" />
                            <img id="img5" src="<?php echo base_url(); ?>assets/images/logos-41.png" class="bottom" style="width:20%; height:20%; margin-top:20px;" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div id="dropDownSelect1"></div>



</body>

</html>