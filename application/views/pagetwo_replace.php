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
            border-radius: 1000px !important;
            border: 1px solid lightgray;
            overflow: hidden;
            width: 128px;
            height: 128px;

            position: absolute;
            top: -30px;
            left: 95px;
        }

        img {
            max-width: 100%;
            height: auto;
        }

        .p-image {
            position: absolute;
            top: -20px;
            right: 75px;
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
            width: 90%;
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
                        <li><a class="dropdown-item" href="pageone" style="color:gray;">sign out</a></li>
                    </ul>
                </div>
                <form class="login100-form validate-form" method="post" action="add_personal_information" enctype="multipart/form-data">

                    <span class="login100-form-title p-b-40 p-l-20">
                        <img id="" src="<?php echo base_url(); ?>assets/images/Relm-52.png" style="width:50%; height:50%;" />
                    </span>
                    <div class="col-md-12" style="text-align:center; color:gray;">
                        <?php
                        echo $this->session->flashdata("error");
                        ?>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="small-12 medium-2 large-2 columns">
                                <div class="circle">
                                    <img class="profile-pic" src="">
                                </div>
                                <div class="p-image">
                                    <i class="fa fa-camera upload-button"></i>
                                    <input class="file-upload" type="file" name="image" accept="image/*" required />
                                </div>
                            </div>
                        </div>
                    </div>
                    <br><br><br><br><br>
                    <!-- <div class="col-md-12">
                        <input type="file" name="profile_image" />
                    </div>
                    <br> -->
                    <!-- <input type="file" class="pro" name="profile_image" style="display:none;" /> -->

                    <div class="col-md-12" style="text-align:center;">
                        <p><b style="color:gray;">Basic Info</b></p>
                    </div>
                    <br>
                    <div class="col-md-12">
                        <label for="fname"></label>
                        <input type="text" id="fname" name="fname" placeholder="first name" required>
                    </div>
                    <br>
                    <div class="col-md-12">
                        <label for="lname"></label>
                        <input type="text" id="lname" name="lname" placeholder="last name" required />
                    </div>
                    <br>
                    <div class="col-md-12">
                        <label for="birthdate"></label>
                        <input placeholder="birthdate" type="date" value="2018-07-22" min="1965-01-01" max="2021-12-31" name="birthdate" id="birthdate" style="color:gray;" required />


                    </div>
                    <br>
                    <div class="col-md-12">
                        <label for="email"></label>
                        <input type="email" id="email" name="email" placeholder="email" required>

                    </div>
                    <br>
                    <div class="col-md-12">
                        <label for="password"></label>
                        <input type="text" id="password" name="password" placeholder="password" minlength="6" maxlength="10" required>

                    </div>
                    <br>
                    <div class="col-md-12">
                        <label for="confirm_password"></label>
                        <input type="text" id="confirm_password" name="confirm_password" placeholder="confirm password" minlength="6" maxlength="10" required>

                    </div>
                    <br>
                    <div class="col-md-12">
                        <label for="current city"></label>
                        <input type="text" id="cc" name="cc" placeholder="current city" required>
                    </div>
                    <br>
                    <div class="col-md-12">
                        <label for="home city"></label>
                        <input type="text" id="hc" name="hc" placeholder="home city" required>
                    </div>
                    <br>
                    <div class="col-md-12">
                        <select class="selectpicker" data-width="90%" title="relationship status" name="relationship_status" id="relationship_status" required>
                            <option value="single">single</option>
                            <option value="single & dating">single & dating</option>
                            <option value="in a relationship">in a relationship</option>
                            <option value="married">married</option>
                        </select>
                    </div>
                    <br>
                    <div class="col-md-12">
                        <select class="select2" multiple="multiple" name="fluent_languages_spoken" data-placeholder="Fluent Languages Spoken" style="width: 90%;" required>
                            <option>English</option>
                            <option>French</option>
                            <option>Germen</option>
                            <option>Arabic</option>
                            <option>Japanese</option>
                            <option>Chinese</option>
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
    $(document).ready(function() {
        $('#password').on('change', function() {
            console.log($('#password').val());

            //var password = $('#password').val();
        });
        $('#confirm_password').on('change', function() {
            console.log($('#confirm_password').val());

            var password = $('#password').val();
            var confirm_password = $('#confirm_password').val();
            if (password == confirm_password) {
                //$('#password').style.color = "green";
                $('#password').attr('style', 'border:1px solid lightgreen');

                $('#confirm_password').attr('style', 'border:1px solid lightgreen');
            }
            if (password != confirm_password) {
                console.log(password);
                console.log(confirm_password);
                alert("sorry passwords donot match. please try again.");
                $('#password').val('');
                $('#confirm_password').val('');

                $('#password').attr('style', 'border:none');

                $('#confirm_password').attr('style', 'border:none');

                //$('#password').attr('style', 'border:1px solid red');

                //$('#confirm_password').attr('style', 'border:1px solid red');
            }

        });
    });
</script>

<script src="<?php echo base_url() ?>assets/plugins/select2/js/select2.full.min.js"></script>
<!-- Page script -->
<script>
    $(function() {
        //Initialize Select2 Elements
        $('.select2').select2()

        //Initialize Select2 Elements
        $('.select2bs4').select2({
            theme: 'bootstrap4'
        })


    })
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

<script>
    $(document).ready(function() {
        $('#email').change(function() {
            var email = $('#email').val();
            console.log(email);
            if (email != '') {
                $.ajax({
                    url: "<?php echo base_url(); ?>index.php/main/fetch_email",
                    method: "POST",
                    data: {
                        email: email
                    },
                    success: function(data) {
                        console.log(data);
                        if (data != "") {
                            alert("This email is already taken. please use another one.");
                            $('#email').val('');
                        }
                    }
                });
            } else {
                console.log("ERROR");
            }
        });
    });
</script>
<!-- End of Script -->

</html>