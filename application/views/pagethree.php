<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>


    <style>
        .container-login1 {
            background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
            background-size: 400% 400%;
            animation: gradient 15s ease infinite;
        }
        .container-login10 {
        background: linear-gradient(360deg,#517190, #756B90,#D6B0E4);
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
            margin: 10px 50px;
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
                <form class="login100-form validate-form" method="post" action="update_records_pagethree">

                    <span class="login100-form-title p-b-49">
                        <img id="" src="<?php echo base_url(); ?>assets/images/Relm-53.png" style="width:20%; height:50%; background-color:white; color:white;" />
                    </span>
                    <div class="items" style="text-align:center; color:gray; margin-left:20%;">
                        <?php
                        echo $this->session->flashdata("error");
                        ?>
                    </div>
                    <div class="items">
                        <select class="selectpicker" name="lifestyle_entertainment[]" title="lifestyle & entertainment" style="width:100%; border:none; color:gray;" multiple required>
                            <!-- <option>Pets</option> -->
                            <option value="socialites">socialites</option>
                            <option value="nightlife">nightlife</option>
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
                            <option value="crossfit">crossfit</option>
                            <option value="circuit training">circuit training</option>
                            <option value="power lifting">power lifting</option>
                            <option value="ironman">ironman</option>
                            <option value="yoga">yoga</option>
                            <option value="meditation">meditation</option>
                            <option value="cooking">cooking</option>
                            <option value="culinary arts">culinary arts</option>
                            <option value="vegan">vegan</option>
                            <option value="vegetarian">vegetarian</option>
                            <option value="cardio">cardio</option>
                            <option value="swimming">swimming</option>
                            <option value="hiking">hiking</option>
                            <option value="climbing">climbing</option>
                            <option value="biking">biking</option>
                            <option value="running">running</option>
                        </select>
                    </div>
                    <div class="items">
                        <select class="selectpicker" name="business_entrepreneurship[]" title="business & entrepreneurs" style="width:100%; border:none; color:gray;" multiple required>
                            <!-- <option>Pets</option> -->
                            <option value="startups">startups</option>
                            <option value="blockchain">blockchain</option>
                            <option value="cryptocurrency">cryptocurrency</option>
                            <option value="general business networking">general business networking</option>
                            <option value="investments">investments</option>
                            <option value="real estate">real estate</option>
                            <option value="agriculture">agriculture</option>
                            <option value="renewables">renewables</option>
                            <option value="internships">internships</option>
                            <option value="ux/ui design">ux/ui design</option>
                            <option value="software engineering">software engineering</option>
                        </select>
                    </div>

                    <div class="items">
                        <select class="selectpicker" name="social_interest_housing[]" title="special interest housing" style="width:100%; border:none; color:gray;" multiple required>
                            <!-- <option>Pets</option> -->
                            <option value="single parents">single parents</option>
                            <option value="couples living">couples living</option>
                            <option value="pet lovers">pet lovers</option>
                            <option value="military reserves">military reserves</option>
                            <option value="senior living">senior living</option>
                            <option value="volunteering">volunteering</option>
                            <option value="philanthropy">philanthropy</option>
                            <option value="accessible living">accessible living</option>

                        </select>
                    </div>
                    <div class="items">
                        <select class="selectpicker" name="sports_recreation[]" title="sports & recreation" style="width:100%; border:none; color:gray;" multiple required>
                            <!-- <option>Pets</option> -->
                            <option value="running">running</option>
                            <option value="crossfit">crossfit</option>
                            <option value="boot camp training">boot camp training</option>
                            <option value="pilates">pilates</option>
                            <option value="yoga">yoga</option>
                            <option value="gaming">gaming</option>
                            <option value="surfing">surfing</option>
                            <option value="hiking">hiking</option>
                            <option value="motor sports">motor sports</option>
                            <option value="mountain biking">mountain biking</option>
                            <option value="water sports">water sports</option>
                            <option value="carclubs">carclubs</option>
                            <option value="motorhead">motorhead</option>
                            <option value="beachgoer">beachgoer</option>
                        </select>
                    </div>
                    <div class="items">
                        <select class="selectpicker" name="creative_performers[]" title="creative & perfomers" style="width:100%; border:none; color:gray;" multiple required>
                            <!-- <option>Pets</option> -->
                            <option value="photography">photography</option>
                            <option value="film production">film production</option>
                            <option value="musicians">musicians</option>
                            <option value="performing arts">performing arts</option>
                            <option value="models">models</option>
                            <option value="graphic artist">graphic artist</option>
                            <option value="interior design">interior design</option>
                            <option value="creative arts">creative arts</option>
                            <option value="fashionesta">fashionesta</option>
                            <option value="painting">painting</option>
                            <option value="video editing">video editing</option>
                        </select>
                    </div>
                    
                    <br>
                    <div class="col-md-12">
                    <div class="progress mb-3">
                  <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%; background-color:gray;">
                    <span class="sr-only">75% Complete (success)</span>
                  </div>
                </div>
                </div>
                    

                    <div class="flex-col-c p-t-15">
                        <button type="submit"><img id="img4" src="<?php echo base_url(); ?>assets/images/logos-34.png" style="width:10%; height:10%; margin-left:85%;" /></button>
                        <span class="txt1 p-b-17">

                        </span>

                        <a href="#" class="txt2">

                        </a>
                        <div class="bottom">
                            <img src="<?php echo base_url(); ?>assets/images/as-06.png" class="bottom credits" style="width:15%; height:15%;" />
                            <img id="" src="<?php echo base_url(); ?>assets/images/Relm-52.png" class="bottom redirect" style="width:25%; height:50%; margin-top:20px; margin-left:15px" class="wow" />
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