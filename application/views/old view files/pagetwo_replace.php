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

        .bootstrap-select:not([class*=col-]):not([class*=form-control]):not(.input-group-btn) {
            width: 30%;
        }

        input,
        select,
        textarea {
            color: gray;
        }

        input {
            width: 90%;
            background-image: linear-gradient(gray, gray);
            background-position: bottom 5px center;
            background-size: calc(100% - 10px) 2px;
            background-repeat: no-repeat;
            background-color: #fcfcfc;
            padding: 10px;
        }

        #fname {

            width: 54%;
            background-image: linear-gradient(gray, gray);
            background-position: bottom 5px center;
            background-size: calc(100% - 10px) 2px;
            background-repeat: no-repeat;
            background-color: #fcfcfc;
            padding: 10px;

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

</head>

<body onload="startTime();">

    <div class="limiter hello4" id="img14">

        <div class="container-login100">
            <div class="wrap-login100 p-l-25 p-r-25 p-t-20 p-b-24">
                <div class="top">
                    <a href="pageone"><img id="img3" src="<?php echo base_url(); ?>assets/images/logos-33.png" style="width:10%; height:100%; "></a></img>
                    <i class="fa fa-bars fa-2x" style="float:right;"></i>
                </div>
                <form class="login100-form validate-form" method="post" action="update_personal_info">

                    <span class="login100-form-title p-b-40">
                        <img id="img1" src="<?php echo base_url(); ?>assets/images/logos-19.png" style="width:50%; height:50%; background-color:white; color:white;" />
                    </span>

                    <div class="col-md-12">
                        <label for="fname"></label>
                        <input type="text" id="fname" name="name" placeholder="name">
                        <select class="selectpicker" title="sex" name="sex" size="1">
                            <option value="male">male</option>
                            <option value="female">female</option>
                        </select>

                    </div>
                    <br>
                    <div class="col-md-12">
                        <label for="birthdate" style="color:gray; font-size:16px;">birthdate</label>
                        <!-- <input placeholder="birthdate" class="textbox-n" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" name="birthdate" id="birthdate" style="color:gray;" />
                        <u></u>
                        </input> -->
                    </div>
                    <div class="col-md-12">
                        <label for="email"></label>
                        <input type="email" id="email" name="email" placeholder="email">
                    </div>
                    <br>
                    <div class="col-md-12">
                        <label for="desired_city"></label>
                        <input type="text" id="desired_city" name="desired_city" placeholder="desired city">
                    </div>
                    <br>
                    <div class="col-md-12">
                        <label for="desired_movein_date"></label>
                        <input type="date" id="desired_movein_date" name="desired_movein_date" placeholder="desired move-in date">
                    </div>
                    <br>
                    <div class="col-md-12">
                        <label for="five_self_pet_photos"></label>
                        <!-- <input type="text" id="five_self_pet_photos" name="five_self_pet_photos" placeholder="five self/pet photos"> -->
                        <p style="padding-left:13px;">five self/pet photos</p>
                        <div class="col-md-12">
                            <img src="<?php echo base_url(); ?>/assets/images/dog1.jpg" style="width:16%; height:60px;" />
                            <img src="<?php echo base_url(); ?>/assets/images/dog2.jpeg" style="width:16%; height:60px;" />
                            <img src="<?php echo base_url(); ?>/assets/images/dog3.jpg" style="width:16%; height:60px;" />
                            <img src="<?php echo base_url(); ?>/assets/images/girl3.jpg" style="width:16%; height:60px;" />
                            <img src="<?php echo base_url(); ?>/assets/images/addphoto.png" style="width:16%; height:60px;" />
                        </div>
                    </div>
                    <br>
                    <div class="col-md-12">

                        <select class="selectpicker col-md-11" title="relationship status" name="relationship_status" id="relationship_status">
                            <option value="single">single</option>
                            <option value="married">married</option>
                            <option value="in a relationship">in a relationship</option>
                        </select>
                    </div>
                    <br>
                    <div class="col-md-12">
                        <label for="fluent_languages_spoken"></label>
                        <input type="text" id="fluent_languages_spoken" name="fluent_languages_spoken" placeholder="fluent languages spoken">
                    </div>
                    <div class="col-md-12">
                        <select class="selectpicker col-md-11" title="languages" name="languages" id="languages" multiple data-live-search="true">

                            <option value="single">Urdu</option>
                            <option value="married">English</option>
                            <option value="in a relationship">Germen</option>
                        </select>
                    </div>
                    <br>

                    <div class="flex-col-c p-t-30">
                        <button type="submit"><img id="img4" src="<?php echo base_url(); ?>assets/images/logos-34.png" style="width:10%; height:10%; margin-left:85%;" /></button>
                        <span class="txt1 p-b-17">

                        </span>

                        <a href="#" class="txt2">

                        </a>
                        <div class="bottom">
                            <img src="<?php echo base_url(); ?>assets/images/as-06.png" class="bottom" style="width:15%; height:15%;" />
                            <img id="img2" src="<?php echo base_url(); ?>assets/images/logos-29.png" class="bottom" style="width:50%; height:50%; margin-top:20px;" class="wow" />
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