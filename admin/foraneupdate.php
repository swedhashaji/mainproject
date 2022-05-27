<?php
session_start();
include('cred/dbConnect.php');
if (isset($_SESSION["smymSessionId"]) != session_id()) {
    header("Location: auth/");
    die();
} else {

?>
    <!DOCTYPE html>
    <html dir="ltr" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- Favicon icon -->
        <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
        <title>Matrix Template - The Ultimate Multipurpose admin template</title>
        <!-- Custom CSS -->
        <link href="assets/libs/flot/css/float-chart.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="dist/css/style.min.css" rel="stylesheet">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
    </head>

    <body>
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Main wrapper - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <div id="main-wrapper">
            <!-- ============================================================== -->
            <!-- Topbar header - style you can find in pages.scss -->
            <!-- ============================================================== -->
            <header class="topbar" data-navbarbg="skin5">
                <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                    <div class="navbar-header" data-logobg="skin5">
                        <!-- This is for the sidebar toggle which is visible on mobile only -->
                        <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                        <!-- ============================================================== -->
                        <!-- Logo -->
                        <!-- ============================================================== -->
                        <a class="navbar-brand" href="index.html">
                            <!-- Logo icon -->
                            <b class="logo-icon p-l-10">
                                <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                                <!-- Dark Logo icon -->
                                <img src="assets/images/logo-icon.png" alt="homepage" class="light-logo" />

                            </b>
                            <!--End Logo icon -->
                            <!-- Logo text -->
                            <span class="logo-text">
                                <!-- dark Logo text -->
                                <img src="assets/images/logo-text.png" alt="homepage" class="light-logo" />

                            </span>
                            <!-- Logo icon -->
                            <!-- <b class="logo-icon"> -->
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <!-- <img src="assets/images/logo-text.png" alt="homepage" class="light-logo" /> -->

                            <!-- </b> -->
                            <!--End Logo icon -->
                        </a>
                        <!-- ============================================================== -->
                        <!-- End Logo -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Toggle which is visible on mobile only -->
                        <!-- ============================================================== -->
                        <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                        <!-- ============================================================== -->
                        <!-- toggle and nav items -->
                        <!-- ============================================================== -->
                        <ul class="navbar-nav float-left mr-auto">
                            <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
                            <!-- ============================================================== -->


                        </ul>
                        <!-- ============================================================== -->
                        <!-- Right side toggle and nav items -->
                        <!-- ============================================================== -->
                        <ul class="navbar-nav float-right">
                            <!-- ============================================================== -->

                            <!-- ============================================================== -->
                            <!-- ============================================================== -->
                            <!-- Messages -->
                            <!-- ============================================================== -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" id="2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="font-24 mdi mdi-comment-processing"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right mailbox animated bounceInDown" aria-labelledby="2">
                                    <ul class="list-style-none">
                                        <li>
                                            <div class="">
                                                <!-- Message -->
                                                <a href="javascript:void(0)" class="link border-top">
                                                    <div class="d-flex no-block align-items-center p-10">
                                                        <span class="btn btn-success btn-circle"><i class="ti-calendar"></i></span>
                                                        <div class="m-l-10">
                                                            <h5 class="m-b-0">Event today</h5>
                                                            <span class="mail-desc">Just a reminder that event</span>
                                                        </div>
                                                    </div>
                                                </a>
                                                <!-- Message -->
                                                <a href="javascript:void(0)" class="link border-top">
                                                    <div class="d-flex no-block align-items-center p-10">
                                                        <span class="btn btn-info btn-circle"><i class="ti-settings"></i></span>
                                                        <div class="m-l-10">
                                                            <h5 class="m-b-0">Settings</h5>
                                                            <span class="mail-desc">You can customize this template</span>
                                                        </div>
                                                    </div>
                                                </a>


                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <!-- ============================================================== -->
                            <!-- End Messages -->
                            <!-- ============================================================== -->

                            <!-- ============================================================== -->
                            <!-- User profile and search -->
                            <!-- ============================================================== -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31"></a>
                                <div class="dropdown-menu dropdown-menu-right user-dd animated">
                                    <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user m-r-5 m-l-5"></i> My Profile</a>

                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="javascript:void(0)"><i class="ti-settings m-r-5 m-l-5"></i> Account Setting</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="auth/logoutController.php"><i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
                                    <div class="dropdown-divider"></div>
                                    <div class="p-l-30 p-10"><a href="javascript:void(0)" class="btn btn-sm btn-success btn-rounded">View Profile</a></div>
                                </div>
                            </li>
                            <!-- ============================================================== -->
                            <!-- User profile and search -->
                            <!-- ============================================================== -->
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- ============================================================== -->
            <!-- End Topbar header -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Left Sidebar - style you can find in sidebar.scss  -->
            <!-- ============================================================== -->
            <aside class="left-sidebar" data-sidebarbg="skin5">
                <!-- Sidebar scroll-->
                <div class="scroll-sidebar">
                    <!-- Sidebar navigation-->
                    <nav class="sidebar-nav">
                        <ul id="sidebarnav" class="p-t-30">
      
                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="./dashboard1.php?id=<?php echo $_GET['id']; ?>" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a></li>

                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="./foraneupdate.php?id=<?php echo $_GET['id']; ?>" aria-expanded="false"><i class="mdi mdi-border-inside"></i><span class="hide-menu">Forane</span></a></li>
                            <?php
                                    $con = mysqli_connect("localhost", "root", "", "smymdb");
                                    $forane_id=$_SESSION["adminrow"];;
                                    $sql="SELECT * from tbl_admin where admin_id='$forane_id'";
                                    $query_runs=mysqli_query($con,$sql);
                                    $rowUser = mysqli_fetch_array($query_runs);
                                    $name=$rowUser['admin_forane'];
                                    $query="SELECT * from forane WHERE forane_id='$name'";
                                    $query_run=mysqli_query($con,$query);
                                    $ids=mysqli_fetch_array($query_run);
                                ?>
                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="./view_parish.php?id=<?php echo $ids['forane_id']; ?>" aria-expanded="false"><i class="mdi mdi-relative-scale"></i><span class="hide-menu">Parish</span></a></li>
                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="./view_parish.php?id=<?php echo $ids['forane_id']; ?>" aria-expanded="false"><i class="mdi mdi-relative-scale"></i><span class="hide-menu">Add Events</span></a></li>
                            </li>


                        </ul>
                    </nav>
                    <!-- End Sidebar navigation -->
                </div>





                <!-- End Sidebar scroll-->
            </aside>
            <!-- ============================================================== -->
            <!-- End Left Sidebar - style you can find in sidebar.scss  -->
            <!-- ============================================================== -->
<table>
    <tr>
        <th>
            <h2>Forane</h2>
        </th>
    </tr>
</table>
            
            <!-- ============================================================== -->
            <!-- Page wrapper  -->
            <!-- ============================================================== -->
            <div class="page-wrapper">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="page-breadcrumb">
                    <div class="row">
                        <div class="col-12 d-flex no-block align-items-center">
                            <h4 class="page-title">
                            </h4>
                            <div class="ml-auto text-right">
                                <nav aria-label="breadcrumb">

                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-8">
                        <center>
                        <div class="card">
                        <?php
                           $con = mysqli_connect("localhost", "root", "", "smymdb");
                            $forane_id=$_SESSION["adminrow"];
                            $sql="SELECT * from tbl_admin where admin_id='$forane_id'";
                            $query_runs=mysqli_query($con,$sql);
                            $rowUser = mysqli_fetch_array($query_runs);
                            $name=$rowUser['admin_forane'];
                            $query="SELECT * from forane WHERE forane_id='$name'";
                            $query_run=mysqli_query($con,$query);
                            $rowUsers = mysqli_fetch_array($query_run);
                                ?>
                                
                                
                            <form method="POST" action="" class="form-horizontal">
                                <div class="card-body">
                                    <h4 class="card-title">Forane Details</h4>
                                    <div class="form-group row">
                                        <label for="name" class="col-sm-3 text-right control-label col-form-label">Forane Name</label>
                                        <div class="col-sm-9">
                                        <input type="text" class="form-control"  name="name" value="<?=$rowUsers['name'];?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="place" class="col-sm-3 text-right control-label col-form-label">Executive 1</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control"  name="exc1_name" id="lname" value="<?=$rowUsers['exc1_name'];?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="place" class="col-sm-3 text-right control-label col-form-label">Location</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control"  name="exc1_location" id="lname" value="<?=$rowUsers['exc1_location'];?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="phone" class="col-sm-3 text-right control-label col-form-label">Contact No</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control"  name="exc1_contact" value="<?=$rowUsers['exc1_contact'];?>" id="phone" ">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="place" class="col-sm-3 text-right control-label col-form-label">Executive 2</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control"  name="exc2_name" id="lname" value="<?=$rowUsers['exc2_name'];?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="place" class="col-sm-3 text-right control-label col-form-label">Location</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control"  name="exc2_location" id="lname" value="<?=$rowUsers['exc2_location'];?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="phone" class="col-sm-3 text-right control-label col-form-label">Contact No</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control"  name="exc2_contant" value="<?=$rowUsers['exc2_contant'];?>" id="phone" ">
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="submit" name="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </div>
                              
                            </form>
                            <?php 
                            
                            if(isset($_POST['submit']))
                            {
                                $name = $_POST['name'];
                                $exc1_name = $_POST['exc1_name'];
                                $exc1_location = $_POST['exc1_location'];
                                $exc1_contact = $_POST['exc1_contact'];
                                $exc2_name = $_POST['exc2_name'];
                                $exc2_location = $_POST['exc2_location'];
                                $exc2_contant = $_POST['exc2_contant'];
                                $sql="UPDATE forane SET name='$name', exc1_name = '$exc1_name', exc1_location = '$exc1_location', exc1_contact = '$exc1_contact',exc2_name = '$exc2_name', exc2_location = '$exc2_location', exc2_contant = '$exc2_contant' WHERE name = '$name'";
                                $q = mysqli_query($con,$sql);
                                
                                }
                            }
                        

                            ?>
                        </div>
                    </div>
                </div>
        </center>
        
           
            <!-- ============================================================== -->
            <!-- Page wrapper  -->
            <!-- ============================================================== -->
            <div class="page-wrapper">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="page-breadcrumb">
                    <div class="row">
                        <div class="col-12 d-flex no-block align-items-center">
                            <h4 class="page-title"><?php
                                                    $_SESSION['userDesignation'];
                                                    ?>
                            </h4>
                            <div class="ml-auto text-right">
                                <nav aria-label="breadcrumb">

                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Container fluid  -->
                <!-- ============================================================== -->
                <div class="container-fluid">
                    <!-- ============================================================== -->
                    <!-- Sales Cards  -->
                    <!-- ============================================================== -->
                    <div class="row">


                    </div>
                    <!-- ============================================================== -->


                    <!-- ============================================================== -->
                </div>
                <!-- ============================================================== -->
                <!-- End Container fluid  -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- footer -->
                <!-- ============================================================== -->
                <footer class="footer text-center">
                   
                </footer>
                <!-- ============================================================== -->
                <!-- End footer -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Page wrapper  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Wrapper -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- All Jquery -->
        <!-- ============================================================== -->
        <script src=" assets/libs/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap tether Core JavaScript -->
        <script src=" assets/libs/popper.js/dist/umd/popper.min.js"></script>
        <script src=" assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src=" assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
        <script src=" assets/extra-libs/sparkline/sparkline.js"></script>
        <!--Wave Effects -->
        <script src=" dist/js/waves.js"></script>
        <!--Menu sidebar -->
        <script src=" dist/js/sidebarmenu.js"></script>
        <!--Custom JavaScript -->
        <script src=" dist/js/custom.min.js"></script>
        <!--This page JavaScript -->
        <!-- <script src=" dist/js/pages/dashboards/dashboard1.js"></script> -->
        <!-- Charts js Files -->
        <script src=" assets/libs/flot/excanvas.js"></script>
        <script src=" assets/libs/flot/jquery.flot.js"></script>
        <script src=" assets/libs/flot/jquery.flot.pie.js"></script>
        <script src=" assets/libs/flot/jquery.flot.time.js"></script>
        <script src=" assets/libs/flot/jquery.flot.stack.js"></script>
        <script src=" assets/libs/flot/jquery.flot.crosshair.js"></script>
        <script src=" assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
        <script src=" dist/js/pages/chart/chart-page-init.js"></script>

    </body>

    </html>