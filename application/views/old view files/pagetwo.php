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

        .bootstrap-select:not([class*=col-]):not([class*=form-control]):not(.input-group-btn) {
            width: 100%;
        }

        /* .toplogoform {
            padding-top: 5%;
        }

        .bottomlogoform {
            padding-top: 35%;
        } */
    </style>
    <script language="javascript" type="text/javascript">
        var timerid = 0;
        var id = 1;
        var images = new Array(
            "<?php echo base_url(); ?>assets/images/logos-45.png",
            "<?php echo base_url(); ?>assets/images/logos1-01.png",
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

                window.location.href = "<?php echo base_url(); ?>index.php/main/findpageseven/2";

            });
            $('.credits').click(function() {

                window.location.href = "<?php echo base_url(); ?>index.php/main/credits";

            });
            $('.groups').click(function() {

                window.location.href = "<?php echo base_url(); ?>index.php/main/groups";

            });
            $('.logo33').click(function() {

                window.location.href = "<?php echo base_url(); ?>index.php/main/pageone";

            });
            let count = 0;
            $("select.selectpicker").change(function() {
                var selectedCountry = $(this).children("option:selected").length;
                count = selectedCountry + 1;
                alert("You have selected the country - " + count);
            });
        });
    </script>
</head>

<body onload="startTime();">

    <div class="limiter hello4" id="img14">

        <div class="container-login100">
            <div class="wrap-login100 p-l-25 p-r-25 p-t-5 p-b-1 toplogoform">
                <div class="top">
                    <i class="logo33"><img id="img3" src="<?php echo base_url(); ?>assets/images/logos-33.png" style="width:10%; height:100%; "></i></img>
                    <button type="button" class="fa fa-bars " data-toggle="dropdown" aria-expanded="false" style="color:gray;">
                    </button>
                    <ul class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; transform: translate3d(0px, 38px, 0px);">
                        <li><a class="dropdown-item" href="#" style="color:gray;">My profile</a></li>
                        <li><a class="dropdown-item" href="matching" style="color:gray;">Matching</a></li>
                        <li><a class="dropdown-item" href="#" style="color:gray;">Feedback</a></li>
                        <li><a class="dropdown-item" href="#" style="color:gray;">Inbox</a></li>
                        <li id="ie2s0aa61" data-direction="ltr" data-listposition="center" data-data-id="bmi24vh" data-state="menu false  link" data-index="1" class="_3vxeZ _2TFvc dropdown-item" data-original-gap-between-text-and-btn="10" aria-hidden="false" style="width: 100%; height: 30px; position: relative; box-sizing: border-box; overflow: visible; visibility: inherit;"><a data-testid="linkElement" href="https://9ca99264-9915-4d10-87d5-0f658068b650.filesusr.com/ugd/62fec2_da404d68013847679a6edc22f0b18a44.pdf" target="_blank" class="_25Cim" aria-haspopup="false">
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
                <form class="login100-form validate-form" method="post" action="update_records_pagetwo">

                    <span class="login100-form-title p-b-1">
                        <img id="img1" src="<?php echo base_url(); ?>assets/images/logos-19.png" style="width:70%; height:50%; background-color:white; color:white;" />
                    </span>
                    <div class="items">
                        <select class="selectpicker" name="pets" title="pets" style="width:100%; border:gray; color:gray;">
                            <!-- <option value="">Pets</option> -->
                            <option value="I have pets" style="color:gray;">I have pets</option>
                            <option value="I love pets">I love pets</option>
                            <option value="No pet, open to living with one">No pet, open to living with one</option>
                            <option value="No pets please">No pets please</option>
                        </select>
                    </div>
                    <div class="items">
                        <select class="selectpicker" name="cleanliness" title="clean with 24 hours" style="width:100%; border:none; color:gray;">
                            <!-- <option value="">Pets</option> -->
                            <option value="squeaky clean">squeaky clean</option>
                            <option value="generally tidy">generally tidy</option>
                            <option value="messes are cleaned within 24 hours">messes are cleaned within 24 hours</option>
                            <option value="i'm messy and i know it">i'm messy and i know it</option>
                        </select>
                    </div>
                    <div class="items">
                        <select class="selectpicker " name="noise_level" title="noise level" style="width:100%; border:none; color:gray;">
                            <!-- <option value="">Pets</option> -->
                            <option value="quiet as a mouse">quiet as a mouse</option>
                            <option value="bit of noise, however i'm conscientious">bit of noise, however i'm conscientious</option>
                            <option value="Music or tv always on">Music or tv always on</option>
                            <option value="Best if loud by nature">Best if loud by nature</option>
                        </select>
                    </div>
                    <div class="items">
                        <select class="selectpicker " name="co-ed_living" title="co-ed living" style="width:100%; border:none; color:gray;">
                            <!-- <option value="">Pets</option> -->
                            <option value="no way, same sex please" style="color:gray;">no way, same sex please</option>
                            <option value="only if the bathroom is private">only if the bathroom is private</option>
                            <option value="open to the idea">open to the idea</option>
                            <option value="no preference">no preference</option>
                        </select>
                    </div>

                    <div class="items">
                        <select class="selectpicker " name="life_style" title="lifestyle" style="width:100%; border:none; color:gray;">
                            <!-- <option value="">Pets</option> -->
                            <option value="hardcore quarantine">hardcore quarantine</option>
                            <option value="work from home, but get out often">work from home, but get out often</option>
                            <option value="many weekend trips and outdoorsy">many weekend trips and outdoorsy</option>
                            <option value="home is a crash pad">home is a crash pad</option>
                        </select>
                    </div>
                    <div class="items">
                        <select class="selectpicker " name="dietary_habits" title="dietary habits" style="width:100%; border:none; color:gray;">
                            <!-- <option value="">Pets</option> -->
                            <option value="vegan kitchen">vegan kitchen</option>
                            <option value="vegetarian kitchen">vegetarian kitchen</option>
                            <option value="meat or fish occasionally">meat or fish occasionally</option>
                            <option value="meat or fish often">meat or fish often</option>
                        </select>
                    </div>
                    <div class="items">
                        <select class="selectpicker " name="sleep_schedule" title="sleep schedule" style="width:100%; border:none; color:gray;">
                            <!-- <option value="">Pets</option> -->
                            <option value="Early bird">Early bird</option>
                            <option value="9-5 life">9-5 life</option>
                            <option value="no defined pattern">no defined pattern</option>
                            <option value="Night owl">Night owl</option>
                        </select>
                    </div>
                    <div class="items">
                        <select class="selectpicker " name="frequency_of_guests" title="frequency of guests" style="width:100%; border:none; color:gray;">
                            <!-- <option value="">Pets</option> -->
                            <option value="not often">not often</option>
                            <option value="1-2 times a week">1-2 times a week</option>
                            <option value="3-5 times a week">3-5 times a week</option>
                            <option value="nearly everyday">nearly everyday</option>
                        </select>
                    </div>


                    <div class="flex-col-c p-t-1 bottomlogoform">
                        <button type="submit"><img id="img4" src="<?php echo base_url(); ?>assets/images/logos-34.png" style="width:10%; height:10%; margin-left:85%;" /></button>
                        <span class="txt1 p-b-17">

                        </span>

                        <a href="#" class="txt2">

                        </a>
                        <div class="bottom">
                            <img src="<?php echo base_url(); ?>assets/images/as-06.png" class="bottom credits" style="width:15%; height:15%;" />
                            <img id="img2" src="<?php echo base_url(); ?>assets/images/logos-29.png" class="bottom redirect" style="width:50%; height:50%; margin-top:20px; margin-left:15px;" class="wow" />
                            <img id="img5" src="<?php echo base_url(); ?>assets/images/logos-41.png" class="bottom groups" style="width:15%; height:15%; margin-top:20px;" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div id="dropDownSelect1"></div>



</body>

</html>