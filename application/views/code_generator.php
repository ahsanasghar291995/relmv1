<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        .container-login10 {
            background: linear-gradient(90deg, #ee7752, #e73c7e, #23a6d5, #23d5ab, #99c1db, #9898b0, #e1d4de, #7e7250, #808284, #efebee);
            background-size: 400% 400%;
            animation: gradient 12s ease infinite;
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

        .input100 {
            padding: 22px 0px 0px 63px;
        }

        .wrap-login100 {
            padding-top: 5%;
        }

        form.login100-form.validate-form {
            height: 605px !important;
        }


        .hello {
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
            margin: 10px 10px;
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
    <script language="javascript" type="text/javascript">
        var timerid = 0;
        var id = 1;
        var images = new Array(
            //"<?php echo base_url(); ?>assets/images/logos-01-pageone.png",
            //"<?php echo base_url(); ?>assets/images/logos-45-pageone.png",
            "<?php echo base_url(); ?>assets/images/logos-47-pageone.png",
            "<?php echo base_url(); ?>assets/images/logos-46-pageone.png");
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
                //document.getElementById("img3").src = images3[countimages];
                //document.getElementById("img4").src = images4[countimages];
                //document.getElementById("img5").src = images5[countimages];
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
</head>


<body class="container-login10">

    <div class="" id="img14">
        <div class="container-login100">
            <div class="wrap-login100 p-l-55 p-r-55">
                <form class="login100-form validate-form" method="post" action="check_code">
                    <span class="login100-form-title p-b-50">
                        <img id="" stylw="p-l-20 p-t-10" src="<?php echo base_url(); ?>assets/images/Relm-53.png" style="width:20%;" />
                    </span>
                    <br><br>
                    <div class="col-md-12" style="text-align:center;">
                        <p style="color:gray;">A code is sent to your email. Please check your mail, type the code here and press submit.</p>
                    </div>

                    <br>
                    <br>
                    <div class="wrap-input100 validate-input" style="background-color:#F8F8F8; border-radius:5px;" data-validate="password is required">

                        <input class="input100" type="text" name="code" placeholder="enter code here" required>
                        <span class="focus-input100" data-symbol="&#xf190;"></span>
                    </div>


                    <?php
                    echo $this->session->flashdata("error");
                    ?>
                    <br>
                    <br>
                    <button class="login100-form-btn" style="background-color:#F8F8F8; border-radius:5px;">
                        <a href="" style="color:black; text-transform: lowercase;">submit</a>
                    </button>
                    <div class="text-right p-t-8 p-b-31">
                        <p>didn't get the code?</p>
                        <a href="code_generator">
                            press here to resend
                        </a>
                    </div>




                    <div class="txt1 text-center p-t-20 p-b-50">

                    </div>



                    <div class="col-md-14" style="
  padding: 20px;
  display: flex;
  justify-content: space-between;
  align-items: center;">

                        <p>terms of services
                        <p style="padding-bottom:5px;">.</p>
                        </p>
                        <p>privacy policy
                        <p style="padding-bottom:5px;">.</p>
                        </p>
                        <p>help</p>

                    </div>
                </form>
                <br>
                <br>
                <br>
            </div>
        </div>
    </div>
    <div id="dropDownSelect1"></div>
    </form>



</body>

</html>