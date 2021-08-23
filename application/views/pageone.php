<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <style>
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
        //"<?php echo base_url(); ?>assets/images/logos-47-pageone.png",
        "<?php echo base_url(); ?>assets/images/logos-46-pageone.png");
    var images2 = new Array(
        //"<?php echo base_url(); ?>assets/images/logos-3111.png",
        //"<?php echo base_url(); ?>assets/images/logos-3222.png",
        //"<?php echo base_url(); ?>assets/images/logos-30.png",
        "<?php echo base_url(); ?>assets/images/logos-29.png");
    var images3 = new Array(
        //"<?php echo base_url(); ?>assets/images/arrow-33.png",
        //"<?php echo base_url(); ?>assets/images/arrow-37.png",
        //"<?php echo base_url(); ?>assets/images/logos-35.png",
        "<?php echo base_url(); ?>assets/images/logos-33.png");
    var images4 = new Array(
        //"<?php echo base_url(); ?>assets/images/arrow-34.png",
        //"<?php echo base_url(); ?>assets/images/arrow-38.png",
        //"<?php echo base_url(); ?>assets/images/logos-36.png",
        "<?php echo base_url(); ?>assets/images/logos-34.png");
    var images5 = new Array(
        //"<?php echo base_url(); ?>assets/images/logos-4444.png",
        //"<?php echo base_url(); ?>assets/images/logos-4111.png",
        //"<?php echo base_url(); ?>assets/images/logos-42.png",
        "<?php echo base_url(); ?>assets/images/logos-41.png");
    // var images6 = new Array(
    //     "<?php echo base_url(); ?>assets/images/logos-91.png",
    //     "<?php echo base_url(); ?>assets/images/logos-90.png",
    //     "<?php echo base_url(); ?>assets/images/logos-89.png",
    //     "<?php echo base_url(); ?>assets/images/logos-88.png");
    var images7 = new Array(
        //"<?php echo base_url(); ?>assets/images/logos-101.jpg",
        //"<?php echo base_url(); ?>assets/images/logos-102.jpg",
        //"<?php echo base_url(); ?>assets/images/logos-103.jpg",
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
        <div class=" container-login100">
            <div class="wrap-login100 p-l-55 p-r-55" style="border-radius:50px;">
                <form class="login100-form validate-form" method="post" action="login_validation">
                    <span class="login100-form-title p-b-49">
                        <img id="" class="p-t-20" src="<?php echo base_url(); ?>assets/images/Relm-52.png"
                            style="width:50%;" />
                        <p class="" style="font-size:10px; color:red; padding-left:20%;">platform beta</p>
                    </span>

                    <div class="wrap-input100  m-b-23" style="background-color:#F8F8F8; border-radius:5px;">

                        <input class="input100" type="text" name="email" placeholder="email">
                        <span class="focus-input100" data-symbol="&#xf206;"></span>
                    </div>
                    <br>

                    <div class="wrap-input100" style="background-color:#F8F8F8; border-radius:5px;">

                        <input class="input100" type="password" name="password" placeholder="password">
                        <span class="focus-input100" data-symbol="&#xf190;"></span>
                    </div>
                    <br>
                    <p style="color:gray;">
                        <?php
                    echo $this->session->flashdata("error");
                    ?>
                    </p>
                    <br>
                    <div class="col-md-12" style="display:flex; justify-content:space-between;">
                        <button type="submit" class="login100-form-btn"
                            style="background-color:#F8F8F8; border-radius:5px; width:45%;">
                            <a style="color:gray; text-transform: lowercase; font-size:18px;">login</a>
                        </button>

                        <a href="pagetwo_replace" class="login100-form-btn"
                            style="color:gray; text-transform: lowercase; background-color:#F8F8F8; border-radius:5px; width:45%;">sign
                            up</a>

                    </div>
                    <div class="text-right p-t-8 p-b-31">
                        <a href="password_reset">
                            password reset?
                        </a>
                    </div>



                    <div class="txt1 text-center p-t-10 p-b-25">
                        <span>
                            sign in with
                        </span>
                    </div>

                    <div class="flex-c-m p-b-5" style="padding-bottom:5%;">
                        <a href="<?php echo $login_url; ?>">
                            <i class="fa fa-google-plus fa-2x"></i>
                        </a>
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



</body>

</html>