<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>


    <style>
        .container-login1 {
            background: linear-gradient(-260deg, #0472FE, #00F8E7, #4EC5EF, #B27CFA, #FF0006, #FF00BF, #A541BE, #3196B7, #9802A6, #F26C6D, #FCB9B3, #5AD843, #B7F004, #D6BB00);
            background-size: 400% 400%;
            animation: gradient 30s ease infinite;
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
            margin: 15px 50px;
        }
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
        var images6 = new Array(
            "<?php echo base_url(); ?>assets/images/logos-91.png",
            "<?php echo base_url(); ?>assets/images/logos-90.png",
            "<?php echo base_url(); ?>assets/images/logos-89.png",
            "<?php echo base_url(); ?>assets/images/logos-88.png");
        var countimages = 0;
        var c = 0;

        function startTime() {
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
                document.getElementById("img6").src = images6[countimages];
                document.getElementById("img7").src = images6[countimages];
                document.getElementById("img8").src = images6[countimages];
                document.getElementById("img9").src = images6[countimages];
                document.getElementById("img10").src = images6[countimages];
                document.getElementById("img11").src = images6[countimages];
                document.getElementById("img12").src = images6[countimages];
                document.getElementById("img13").src = images6[countimages];
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
                c++;
                if (c == 4) {
                    c = 0;
                }


            }
            countimages++;

            timerid = setTimeout("startTime()", 1000);
        }
    </script>
</head>

<body onload="startTime();">
    <div class="limiter hello4" id="img14">
        <div class="container-login100">
            <div class="wrap-login100 p-l-25 p-r-25 p-t-20 p-b-24">
                <div class="top" style="width:90%; display:flex; float:left;">
                    <a href="pageone"><img id="img3" src="<?php echo base_url(); ?>assets/images/logos-33.png" style="width:10%; height:100%; "></img></a>
                </div>
                <div class="top" style="width:10%; display:flex;">
                    <i class="fa fa-bars fa-2x"></i>
                </div>
                <form class="login100-form validate-form" method=post action="index.php/main/pagethree">

                    <span class="login100-form-title p-b-49">
                        <!-- <img src="<?php echo base_url(); ?>assets/images/logos-02.png" style="width:60%; height:60%; color:black;" /> -->
                        <img id="img1" src="<?php echo base_url(); ?>assets/images/logos-19.png" style="width:50%; height:50%; background-color:white; color:white;" />
                    </span>

                    <div class="items">
                        <select class="selectpicker col-md-12" title="Pets" style="width:90%; border:none; color:gray;">
                            <!-- <option>Pets</option> -->
                            <option>I have pets</option>
                            <option>I love pets</option>
                            <option>No pet, but I am open to living with one</option>
                            <option>No pets please</option>
                        </select>
                        <img id="img6" src="<?php echo base_url(); ?>assets/images/logos-88.png" style="width:10%; height:10%;"></img>
                    </div>
                    <div class="items">
                        <p>cleanliness</p>
                        <img id="img7" src="<?php echo base_url(); ?>assets/images/logos-88.png" style="width:10%; height:10%; " />
                    </div>
                    <div class="items">
                        <p>noise level</p>
                        <img id="img8" src="<?php echo base_url(); ?>assets/images/logos-88.png" style="width:10%; height:10%; " />
                    </div>
                    <div class="items">
                        <p>co-ed living</p>
                        <img id="img9" src="<?php echo base_url(); ?>assets/images/logos-88.png" style="width:10%; height:10%; " />
                    </div>
                    <div class="items">
                        <p>lifestyle</p>
                        <img id="img10" src="<?php echo base_url(); ?>assets/images/logos-88.png" style="width:10%; height:10%; " />
                    </div>
                    <div class="items">
                        <p>dietary habits</p>
                        <img id="img11" src="<?php echo base_url(); ?>assets/images/logos-88.png" style="width:10%; height:10%; " />
                    </div>
                    <div class="items">
                        <p>sleep schedule</p>
                        <img id="img12" src="<?php echo base_url(); ?>assets/images/logos-88.png" style="width:10%; height:10%; " />
                    </div>
                    <div class="items">
                        <p>frequency of guests</p>
                        <img id="img13" src="<?php echo base_url(); ?>assets/images/logos-88.png" style="width:10%; height:10%; " />
                    </div>








                    <div class="flex-col-c p-t-40">
                        <a href="pagethree"><img id="img4" src="<?php echo base_url(); ?>assets/images/logos-34.png" style="width:10%; height:10%; margin-left:85%;" /></a>
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