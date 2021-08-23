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


        function myfunction() {
            if (count == 0) {
                count++;
                console.log(count);
                var ls = `<p style="margin-left:35%;">social butterfly </p>`;
                document.getElementById("ls").innerHTML = ls;
                //document.getElementById("ls").style = "text-align:center;";

            } else if (count == 1) {
                count--;
                console.log(count);
                var ls = `<div style="text-align:right; width:90%;">
                            <p>lone wolf</p>
                        </div>
                        <div style="width:20%; color:white;">i</div>
                        <div class="col-md-6">
                            <p> social butterfly</p>
                        </div>`;
                document.getElementById("ls").innerHTML = ls;
                //document.getElementById("ls").style = "margin-left:65px;";

            }
        }

        function myfunction2() {
            if (count2 == 0) {
                count2++;
                console.log(count2);
                var pg = `<p style="margin-left:35%;">go with the flow </p>`;
                document.getElementById("pg").innerHTML = pg;
                //document.getElementById("pg").style = "margin-left:35%;";

            } else if (count2 == 1) {
                count2--;
                console.log(count2);
                var pg = `<div style="text-align:right; width:90%;">
                            <p>planner</p>
                        </div>
                        <div style="width:20%; color:white;">i</div>
                        <div class="col-md-6">
                            <p>go with the flow</p>
                        </div>`;
                document.getElementById("pg").innerHTML = pg;
                //document.getElementById("pg").style = "margin-left:65px;";

            }
        }

        function myfunction3() {
            if (count3 == 0) {
                count3++;
                console.log(count3);
                var ne = `<p style="margin-left:35%;">early bird </p>`;
                document.getElementById("ne").innerHTML = ne;
                //document.getElementById("ne").style = "margin-left:35%;";

            } else if (count3 == 1) {
                count3--;
                console.log(count3);
                var ne = `<div style="text-align:right; width:90%;">
                            <p>night owl</p>
                        </div>
                        <div style="width:20%; color:white;">i</div>
                        <div class="col-md-6">
                            <p>early bird</p>
                        </div>`;
                document.getElementById("ne").innerHTML = ne;
                //document.getElementById("ne").style = "margin-left:65px;";

            }
        }

        function myfunction4() {
            if (count4 == 0) {
                count4++;
                console.log(count4);
                var cd = `<p style="margin-left:35%;">delivery</p>`;
                document.getElementById("cd").innerHTML = cd;
                //document.getElementById("cd").style = "margin-left:35%;";

            } else if (count4 == 1) {
                count4--;
                console.log(count4);
                var cd = `<div style="text-align:right; width:80%;">
                            <p>cook</p>
                        </div>
                        <div style="width:20%; color:white;">i</div>
                        <div class="col-md-6">
                            <p>delivery</p>
                        </div>`;
                document.getElementById("cd").innerHTML = cd;
                //document.getElementById("cd").style = "margin-left:65px;";

            }
        }

        function myfunction5() {
            if (count5 == 0) {
                count5++;
                console.log(count5);
                var ff = `<p style="margin-left:35%;">fly</p>`;
                document.getElementById("ff").innerHTML = ff;
                //document.getElementById("ff").style = "margin-left:35%;";

            } else if (count5 == 1) {
                count5--;
                console.log(count5);
                var ff = `<div style="text-align:right; width:80%;">
                            <p>four-hour drive</p>
                        </div>
                        <div style="width:20%; color:white;">i</div>
                        <div class="col-md-6">
                            <p>fly</p>
                        </div>`;
                document.getElementById("ff").innerHTML = ff;
                //document.getElementById("ff").style = "margin-left:65px;";

            }
        }

        function myfunction6() {
            if (count6 == 0) {
                count6++;
                console.log(count6);
                var ss = `<p style="margin-left:35%;">sleep on it</p>`;
                document.getElementById("ss").innerHTML = ss;
                //document.getElementById("ss").style = "margin-left:35%;";

            } else if (count6 == 1) {
                count6--;
                console.log(count6);
                var ss = `<div style="text-align:right; width:80%;">
                            <p>split decision</p>
                        </div>
                        <div style="width:20%; color:white;">i</div>
                        <div class="col-md-6">
                            <p>sleep on it</p>
                        </div>`;
                document.getElementById("ss").innerHTML = ss;
                //document.getElementById("ss").style = "margin-left:65px;";

            }
        }

        function myfunction7() {
            if (count7 == 0) {
                count7++;
                console.log(count7);
                var sp = `<p style="margin-left:35%;">planner</p>`;
                document.getElementById("sp").innerHTML = sp;
                //document.getElementById("sp").style = "margin-left:35%;";

            } else if (count7 == 1) {
                count7--;
                console.log(count7);
                var sp = `<div style="text-align:right; width:80%;">
                            <p>spontaneous</p>
                        </div>
                        <div style="width:20%; color:white;">i</div>
                        <div class="col-md-6">
                            <p>planner</p>
                        </div>`;
                document.getElementById("sp").innerHTML = sp;
                //document.getElementById("sp").style = "margin-left:65px;";

            }
        }

        function myfunction8() {
            if (count8 == 0) {
                count8++;
                console.log(count8);
                var cb = `<p style="margin-left:35%;">business</p>`;
                document.getElementById("cb").innerHTML = cb;
                //document.getElementById("cb").style = "margin-left:35%;";

            } else if (count8 == 1) {
                count8--;
                console.log(count8);
                var cb = `<div style="text-align:right; width:80%;">
                            <p>creative</p>
                        </div>
                        <div style="width:20%; color:white;">i</div>
                        <div class="col-md-6">
                            <p>business</p>
                        </div>`;
                document.getElementById("cb").innerHTML = cb;
                //document.getElementById("cb").style = "margin-left:65px;";

            }
        }

        function myfunction9() {
            if (count9 == 0) {
                count9++;
                console.log(count9);
                var ra = `<p style="margin-left:35%;">audio book</p>`;
                document.getElementById("ra").innerHTML = ra;
                //document.getElementById("ra").style = "margin-left:35%;";

            } else if (count9 == 1) {
                count9--;
                console.log(count9);
                var ra = `<div style="text-align:right; width:80%;">
                            <p>read</p>
                        </div>
                        <div style="width:20%; color:white;">i</div>
                        <div class="col-md-6">
                            <p>audio book</p>
                        </div>`;
                document.getElementById("ra").innerHTML = ra;
                //document.getElementById("ra").style = "margin-left:65px;";

            }
        }

        function myfunction10() {
            if (count10 == 0) {
                count10++;
                console.log(count10);
                var sn = `<p style="margin-left:35%;">non-student</p>`;
                document.getElementById("sn").innerHTML = sn;
                //document.getElementById("sn").style = "margin-left:35%;";

            } else if (count10 == 1) {
                count10--;
                console.log(count10);
                var sn = `<div style="text-align:right; width:80%;">
                            <p>student</p>
                        </div>
                        <div style="width:20%; color:white;">i</div>
                        <div class="col-md-6">
                            <p>non-student</p>
                        </div>`;
                document.getElementById("sn").innerHTML = sn;
                //document.getElementById("sn").style = "margin-left:65px;";

            }
        }
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
                    <a href="pagesix"><img id="img3" src="<?php echo base_url(); ?>assets/images/logos-33.png" style="width:10%; height:100%; "></a></img>
                    <i class="fa fa-bars fa-2x"></i>
                </div>
                <form class="login100-form validate-form">

                    <span class="login100-form-title p-b-49">
                        <img id="img1" src="<?php echo base_url(); ?>assets/images/logos-19.png" style="width:50%; height:50%; background-color:white; color:white;" />
                    </span>
                    <div class="items" id="ls" onclick="myfunction()">
                        <div style="text-align:right; width:100%;">
                            <p>lone wolf</p>
                        </div>
                        <div style="width:20%; color:white;">i</div>
                        <div class="col-md-6">
                            <p> social butterfly</p>
                        </div>
                    </div>
                    <div class="items" id="pg" onclick="myfunction2()">
                        <div style="text-align:right; width:100%;">
                            <p>planner</p>
                        </div>
                        <div style="width:20%; color:white;">i</div>
                        <div class="col-md-6" style="text-align:left;">
                            <p>go with the flow</p>
                        </div>
                    </div>
                    <div class="items" id="ne" onclick="myfunction3()">
                        <div style="text-align:right; width:100%;">
                            <p>night owl</p>
                        </div>
                        <div style="width:20%; color:white;">i</div>
                        <div class="col-md-6" style="text-align:left;">
                            <p>early bird</p>
                        </div>
                    </div>
                    <div class="items" id="cd" onclick="myfunction4()">
                        <div style="text-align:right; width:100%;">
                            <p>cook</p>
                        </div>
                        <div style="width:20%; color:white;">i</div>
                        <div class="col-md-6" style="text-align:left;">
                            <p>delivery</p>
                        </div>
                    </div>
                    <div class="items" id="ff" onclick="myfunction5()">
                        <div style="text-align:right; width:100%;">
                            <p>four-hour drive</p>
                        </div>
                        <div style="width:20%; color:white;">i</div>
                        <div class="col-md-6" style="text-align:left;">
                            <p>fly</p>
                        </div>
                    </div>
                    <div class="items" id="ss" onclick="myfunction6()">
                        <div style="text-align:right; width:100%;">
                            <p>split decision</p>
                        </div>
                        <div style="width:20%; color:white;">i</div>
                        <div class="col-md-6" style="text-align:left;">
                            <p>sleep on it</p>
                        </div>
                    </div>
                    <div class="items" id="sp" onclick="myfunction7()">
                        <div style="text-align:right; width:100%;">
                            <p>spontaneous</p>
                        </div>
                        <div style="width:20%; color:white;">i</div>
                        <div class="col-md-6" style="text-align:left;">
                            <p>planner</p>
                        </div>
                    </div>
                    <div class="items" id="cb" onclick="myfunction8()">
                        <div style="text-align:right; width:100%;">
                            <p>creative</p>
                        </div>
                        <div style="width:20%; color:white;">i</div>
                        <div class="col-md-6" style="text-align:left;">
                            <p>business</p>
                        </div>
                    </div>
                    <div class="items" id="ra" onclick="myfunction9()">
                        <div style="text-align:right; width:100%;">
                            <p>read</p>
                        </div>
                        <div style="width:20%; color:white;">i</div>
                        <div class="col-md-6" style="text-align:left;">
                            <p>audio book</p>
                        </div>
                    </div>
                    <div class="items" id="sn" onclick="myfunction10()">
                        <div style="text-align:right; width:100%;">
                            <p>student</p>
                        </div>
                        <div style="width:20%; color:white;">i</div>
                        <div class="col-md-6" style="text-align:left;">
                            <p>non-student</p>
                        </div>
                    </div>

                    <div class="flex-col-c p-t-60">
                        <a href="pagefive"><img id="img4" src="<?php echo base_url(); ?>assets/images/logos-34.png" style="width:10%; height:10%; margin-left:85%;" /></a>
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