<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<style>
    .container-login100 {
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

    /* @media only screen and (max-width: 600px) {
        .wrap-login100 {
            height: 576px;
        }
    }

    @media only screen and (min-width: 600px) {

        .wrap-login100 {
            width: 90%;
            height: 650px;
        }

    }

    @media only screen and (min-width: 768px) {
        .wrap-login100 {
            width: 90%;
            height: 750px;
        }
    }

    @media only screen and (min-device-width : 300px) and (max-device-width : 340px) {
        .wrap-login100 {
            height: 450px;
            padding-top: 5px;
            padding-bottom: 0px;
        }

        .login100-form-title {
            padding-bottom: 5px;
        }

        .text-right {
            padding-top: 5px;
            padding-bottom: 5px;
        }

        .txt1 {
            padding-top: 5px;
            padding-bottom: 5px;
        }
    }

    @media only screen and (min-device-width : 350px) and (max-device-width : 370px) {
        .wrap-login100 {
            height: 520px;
            padding-top: 15px;
            padding-bottom: 15px;
        }

        .login100-form-title {
            padding-bottom: 15px;
        }

        .text-right {
            padding-top: 15px;
            padding-bottom: 15px;
        }

        .txt1 {
            padding-top: 15px;
            padding-bottom: 15px;
        }
    }

    @media only screen and (min-device-width : 370px) and (max-device-width : 380px) {
        .wrap-login100 {
            height: 500px;
            padding-top: 15px;
            padding-bottom: 15px;
        }

        .login100-form-title {
            padding-bottom: 15px;
        }

        .text-right {
            padding-top: 15px;
            padding-bottom: 15px;
        }

        .txt1 {
            padding-top: 15px;
            padding-bottom: 15px;
        }
    }

    @media only screen and (min-device-width : 410px) and (max-device-width : 420px) {
        .wrap-login100 {
            height: 570px;
            padding-top: 20px;
            padding-bottom: 20px;
        }

        .login100-form-title {
            padding-bottom: 20px;
        }

        .text-right {
            padding-top: 20px;
            padding-bottom: 20px;
        }

        .txt1 {
            padding-top: 30px;
            padding-bottom: 20px;
        }
    }

    @media only screen and (min-device-height : 810px) and (max-device-height : 830px) {
        .wrap-login100 {
            height: 670px;
            padding-top: 40px;
            padding-bottom: 40px;
        }

        .login100-form-title {
            padding-bottom: 40px;
        }

        .text-right {
            padding-top: 40px;
            padding-bottom: 40px;
        }

        .txt1 {
            padding-top: 40px;
            padding-bottom: 40px;
        }
    }

    @media only screen and (min-device-height : 1020px) and (max-device-height : 1030px) {
        .wrap-login100 {
            height: 900px;
            padding-top: 60px;
            padding-bottom: 60px;
        }

        .login100-form-title {
            padding-bottom: 60px;
        }

        .text-right {
            padding-top: 60px;
            padding-bottom: 60px;
        }

        .txt1 {
            padding-top: 60px;
            padding-bottom: 60px;
        }
    }

    @media only screen and (min-device-height : 1360px) and (max-device-height : 1370px) {
        .wrap-login100 {
            height: 1200px;
            padding-top: 100px;
            padding-bottom: 100px;
        }

        .login100-form-title {
            padding-bottom: 100px;
        }

        .text-right {
            padding-top: 100px;
            padding-bottom: 100px;
        }

        .txt1 {
            padding-top: 100px;
            padding-bottom: 100px;
        }
    } */

    /* 
    @media only screen and (max-width: 300px) {
        .wrap-login100 {
            height: 450px;
            padding-top: 5px;
            padding-bottom: 0px;
        }

        .login100-form-title {
            padding-bottom: 5px;
        }

        .text-right {
            padding-top: 5px;
            padding-bottom: 5px;
        }

        .txt1 {
            padding-top: 5px;
            padding-bottom: 5px;
        }
    } */

    /* @media only screen and (max-width: 350px) {
        .wrap-login100 {
            height: 520px;
            padding-top: 5px;
            padding-bottom: 0px;
        }

        .login100-form-title {
            padding-bottom: 5px;
        }

        .text-right {
            padding-top: 5px;
            padding-bottom: 5px;
        }

        .txt1 {
            padding-top: 5px;
            padding-bottom: 5px;
        }
    } */






    .input100 {
        padding: 22px 0px 0px 63px;
    }

    form.login100-form.validate-form {
        height: 600px !important;
    }
</style>

<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100 p-l-55 p-r-55 p-t-10 p-b-10">
                <form class="login100-form validate-form" method="post" action="login_validation" style="height:100%;">
                    <span class="login100-form-title p-b-49 hello">
                        <img src="<?php echo base_url(); ?>assets/images/logos-111.png" style="width:60%; color:black;" />

                    </span>

                    <div class="wrap-input100 validate-input m-b-23" style="background-color:#F8F8F8; border-radius:5px;" data-validate="Username is reauired">

                        <input class="input100" type="text" name="email" placeholder="Email">
                        <span class="focus-input100" data-symbol="&#xf206;"></span>
                    </div>
                    <br>

                    <div class="wrap-input100 validate-input" style="background-color:#F8F8F8; border-radius:5px;" data-validate="Password is required">

                        <input class="input100" type="password" name="password" placeholder="password">
                        <span class="focus-input100" data-symbol="&#xf190;"></span>
                    </div>
                    <br>






                    <?php
                    echo $this->session->flashdata("error");
                    ?>
                    <br>
                    <button class="login100-form-btn" style="background-color:#F8F8F8; border-radius:5px;">
                        <a style="color:black; text-transform: lowercase;">login</a>
                    </button>
                    <div class="text-right p-t-8 p-b-20">
                        <a href="#">
                            password reset?
                        </a>
                    </div>



                    <div class="txt1 text-center p-t-10 p-b-10">
                        <span>
                            Sign in with
                        </span>
                    </div>

                    <div class="flex-c-m p-b-5">
                        <a href="<?php echo $login_url; ?>" class="">
                            <i class="fa fa-google-plus fa-2x"></i>
                        </a>
                    </div>
                    <br>

                    <div class="container" style="
  padding: 10px;
  display: flex;
  justify-content: space-between;
  align-items: center;">
                        <p>terms of services<p>.</p>
                        </p>
                        <p>privacy policy<p style="padding-bottom:5px;">.</p>
                        </p>
                        <p>and help.</p>
                    </div>

                </form>
            </div>
        </div>
    </div>


    <div id="dropDownSelect1"></div>



</body>

</html>