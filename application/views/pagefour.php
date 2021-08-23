<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>


    <style>
        .container-login {
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
            color: gray;
            margin: 15px 5px;
        }
    </style>
    <script language="javascript" type="text/javascript">
        var count = 0;
        var count2 = 0;
        var count3 = 0;
        var count4 = 0;
        var count5 = 0;
        var count6 = 0;
        var count7 = 0;
        var count8 = 0;
        var count9 = 0;
        var count10 = 0;


        function myfunction1233() {
            var ls = `<div style="text-align:right; width:100%;">
                            <p onclick="myfunction123()">lone wolf</p>
                        </div>
                        <div style="width:20%; color:white;">i</div>
                        <div class="col-md-6">
                            <p onclick="myfunction1234()"> social butterfly</p>
                        </div>`;
            document.getElementById("ls").innerHTML = ls;
        }

        function myfunction123() {
            var ls = `<p style="margin-left:35%;" onclick="myfunction1233()">lone wolf </p>`;
            document.getElementById("ls").innerHTML = ls;
        }

        function myfunction1234() {
            var ls = `<p style="margin-left:35%;" onclick="myfunction1233()">social butterfly </p>`;
            document.getElementById("ls").innerHTML = ls;
        }

        function myfunction22222() {
            var pg = `<div style="text-align:right; width:100%;">
                            <p onclick="myfunction222()">planner</p>
                        </div>
                        <div style="width:20%; color:white;">i</div>
                        <div class="col-md-6">
                            <p onclick="myfunction2222()">go with the flow</p>
                        </div>`;
            document.getElementById("pg").innerHTML = pg;
        }

        function myfunction222() {
            var pg = `<p style="margin-left:35%;" onclick="myfunction22222()">planner </p>`;
            document.getElementById("pg").innerHTML = pg;
        }

        function myfunction2222() {
            var pg = `<p style="margin-left:35%;" onclick="myfunction22222()">go with the flow </p>`;
            document.getElementById("pg").innerHTML = pg;
        }

        function myfunction33333() {
            var ne = `<div style="text-align:right; width:100%;">
                            <p onclick="myfunction333()">night owl</p>
                        </div>
                        <div style="width:20%; color:white;">i</div>
                        <div class="col-md-6">
                            <p onclick="myfunction3333()">early bird</p>
                        </div>`;
            document.getElementById("ne").innerHTML = ne;
        }

        function myfunction333() {

            var ne = `<p style="margin-left:35%;" onclick="myfunction33333()">night owl </p>`;
            document.getElementById("ne").innerHTML = ne;
        }

        function myfunction3333() {

            var ne = `<p style="margin-left:35%;" onclick="myfunction33333()">early bird </p>`;
            document.getElementById("ne").innerHTML = ne;
        }

        function myfunction44444() {
            var cd = `<div style="text-align:right; width:100%;">
                            <p onclick="myfunction444()">cook</p>
                        </div>
                        <div style="width:20%; color:white;">i</div>
                        <div class="col-md-6">
                            <p onclick="myfunction4444()">delivery</p>
                        </div>`;
            document.getElementById("cd").innerHTML = cd;
        }

        function myfunction444() {
            var cd = `<p style="margin-left:35%;" onclick="myfunction44444()">cook </p>`;
            document.getElementById("cd").innerHTML = cd;
        }

        function myfunction4444() {
            var cd = `<p style="margin-left:35%;" onclick="myfunction44444()">delivery </p>`;
            document.getElementById("cd").innerHTML = cd;
        }

        function myfunction55555() {
            var ff = `<div style="text-align:right; width:100%;">
                            <p onclick="myfunction555()">four-hour drive</p>
                        </div>
                        <div style="width:20%; color:white;">i</div>
                        <div class="col-md-6">
                            <p onclick="myfunction5555()">fly</p>
                        </div>`;
            document.getElementById("ff").innerHTML = ff;
        }

        function myfunction555() {
            var ff = `<p style="margin-left:35%;" onclick="myfunction55555()">four-hour drive </p>`;
            document.getElementById("ff").innerHTML = ff;
        }

        function myfunction5555() {
            var ff = `<p style="margin-left:35%;" onclick="myfunction55555()">fly </p>`;
            document.getElementById("ff").innerHTML = ff;
        }

        function myfunction66666() {
            var ss = `<div style="text-align:right; width:100%;">
                            <p onclick="myfunction666()">split decision</p>
                        </div>
                        <div style="width:20%; color:white;">i</div>
                        <div class="col-md-6">
                            <p onclick="myfunction6666()">sleep on it</p>
                        </div>`;
            document.getElementById("ss").innerHTML = ss;
        }

        function myfunction666() {
            var ss = `<p style="margin-left:35%;" onclick="myfunction66666()">split decision </p>`;
            document.getElementById("ss").innerHTML = ss;
        }

        function myfunction6666() {
            var ss = `<p style="margin-left:35%;" onclick="myfunction66666()">sleep on it </p>`;
            document.getElementById("ss").innerHTML = ss;
        }

        function myfunction77777() {
            var sp = `<div style="text-align:right; width:100%;">
                            <p onclick="myfunction777()">spontaneous</p>
                        </div>
                        <div style="width:20%; color:white;">i</div>
                        <div class="col-md-6">
                            <p onclick="myfunction7777()">planner</p>
                        </div>`;
            document.getElementById("sp").innerHTML = sp;
        }

        function myfunction777() {
            var sp = `<p style="margin-left:35%;" onclick="myfunction77777()">spontaneous </p>`;
            document.getElementById("sp").innerHTML = sp;
        }

        function myfunction7777() {
            var sp = `<p style="margin-left:35%;" onclick="myfunction77777()">planner </p>`;
            document.getElementById("sp").innerHTML = sp;
        }

        function myfunction88888() {
            var cb = `<div style="text-align:right; width:100%;">
                            <p onclick="myfunction888()">creative</p>
                        </div>
                        <div style="width:20%; color:white;">i</div>
                        <div class="col-md-6">
                            <p onclick="myfunction8888()">business</p>
                        </div>`;
            document.getElementById("cb").innerHTML = cb;
        }

        function myfunction888() {
            var cb = `<p style="margin-left:35%;" onclick="myfunction88888()">creative </p>`;
            document.getElementById("cb").innerHTML = cb;
        }

        function myfunction8888() {
            var cb = `<p style="margin-left:35%;" onclick="myfunction88888()">business </p>`;
            document.getElementById("cb").innerHTML = cb;
        }

        function myfunction99999() {
            var ra = `<div style="text-align:right; width:100%;">
                            <p onclick="myfunction999()">read</p>
                        </div>
                        <div style="width:20%; color:white;">i</div>
                        <div class="col-md-6">
                            <p onclick="myfunction9999()">audio book</p>
                        </div>`;
            document.getElementById("ra").innerHTML = ra;
        }

        function myfunction999() {
            var ra = `<p style="margin-left:35%;" onclick="myfunction99999()">read </p>`;
            document.getElementById("ra").innerHTML = ra;
        }

        function myfunction9999() {
            var ra = `<p style="margin-left:35%;" onclick="myfunction99999()">audio book </p>`;
            document.getElementById("ra").innerHTML = ra;
        }

        function myfunction1010101010() {
            var sn = `<div style="text-align:right; width:100%;">
                            <p onclick="myfunction101010()">student</p>
                        </div>
                        <div style="width:20%; color:white;">i</div>
                        <div class="col-md-6">
                            <p onclick="myfunction10101010()">non-student</p>
                        </div>`;
            document.getElementById("sn").innerHTML = sn;
        }

        function myfunction101010() {
            var sn = `<p style="margin-left:35%;" onclick="myfunction1010101010()">student </p>`;
            document.getElementById("sn").innerHTML = sn;
        }

        function myfunction10101010() {
            var sn = `<p style="margin-left:35%;" onclick="myfunction1010101010()">non-student </p>`;
            document.getElementById("sn").innerHTML = sn;
        }
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
                //document.getElementById("img1").src = images[countimages];
                //document.getElementById("img2").src = images2[countimages];
                document.getElementById("img3").src = images3[countimages];
                document.getElementById("img4").src = images4[countimages];
                document.getElementById("img5").src = images5[countimages];
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

                window.location.href = "<?php echo base_url(); ?>index.php/main/findpageseven/4";

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

    <div class="limiter hello4" id="img14">
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
                <form class="login100-form validate-form">

                    <span class="login100-form-title p-b-49">
                        <img id="" src="<?php echo base_url(); ?>assets/images/Relm-53.png" style="width:20%; height:50%; background-color:white; color:white;" />
                    </span>
                    <div class="items" id="ls">
                        <div style="text-align:right; width:100%;">
                            <p onclick="myfunction123()">lone wolf</p>
                        </div>
                        <div style="width:20%; color:white;">i</div>
                        <div class="col-md-6">
                            <p onclick="myfunction1234()"> social butterfly</p>
                        </div>
                    </div>
                    <div class="items" id="pg">
                        <div style="text-align:right; width:100%;">
                            <p onclick="myfunction222()">planner</p>
                        </div>
                        <div style="width:20%; color:white;">i</div>
                        <div class="col-md-6" style="text-align:left;">
                            <p onclick="myfunction2222()">go with the flow</p>
                        </div>
                    </div>
                    <div class="items" id="ne">
                        <div style="text-align:right; width:100%;">
                            <p onclick="myfunction333()">night owl</p>
                        </div>
                        <div style="width:20%; color:white;">i</div>
                        <div class="col-md-6" style="text-align:left;">
                            <p onclick="myfunction3333()">early bird</p>
                        </div>
                    </div>
                    <div class="items" id="cd">
                        <div style="text-align:right; width:100%;">
                            <p onclick="myfunction444()">cook</p>
                        </div>
                        <div style="width:20%; color:white;">i</div>
                        <div class="col-md-6" style="text-align:left;">
                            <p onclick="myfunction4444()">delivery</p>
                        </div>
                    </div>
                    <div class="items" id="ff">
                        <div style="text-align:right; width:100%;">
                            <p onclick="myfunction555()">four-hour drive</p>
                        </div>
                        <div style="width:20%; color:white;">i</div>
                        <div class="col-md-6" style="text-align:left;">
                            <p onclick="myfunction5555()">fly</p>
                        </div>
                    </div>
                    <div class="items" id="ss">
                        <div style="text-align:right; width:100%;">
                            <p onclick="myfunction666()">split decision</p>
                        </div>
                        <div style="width:20%; color:white;">i</div>
                        <div class="col-md-6" style="text-align:left;">
                            <p onclick="myfunction6666()">sleep on it</p>
                        </div>
                    </div>
                    <div class="items" id="sp">
                        <div style="text-align:right; width:100%;">
                            <p onclick="myfunction777()">spontaneous</p>
                        </div>
                        <div style="width:20%; color:white;">i</div>
                        <div class="col-md-6" style="text-align:left;">
                            <p onclick="myfunction7777()">planner</p>
                        </div>
                    </div>
                    <div class="items" id="cb">
                        <div style="text-align:right; width:100%;">
                            <p onclick="myfunction888()">creative</p>
                        </div>
                        <div style="width:20%; color:white;">i</div>
                        <div class="col-md-6" style="text-align:left;">
                            <p onclick="myfunction8888()">business</p>
                        </div>
                    </div>
                    <div class="items" id="ra">
                        <div style="text-align:right; width:100%;">
                            <p onclick="myfunction999()">read</p>
                        </div>
                        <div style="width:20%; color:white;">i</div>
                        <div class="col-md-6" style="text-align:left;">
                            <p onclick="myfunction9999()">audio book</p>
                        </div>
                    </div>
                    <div class="items" id="sn">
                        <div style="text-align:right; width:100%;">
                            <p onclick="myfunction101010()">student</p>
                        </div>
                        <div style="width:20%; color:white;">i</div>
                        <div class="col-md-6" style="text-align:left;">
                            <p onclick="myfunction10101010()">non-student</p>
                        </div>
                    </div>
                    <br>
                    <div class="col-md-12">
                    <div class="progress mb-3">
                  <div class="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%; background-color:gray;">
                    <span class="sr-only">25% Complete (success)</span>
                  </div>
                </div>
                </div>

                    <div class="flex-col-c p-t-30">
                        <a href="matching"><img id="img4" src="<?php echo base_url(); ?>assets/images/logos-34.png" style="width:10%; height:10%; margin-left:85%;" /></a>
                        <span class="txt1 p-b-17">

                        </span>

                        <a href="#" class="txt2">

                        </a>
                        <div class="bottom">
                            <img src="<?php echo base_url(); ?>assets/images/as-06.png" class="bottom credits" style="width:15%; height:15%;" />
                            <img id="" src="<?php echo base_url(); ?>assets/images/Relm-52.png" class="bottom redirect" style="width:25%; height:50%; margin-top:20px;" class="wow" />
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