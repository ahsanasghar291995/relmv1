<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>LAUNCHPAD</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="pageone" class="nav-link">Home</a>
                </li>

            </ul>



            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Messages Dropdown Menu -->

                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button"><i class="fas fa-th-large"></i></a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="#" class="brand-link">
                <img src="<?php echo base_url(); ?>/assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">LAUNCHPAD</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->


                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item has-treeview menu-open">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Starter Pages
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php echo base_url(); ?>index.php/main/firstadminpage" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Home</p>
                                    </a>
                                </li>

                            </ul>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php echo base_url(); ?>index.php/main/admin" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>user preference</p>
                                    </a>
                                </li>

                            </ul>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php echo base_url(); ?>index.php/main/secondadminpage" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>user personal info</p>
                                    </a>
                                </li>

                            </ul>
                        </li>

                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="col-md-6">
                                <div class="form-group">
                                    <button class="btn btn-default" onclick="printDiv('printableArea')"><i class="fa fa-print" aria-hidden="true" style="    font-size: 17px;"> Print</i></button>
                                </div>
                            </div>
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">RECORD OF ALL THE USERS</h1>
                        </div><!-- /.col -->


                    </div><!-- /.row -->
                    <!-- Main content -->
                    <div class="content">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-12">

                                    <div class="card">
                                        <div class="card-header">
                <h3 class="card-title">Table of all the users</h3>

                
              </div>


                                        <!-- /.card-header -->
                                        <div class="card-body table-responsive p-0" id="printableArea">
                                            <table id="datatable" class="table table-hover text-nowrap">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Email</th>
                                                        <th>Password</th>
                                                        <th>Pets</th>
                                                        <th>Cleanliness</th>
                                                        <th>Noise Level</th>
                                                        <th>Co-ed Living</th>
                                                        <th>Life Style</th>
                                                        <th>Dietary Habits</th>
                                                        <th>Sleep Schedule</th>
                                                        <th>Frequency Of Guests</th>
                                                        <th>Lifestyle & entertainment</th>
                                                        <th>Education & Student life</th>
                                                        <th>Health & Fitness</th>
                                                        <th>Business Entrepreneurship</th>
                                                        <th>Social Inetest Housing</th>
                                                        <th>Sports Recreation</th>
                                                        <th>Creative Performers</th>
                                                        <th>Frequency Of Guests 2</th>
                                                        <th>Rank Priority Amenities</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php

                                                    foreach ($data as $row) {
                                                        echo "<tr>";
                                                        echo "<td>" . $row->id . "</td>";
                                                        echo "<td>" . $row->email . "</td>";
                                                        echo "<td>" . $row->password . "</td>";
                                                        echo "<td>" . $row->pets . "</td>";
                                                        echo "<td>" . $row->cleanliness .  "</td>";
                                                        echo "<td>" . $row->noise_level . "</td>";
                                                        echo "<td>" . $row->coed_living . "</td>";
                                                        echo "<td>" . $row->life_style . "</td>";
                                                        echo "<td>" . $row->dietary_habits . "</td>";
                                                        echo "<td>" . $row->sleep_schedule . "</td>";
                                                        echo "<td>" . $row->frequency_of_guests . "</td>";
                                                        echo "<td>" . $row->lifestyle_entertainment . "</td>";
                                                        echo "<td>" . $row->education_studentlife . "</td>";
                                                        echo "<td>" . $row->health_fitness . "</td>";
                                                        echo "<td>" . $row->business_entrepreneurship . "</td>";
                                                        echo "<td>" . $row->social_interest_housing . "</td>";
                                                        echo "<td>" . $row->sports_recreation . "</td>";
                                                        echo "<td>" . $row->creative_performers . "</td>";
                                                        echo "<td>" . $row->frequency_of_guests_2 . "</td>";
                                                        echo "<td>" . $row->rank_priority_amenities . "</td>";
                                                        echo "</tr>";
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>


                                        </div>
                                        <!-- /.card-body -->
                                    </div>
                                </div>

                                <!-- /.col-md-6 -->
                            </div>
                            <!-- /.row -->
                        </div><!-- /.container-fluid -->
                    </div>
                    <!-- /.content -->
                </div>
                <!-- /.content-wrapper -->
            </div><!-- /.container-fluid -->
        </div>

        <!-- /.content-header -->

        <!-- Main content -->

        <!-- /.content -->

        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            
            <!-- Default to the left -->
            <strong>Copyright LAUNCHPAD</strong> All rights reserved.
        </footer>
    </div>
    <!-- ./wrapper -->
    <!-- Datatable script -->
    <script>
        $(document).ready(function() {
            $('#datatable').dataTable();
        });
    </script>
    <!-- Ending of datatable script -->

    <!-- REQUIRED SCRIPTS -->
    <!-- DataTables -->
    <!-- DataTables -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>/assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo base_url(); ?>/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url(); ?>/assets/dist/js/adminlte.min.js"></script>
    <!-- DataTables -->
    <script src="<?php echo base_url(); ?>/assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script>
        $(function() {
            $('#print').on('click', function() {
                $.print(".print_div");
            })
        })
    </script>

    <script>
        function printDiv(divName) {
            var printContents = document.getElementById(divName).innerHTML;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;

            window.print();

            document.body.innerHTML = originalContents;
        }
    </script>
</body>

</html>