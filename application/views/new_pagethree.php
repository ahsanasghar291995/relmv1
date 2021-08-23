<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
    <!-- Select2 -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <style>
        body {
            background-color: #efefef;
        }

        .profile-pic {
            max-width: 200px;
            max-height: 200px;
            display: block;
        }

        .file-upload {
            display: none;
        }

        .circle {
            border-radius: 0px !important;
            border: 1px solid lightgray;
            overflow: hidden;
            width: 128px;
            height: 128px;

            position: absolute;
            top: 0px;
            left: 5px;
        }

        img {
            max-width: 100%;
            height: 128px;
        }

        .p-image {
            position: absolute;
            top: 50px;
            right: 60px;
            color: #666666;
            transition: all .3s cubic-bezier(.175, .885, .32, 1.275);
        }

        .p-image:hover {
            transition: all .3s cubic-bezier(.175, .885, .32, 1.275);
        }

        .upload-button {
            font-size: 1.2em;
        }

        .upload-button:hover {
            transition: all .3s cubic-bezier(.175, .885, .32, 1.275);
            color: #999;
        }
    </style>

    <style>
        .profile-pic-wrapper {
            height: 20vh;
            width: 100%;
            position: relative;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .pic-holder {
            text-align: center;
            position: relative;
            border-radius: 50%;
            width: 150px;
            height: 150px;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 20px;
        }

        .pic-holder .pic {
            height: 100%;
            width: 100%;
            -o-object-fit: cover;
            object-fit: cover;
            -o-object-position: center;
            object-position: center;
        }

        .pic-holder .upload-file-block,
        .pic-holder .upload-loader {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            background-color: rgba(90, 92, 105, 0.7);
            color: #f8f9fc;
            font-size: 12px;
            font-weight: 600;
            opacity: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.2s;
        }

        .pic-holder .upload-file-block {
            cursor: pointer;
        }

        .pic-holder:hover .upload-file-block {
            opacity: 1;
        }

        .pic-holder.uploadInProgress .upload-file-block {
            display: none;
        }

        .pic-holder.uploadInProgress .upload-loader {
            opacity: 1;
        }

        /* Snackbar css */
        .snackbar {
            visibility: hidden;
            min-width: 250px;
            background-color: #333;
            color: #fff;
            text-align: center;
            border-radius: 2px;
            padding: 16px;
            position: fixed;
            z-index: 1;
            left: 50%;
            bottom: 30px;
            font-size: 14px;
            transform: translateX(-50%);
        }

        .snackbar.show {
            visibility: visible;
            -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
            animation: fadein 0.5s, fadeout 0.5s 2.5s;
        }

        @-webkit-keyframes fadein {
            from {
                bottom: 0;
                opacity: 0;
            }

            to {
                bottom: 30px;
                opacity: 1;
            }
        }

        @keyframes fadein {
            from {
                bottom: 0;
                opacity: 0;
            }

            to {
                bottom: 30px;
                opacity: 1;
            }
        }

        @-webkit-keyframes fadeout {
            from {
                bottom: 30px;
                opacity: 1;
            }

            to {
                bottom: 0;
                opacity: 0;
            }
        }

        @keyframes fadeout {
            from {
                bottom: 30px;
                opacity: 1;
            }

            to {
                bottom: 0;
                opacity: 0;
            }
        }
    </style>

    <style>
        .profile-pic-wrapper2 {
            height: 20vh;
            width: 100%;
            position: relative;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .pic-holder2 {
            text-align: center;
            position: relative;
            width: 100px;
            height: 100px;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 20px;
        }

        .pic-holder2 .pic2 {
            height: 100%;
            width: 100%;
            -o-object-fit: cover;
            object-fit: cover;
            -o-object-position: center;
            object-position: center;
        }

        .pic-holder2 .upload-file-block2,
        .pic-holder2 .upload-loader2 {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            background-color: rgba(90, 92, 105, 0.7);
            color: #f8f9fc;
            font-size: 12px;
            font-weight: 600;
            opacity: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.2s;
        }

        .pic-holder2 .upload-file-block2 {
            cursor: pointer;
        }

        .pic-holder2:hover .upload-file-block2 {
            opacity: 1;
        }

        .pic-holder.uploadInProgress2 .upload-file-block2 {
            display: none;
        }

        .pic-holder.uploadInProgress2 .upload-loader2 {
            opacity: 1;
        }

        /* Snackbar css */
        .snackbar2 {
            visibility: hidden;
            min-width: 250px;
            background-color: #333;
            color: #fff;
            text-align: center;
            border-radius: 2px;
            padding: 16px;
            position: fixed;
            z-index: 1;
            left: 50%;
            bottom: 30px;
            font-size: 14px;
            transform: translateX(-50%);
        }

        .snackbar.show {
            visibility: visible;
            -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
            animation: fadein 0.5s, fadeout 0.5s 2.5s;
        }

        @-webkit-keyframes fadein {
            from {
                bottom: 0;
                opacity: 0;
            }

            to {
                bottom: 30px;
                opacity: 1;
            }
        }

        @keyframes fadein {
            from {
                bottom: 0;
                opacity: 0;
            }

            to {
                bottom: 30px;
                opacity: 1;
            }
        }

        @-webkit-keyframes fadeout {
            from {
                bottom: 30px;
                opacity: 1;
            }

            to {
                bottom: 0;
                opacity: 0;
            }
        }

        @keyframes fadeout {
            from {
                bottom: 30px;
                opacity: 1;
            }

            to {
                bottom: 0;
                opacity: 0;
            }
        }
    </style>

    <style>
        .select2-selection__choice {
            background-color: lightgray !important;
        }
    </style>
    <style>
        .container-login1 {
            background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
            background-size: 400% 400%;
            animation: gradient 15s ease infinite;
        }

        .container-login10 {
            background: linear-gradient(360deg, #517190, #756B90, #D6B0E4);
            background-size: 1000% 1000%;
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
            margin: 15px 30px;
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
            width: 100%;
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

            width: 90%;
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

                window.location.href = "<?php echo base_url(); ?>index.php/main/findpageseven/22";

            });
            $('.credits').click(function() {

                window.location.href = "<?php echo base_url(); ?>index.php/main/credits";

            });
            $('.groups').click(function() {

                window.location.href = "<?php echo base_url(); ?>index.php/main/groups";

            });
        });
    </script>
    <script>
        function showMyImage(fileInput) {
            var files = fileInput.files;
            //console.log(files);
            for (var i = 0; i < files.length; i++) {
                var file = files[i];
                console.log(file.name);
                var imageType = /image.*/;
                if (!file.type.match(imageType)) {
                    continue;
                }
                var img = document.getElementById("thumbnil");
                var img2 = document.getElementById("thumbnil2");
                var img3 = document.getElementById("thumbnil3");
                var img4 = document.getElementById("thumbnil4");
                img.file = file;
                var reader = new FileReader();
                reader.onload = (function(aImg) {
                    return function(e) {
                        aImg.src = e.target.result;
                    };
                })(img);
                reader.readAsDataURL(file);
                thumbnil.style.display = 'block';
                //$("#banner_name").text(file.name);

            }
        }
    </script>

</head>

<body class="container-login10">

    <div class="" id="img14">

        <div class="container-login100">
            <div class="wrap-login100 p-l-25 p-r-25 p-t-20 p-b-24" style="border-radius:25px;">
                <div class="top">
                    <a href="pageone"><img id="img3" src="<?php echo base_url(); ?>assets/images/backlogo.png" style="width:10%; height:100%; "></a></img>
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
                <form class="login100-form validate-form" method="post" action="update_all_information">
                    <div class="col-md-12" style="text-align:center; color:gray;">
                        <?php
                        echo $this->session->flashdata("error");
                        ?>
                    </div>
                    <?php foreach ($data as $row) { ?>
                        <div class="col-md-12">
                            <div class="profile-pic-wrapper">
                                <div class="pic-holder">
                                    <!-- uploaded pic shown here -->
                                    <img id="profilePic" class="pic" src="<?php echo base_url() ?>assets/upload/<?php echo $row->profile_picture ?>">

                                    <label for="newProfilePhoto" class="upload-file-block">
                                        <div class="text-center">
                                            <div class="mb-2">
                                                <i class="fa fa-camera fa-2x"></i>
                                            </div>
                                            <div class="text-uppercase">
                                                Update <br /> Profile Photo
                                            </div>
                                        </div>
                                    </label>
                                    <Input class="uploadProfileInput" type="file" name="profile_pic" id="newProfilePhoto" accept="image/*" style="display: none;" />
                                </div>

                            </div>
                        </div>
                        <br>
                        <div class="col-md-12" style="text-align:center;">
                            <p><b style="color:gray;"><?php echo $row->first_name . " " . $row->last_name; ?></b></p>
                        </div>


                        <div class="col-md-12" style="text-align:center;">
                            <i class="fa fa-linkedin fa-2x" aria-hidden="true" style="color:gray;"></i>
                            <i class="fa fa-twitter fa-2x" style="color:gray;"></i>
                            <i class="fa fa-instagram fa-2x" aria-hidden="true" style="color:gray;"></i>
                        </div>
                        <br>
                        <div class="col-md-12">
                            <div class="col-md-12">
                                <h5 style="color:gray;">current skills</h5>
                            </div>
                        </div>
                        <br>
                        <div class="col-md-12">
                            <input class="btn btn-outline-secondary" style="width:45%; border-radius:50px; margin-right:20px;" name="skill1" type="text" placeholder="+" />
                            <input class="btn btn-outline-secondary" style="width:45%; border-radius:50px;" type="text" name="skill2" placeholder="+" />
                        </div>
                        <br>
                        <div class="col-md-12">
                            <input class="btn btn-outline-secondary" style="width:45%; border-radius:50px; margin-right:20px;" name="skill3" type="text" placeholder="+" />
                            <input class="btn btn-outline-secondary" style="width:45%; border-radius:50px;" type="text" name="skill4" placeholder="+" />
                        </div>
                        <br>
                        <div class="col-md-12">
                            <input class="btn btn-outline-secondary" style="width:45%; border-radius:50px; margin-right:20px;" name="skill5" type="text" placeholder="+" />
                            <input class="btn btn-outline-secondary" style="width:45%; border-radius:50px;" type="text" name="skill6" placeholder="+" />
                        </div>
                        <br>
                        <div class="col-md-12">
                            <div class="col-md-12">
                                <h5 style="color:gray;">objectives</h5>
                            </div>
                        </div>
                        <br>
                        <div class="col-md-12">

                            <input class="btn btn-outline-secondary" style="width:45%; border-radius:50px; margin-right:20px;" type="text" name="objective1" placeholder="+" />
                            <input class="btn btn-outline-secondary" style="width:45%; border-radius:50px;" type="text" name="objective2" placeholder="+" />
                        </div>
                        <br>
                        <div class="col-md-12" style="text-align:center;">
                            <input class="btn btn-outline-secondary" style="width:45%; border-radius:50px;" type="text" name="objective3" placeholder="+" />
                        </div>
                        <br>
                        <div class="col-md-12">
                            <textarea style="height:200px; width:100%;" placeholder="*self discription 250 characters" name="description" maxlength="250"></textarea>
                        </div>
                        <br>
                        <div class="col-md-12">
                            <div class="col-md-12">
                                <h5 style="color:gray; font-size:14px;">add property for barter, rent or sale</h5>
                            </div>
                        </div>
                        <br><br>

                        <div class="col-md-12" style="display:flex;" onClick="window.location='<?php echo base_url(); ?>index.php/main/list_property_finalpage'">
                            <?php if ($row->property_pictures == "") { ?>
                                <div class="col-md-4">
                                    <div class="row">
                                        <div class="small-12 medium-2 large-2 columns">
                                            <div class="circle">
                                                <img class="profile-pic" src="">
                                            </div>
                                            <div class="p-image">
                                                <i class="fa fa-plus upload-button"></i>
                                                <input class="file-upload" type="file" name="image" accept="image/*" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php }
                            if ($row->property_pictures != "") {
                            ?>
                                <div class="col-md-4">
                                    <div class="row">
                                        <div class="small-12 medium-2 large-2 columns">
                                            <div class="circle">
                                                <img class="profile-pic" src="<?php echo base_url() ?>assets/upload/<?php echo $row->property_pictures ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                            <?php if ($row->listing_type == "") { ?>
                                <div class="col-md-6">
                                    <i style="display: block; height: 1px; border-top: 1px solid #ccc; margin: 1em 0;"></i>
                                    <i style="display: block; height: 1px; border-top: 1px solid #ccc; margin: 2em 0;"></i>
                                    <i style="display: block; height: 1px; border-top: 1px solid #ccc; margin: 1em 0;"></i>

                                </div>
                            <?php }
                            if ($row->listing_type != "") { ?>
                                <div class="col-md-6">
                                    <p>property type: <?php echo $row->listing_type; ?></p>
                                    <p><?php echo $row->bed . " bed / " . $row->bath . " bath" ?></p>
                                    <p>location: <?php echo $row->property_location; ?></p>
                                </div>
                            <?php } ?>
                        </div>
                        <br><br><br>

                        <div class="col-md-12" style="display:flex;" onClick="window.location='<?php echo base_url(); ?>index.php/main/list_property_finalpage2'">
                            <?php if ($row->car_pictures == "") { ?>
                                <div class="col-md-4">
                                    <div class="row">
                                        <div class="small-12 medium-2 large-2 columns">
                                            <div class="circle">
                                                <img class="profile-pic" src="">
                                            </div>
                                            <div class="p-image">
                                                <i class="fa fa-plus upload-button"></i>
                                                <input class="file-upload" type="file" name="image" accept="image/*" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php }
                            if ($row->car_pictures != "") { ?>
                                <div class="col-md-4">
                                    <div class="row">
                                        <div class="small-12 medium-2 large-2 columns">
                                            <div class="circle">
                                                <img class="profile-pic" src="<?php echo base_url() ?>assets/upload/<?php echo $row->car_pictures ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                            <?php if ($row->car_type == "") { ?>
                                <div class="col-md-6">
                                    <i style="display: block; height: 1px; border-top: 1px solid #ccc; margin: 1em 0;"></i>
                                    <i style="display: block; height: 1px; border-top: 1px solid #ccc; margin: 2em 0;"></i>
                                    <i style="display: block; height: 1px; border-top: 1px solid #ccc; margin: 1em 0;"></i>
                                </div>
                            <?php }
                            if ($row->car_type != "") { ?>
                                <div class="col-md-6">
                                    <p>property type: <?php echo $row->car_type; ?></p>
                                    <p><?php echo $row->car_transmission . " manual / " . $row->car_cylinders . " cyl." ?></p>
                                    <p>location: <?php echo $row->car_location_name; ?></p>
                                </div>
                            <?php } ?>
                        </div>
                        <br><br><br><br><br>
                        <div class="col-md-12" style="display:flex;" onClick="window.location='<?php echo base_url(); ?>index.php/main/list_property_finalpage3'">
                            <?php if ($row->cowork_pictures == "") { ?>
                                <div class="col-md-4">
                                    <div class="row">
                                        <div class="small-12 medium-2 large-2 columns">
                                            <div class="circle">
                                                <img class="profile-pic" src="">
                                            </div>
                                            <div class="p-image">
                                                <i class="fa fa-plus upload-button"></i>
                                                <input class="file-upload" type="file" name="image" accept="image/*" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php }
                            if ($row->cowork_pictures != "") { ?>
                                <div class="col-md-4">
                                    <div class="row">
                                        <div class="small-12 medium-2 large-2 columns">
                                            <div class="circle">
                                                <img class="profile-pic" src="<?php echo base_url() ?>assets/upload/<?php echo $row->cowork_pictures ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                            <?php if ($row->cowork_location_name == "") { ?>
                                <div class="col-md-6">
                                    <i style="display: block; height: 1px; border-top: 1px solid #ccc; margin: 1em 0;"></i>
                                    <i style="display: block; height: 1px; border-top: 1px solid #ccc; margin: 2em 0;"></i>
                                    <i style="display: block; height: 1px; border-top: 1px solid #ccc; margin: 1em 0;"></i>
                                </div>
                            <?php }
                            if ($row->cowork_location_name != "") { ?>
                                <div class="col-md-6">
                                    <p>property type: <?php echo $row->cowork_location_name; ?></p>
                                    <p><?php echo $row->cowork_sq_feet ?></p>
                                    <p><?php echo $row->cowork_shared_office; ?></p>
                                </div>
                            <?php } ?>

                        </div>

                    <?php } ?>
                    <br><br>
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
                        <select class="selectpicker" name="special_interest_housing[]" title="special interest housing" style="width:100%; border:none; color:gray;" multiple required>
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

                    <div class="flex-col-c p-t-30">
                        <button type="submit"><img id="img4" src="<?php echo base_url(); ?>assets/images/frontlogo.png" style="width:10%; height:10%; margin-left:85%;" /></button>
                        <span class="txt1 p-b-17">

                        </span>

                        <a href="#" class="txt2">

                        </a>
                        <div class="bottom">
                            <img src="<?php echo base_url(); ?>assets/images/as-06.png" class="bottom credits" style="width:15%; height:15%;" />
                            <img id="" src="<?php echo base_url(); ?>assets/images/Relm-52.png" class="bottom redirect" style="width:25%; height:50%; margin-top:20px;" class="wow" />
                            <img id="img5" src="<?php echo base_url(); ?>assets/images/groups.png" class="bottom groups" style="width:20%; height:20%; margin-top:20px;" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div id="dropDownSelect1"></div>



</body>
<script>
    $(document).on("change", ".uploadProfileInput", function() {
        var triggerInput = this;
        var currentImg = $(this).closest(".pic-holder").find(".pic").attr("src");
        var holder = $(this).closest(".pic-holder");
        var wrapper = $(this).closest(".profile-pic-wrapper");
        $(wrapper).find('[role="alert"]').remove();
        var files = !!this.files ? this.files : [];
        if (!files.length || !window.FileReader) {
            return;
        }
        if (/^image/.test(files[0].type)) {
            // only image file
            var reader = new FileReader(); // instance of the FileReader
            reader.readAsDataURL(files[0]); // read the local file

            reader.onloadend = function() {
                $(holder).addClass("uploadInProgress");
                $(holder).find(".pic").attr("src", this.result);
                $(holder).append(
                    '<div class="upload-loader"><div class="spinner-border text-primary" role="status"><span class="sr-only">Loading...</span></div></div>'
                );

                // Dummy timeout; call API or AJAX below
                setTimeout(() => {
                    $(holder).removeClass("uploadInProgress");
                    $(holder).find(".upload-loader").remove();
                    // If upload successful
                    if (Math.random() < 0.9) {
                        $(wrapper).append(
                            '<div class="snackbar show" role="alert"><i class="fa fa-check-circle text-success"></i> Profile image updated successfully</div>'
                        );

                        // Clear input after upload
                        $(triggerInput).val("");

                        setTimeout(() => {
                            $(wrapper).find('[role="alert"]').remove();
                        }, 3000);
                    } else {
                        $(holder).find(".pic").attr("src", currentImg);
                        $(wrapper).append(
                            '<div class="snackbar show" role="alert"><i class="fa fa-times-circle text-danger"></i> There is an error while uploading! Please try again later.</div>'
                        );

                        // Clear input after upload
                        $(triggerInput).val("");
                        setTimeout(() => {
                            $(wrapper).find('[role="alert"]').remove();
                        }, 3000);
                    }
                }, 1500);
            };
        } else {
            $(wrapper).append(
                '<div class="alert alert-danger d-inline-block p-2 small" role="alert">Please choose the valid image.</div>'
            );
            setTimeout(() => {
                $(wrapper).find('role="alert"').remove();
            }, 3000);
        }
    });
</script>

<script>
    $(document).on("change", ".uploadProfileInput2", function() {
        var triggerInput = this;
        var currentImg = $(this).closest(".pic-holder2").find(".pic2").attr("src");
        var holder = $(this).closest(".pic-holder2");
        var wrapper = $(this).closest(".profile-pic-wrapper2");
        $(wrapper).find('[role="alert"]').remove();
        var files = !!this.files ? this.files : [];
        if (!files.length || !window.FileReader) {
            return;
        }
        if (/^image/.test(files[0].type)) {
            // only image file
            var reader = new FileReader(); // instance of the FileReader
            reader.readAsDataURL(files[0]); // read the local file

            reader.onloadend = function() {
                $(holder).addClass("uploadInProgress2");
                $(holder).find(".pic2").attr("src", this.result);
                $(holder).append(
                    '<div class="upload-loader2"><div class="spinner-border text-primary" role="status"><span class="sr-only">Loading...</span></div></div>'
                );

                // Dummy timeout; call API or AJAX below
                setTimeout(() => {
                    $(holder).removeClass("uploadInProgress2");
                    $(holder).find(".upload-loader2").remove();
                    // If upload successful
                    if (Math.random() < 0.9) {
                        $(wrapper).append(
                            '<div class="snackbar2 show2" role="alert"><i class="fa fa-check-circle text-success"></i> Profile image updated successfully</div>'
                        );

                        // Clear input after upload
                        $(triggerInput).val("");

                        setTimeout(() => {
                            $(wrapper).find('[role="alert"]').remove();
                        }, 3000);
                    } else {
                        $(holder).find(".pic2").attr("src", currentImg);
                        $(wrapper).append(
                            '<div class="snackbar2 show2" role="alert"><i class="fa fa-times-circle text-danger"></i> There is an error while uploading! Please try again later.</div>'
                        );

                        // Clear input after upload
                        $(triggerInput).val("");
                        setTimeout(() => {
                            $(wrapper).find('[role="alert"]').remove();
                        }, 3000);
                    }
                }, 1500);
            };
        } else {
            $(wrapper).append(
                '<div class="alert alert-danger d-inline-block p-2 small" role="alert">Please choose the valid image.</div>'
            );
            setTimeout(() => {
                $(wrapper).find('role="alert"').remove();
            }, 3000);
        }
    });
</script>

<script>
    $(document).ready(function() {


        var readURL = function(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('.profile-pic').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }


        $(".file-upload").on('change', function() {
            readURL(this);
        });

        $(".upload-button").on('click', function() {
            $(".file-upload").click();
        });
    });
</script>


</html>