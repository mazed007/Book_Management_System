<?php include_once('connection.php');

session_start();
if (isset($_SESSION['email'])) {
  $id = $_GET['id'];
   include_once('controller/updateBookController.php'); 
  $query = "SELECT * from addbook where id= ".$id;
  $resultBook = mysqli_query($conn, $query);
  ?>
    <!doctype html>
    <html class="no-js" lang="en">

    <head>
        <?php include_once('partialPage/header.php'); ?>
        <!-- favicon
		============================================ -->
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
        <!-- Google Fonts
		============================================ -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
        <!-- Bootstrap CSS
		============================================ -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Bootstrap CSS
		============================================ -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <!-- owl.carousel CSS
		============================================ -->
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/owl.theme.css">
        <link rel="stylesheet" href="css/owl.transitions.css">
        <!-- animate CSS
		============================================ -->
        <link rel="stylesheet" href="css/animate.css">
        <!-- normalize CSS
		============================================ -->
        <link rel="stylesheet" href="css/normalize.css">
        <!-- meanmenu icon CSS
		============================================ -->
        <link rel="stylesheet" href="css/meanmenu.min.css">
        <!-- main CSS
		============================================ -->
        <link rel="stylesheet" href="css/main.css">
        <!-- forms CSS
		============================================ -->
        <link rel="stylesheet" href="css/form/all-type-forms.css">
        <!-- educate icon CSS
		============================================ -->
        <link rel="stylesheet" href="css/educate-custon-icon.css">
        <!-- morrisjs CSS
		============================================ -->
        <link rel="stylesheet" href="css/morrisjs/morris.css">
        <!-- dropzone CSS
		============================================ -->
        <link rel="stylesheet" href="css/dropzone/dropzone.css">
        <!-- mCustomScrollbar CSS
		============================================ -->
        <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
        <!-- metisMenu CSS
		============================================ -->
        <link rel="stylesheet" href="css/metisMenu/metisMenu.min.css">
        <link rel="stylesheet" href="css/metisMenu/metisMenu-vertical.css">
        <!-- calendar CSS
		============================================ -->
        <link rel="stylesheet" href="css/calendar/fullcalendar.min.css">
        <link rel="stylesheet" href="css/calendar/fullcalendar.print.min.css">
        <!-- style CSS
		============================================ -->
        <link rel="stylesheet" href="style.css">
        <!-- responsive CSS
		============================================ -->
        <link rel="stylesheet" href="css/responsive.css">
        <!-- modernizr JS
		============================================ -->
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>

    <body>
        <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->

        <?php include_once('partialPage/leftMenu.php'); ?>
        <!-- End Left menu area -->
        <!-- Start Welcome area -->
        <div class="all-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="logo-pro">
                            <a href="index.html"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-advance-area">
                <div class="header-top-area">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <?php include_once('partialPage/rightMenu.php'); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Mobile Menu start -->
                <div class="mobile-menu-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="mobile-menu">
                                    <nav id="dropdown">
                                        <ul class="mobile-menu-nav">
                                            <li><a data-toggle="collapse" data-target="#Charts" href="#">Home <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                                <ul class="collapse dropdown-header-top">
                                                    <li><a href="index.html">Dashboard v.1</a></li>
                                                    <li><a href="index-1.html">Dashboard v.2</a></li>
                                                    <li><a href="index-3.html">Dashboard v.3</a></li>
                                                    <li><a href="analytics.html">Analytics</a></li>
                                                    <li><a href="widgets.html">Widgets</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="events.html">Event</a></li>
                                            <li><a data-toggle="collapse" data-target="#demoevent" href="#">Professors <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                                <ul id="demoevent" class="collapse dropdown-header-top">
                                                    <li><a href="all-professors.html">All Professors</a>
                                                    </li>
                                                    <li><a href="add-professor.html">Add Professor</a>
                                                    </li>
                                                    <li><a href="edit-professor.html">Edit Professor</a>
                                                    </li>
                                                    <li><a href="professor-profile.html">Professor Profile</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a data-toggle="collapse" data-target="#demopro" href="#">Students <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                                <ul id="demopro" class="collapse dropdown-header-top">
                                                    <li><a href="all-students.html">All Students</a>
                                                    </li>
                                                    <li><a href="add-student.html">Add Student</a>
                                                    </li>
                                                    <li><a href="edit-student.html">Edit Student</a>
                                                    </li>
                                                    <li><a href="student-profile.html">Student Profile</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a data-toggle="collapse" data-target="#democrou" href="#">Courses <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                                <ul id="democrou" class="collapse dropdown-header-top">
                                                    <li><a href="all-courses.html">All Courses</a>
                                                    </li>
                                                    <li><a href="add-course.html">Add Course</a>
                                                    </li>
                                                    <li><a href="edit-course.html">Edit Course</a>
                                                    </li>
                                                    <li><a href="course-profile.html">Courses Info</a>
                                                    </li>
                                                    <li><a href="course-payment.html">Courses Payment</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a data-toggle="collapse" data-target="#demolibra" href="#">Library <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                                <ul id="demolibra" class="collapse dropdown-header-top">
                                                    <li><a href="library-assets.html">Library Assets</a>
                                                    </li>
                                                    <li><a href="add-library-assets.html">Add Library Asset</a>
                                                    </li>
                                                    <li><a href="edit-library-assets.html">Edit Library Asset</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a data-toggle="collapse" data-target="#demodepart" href="#">Departments <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                                <ul id="demodepart" class="collapse dropdown-header-top">
                                                    <li><a href="departments.html">Departments List</a>
                                                    </li>
                                                    <li><a href="add-department.html">Add Departments</a>
                                                    </li>
                                                    <li><a href="edit-department.html">Edit Departments</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a data-toggle="collapse" data-target="#demomi" href="#">Mailbox <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                                <ul id="demomi" class="collapse dropdown-header-top">
                                                    <li><a href="mailbox.html">Inbox</a>
                                                    </li>
                                                    <li><a href="mailbox-view.html">View Mail</a>
                                                    </li>
                                                    <li><a href="mailbox-compose.html">Compose Mail</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a data-toggle="collapse" data-target="#Miscellaneousmob" href="#">Interface <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                                <ul id="Miscellaneousmob" class="collapse dropdown-header-top">
                                                    <li><a href="google-map.html">Google Map</a>
                                                    </li>
                                                    <li><a href="data-maps.html">Data Maps</a>
                                                    </li>
                                                    <li><a href="pdf-viewer.html">Pdf Viewer</a>
                                                    </li>
                                                    <li><a href="x-editable.html">X-Editable</a>
                                                    </li>
                                                    <li><a href="code-editor.html">Code Editor</a>
                                                    </li>
                                                    <li><a href="tree-view.html">Tree View</a>
                                                    </li>
                                                    <li><a href="preloader.html">Preloader</a>
                                                    </li>
                                                    <li><a href="images-cropper.html">Images Cropper</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a data-toggle="collapse" data-target="#Chartsmob" href="#">Charts <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                                <ul id="Chartsmob" class="collapse dropdown-header-top">
                                                    <li><a href="bar-charts.html">Bar Charts</a>
                                                    </li>
                                                    <li><a href="line-charts.html">Line Charts</a>
                                                    </li>
                                                    <li><a href="area-charts.html">Area Charts</a>
                                                    </li>
                                                    <li><a href="rounded-chart.html">Rounded Charts</a>
                                                    </li>
                                                    <li><a href="c3.html">C3 Charts</a>
                                                    </li>
                                                    <li><a href="sparkline.html">Sparkline Charts</a>
                                                    </li>
                                                    <li><a href="peity.html">Peity Charts</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a data-toggle="collapse" data-target="#Tablesmob" href="#">Tables <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                                <ul id="Tablesmob" class="collapse dropdown-header-top">
                                                    <li><a href="static-table.html">Static Table</a>
                                                    </li>
                                                    <li><a href="data-table.html">Data Table</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a data-toggle="collapse" data-target="#formsmob" href="#">Forms <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                                <ul id="formsmob" class="collapse dropdown-header-top">
                                                    <li><a href="basic-form-element.html">Basic Form Elements</a>
                                                    </li>
                                                    <li><a href="advance-form-element.html">Advanced Form Elements</a>
                                                    </li>
                                                    <li><a href="password-meter.html">Password Meter</a>
                                                    </li>
                                                    <li><a href="multi-upload.html">Multi Upload</a>
                                                    </li>
                                                    <li><a href="tinymc.html">Text Editor</a>
                                                    </li>
                                                    <li><a href="dual-list-box.html">Dual List Box</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a data-toggle="collapse" data-target="#Appviewsmob" href="#">App views <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                                <ul id="Appviewsmob" class="collapse dropdown-header-top">
                                                    <li><a href="basic-form-element.html">Basic Form Elements</a>
                                                    </li>
                                                    <li><a href="advance-form-element.html">Advanced Form Elements</a>
                                                    </li>
                                                    <li><a href="password-meter.html">Password Meter</a>
                                                    </li>
                                                    <li><a href="multi-upload.html">Multi Upload</a>
                                                    </li>
                                                    <li><a href="tinymc.html">Text Editor</a>
                                                    </li>
                                                    <li><a href="dual-list-box.html">Dual List Box</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a data-toggle="collapse" data-target="#Pagemob" href="#">Pages <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                                <ul id="Pagemob" class="collapse dropdown-header-top">
                                                    <li><a href="login.html">Login</a>
                                                    </li>
                                                    <li><a href="register.html">Register</a>
                                                    </li>
                                                    <li><a href="lock.html">Lock</a>
                                                    </li>
                                                    <li><a href="password-recovery.html">Password Recovery</a>
                                                    </li>
                                                    <li><a href="404.html">404 Page</a></li>
                                                    <li><a href="500.html">500 Page</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Mobile Menu end -->
                <div class="breadcome-area">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="breadcome-list single-page-breadcome">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="breadcome-heading">
                                                <form role="search" class="sr-input-func">
                                                    <input type="text" placeholder="Search..." class="search-int form-control">
                                                    <a href="#"><i class="fa fa-search"></i></a>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <ul class="breadcome-menu">
                                                <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                                </li>
                                                <li><span class="bread-blod">Add Book</span>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single pro tab review Start-->
            <div class="single-pro-review-area mt-t-30 mg-b-15">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="product-payment-inner-st">
                                <ul id="myTabedu1" class="tab-review-design">
                                    <li class="active"><a href="#description">Add Book Information</a></li>


                                </ul>

                                <?php 
                                             
                         while ($row = mysqli_fetch_array($resultBook)) {
                  
                            ?>
                                <form action="" method="POST">
                                    <div id="myTabContent" class="tab-content custom-product-edit">
                                        <div class="product-tab-list tab-pane fade active in" id="description">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="review-content-section">
                                                        <div id="dropzone1" class="pro-ad">

                                                            <div class="row">
                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                    <div class="form-group">
                                                                        <input name="bookname" type="text" class="form-control" placeholder="Book Name" value="<?php echo $row['bookname']; ?>">
                                                                    </div>


                                                                

                                                                    <div class="form-group">
                                                                        <input name="authorname" type="text" class="form-control" placeholder="Author Name" value="<?php echo $row['authorname']; ?>">
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <input name="publishdate" id="finish" type="text" class="form-control" placeholder="Publish Date" value="<?php echo $row['publishdate']; ?>">
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <select name="category" class="form-control">
                                                                            
                                                                            <option value="Action and adventure" <?=$row['category'] == 'Action and adventure' ? ' selected="selected"' : '';?>>Action and adventure</option>
                                                                            <option value="History" <?=$row['category'] == 'History' ? ' selected="selected"' : '';?>>History</option>
                                                                            <option value="Children's" <?=$row['category'] == "Children's" ? ' selected="selected"' : '';?> >Children's</option>
                                                                            <option value="Crime" <?=$row['category'] == 'Crime' ? ' selected="selected"' : '';?>>Crime</option>
                                                                            <option value="Drama" <?=$row['category'] == 'Drama' ? ' selected="selected"' : '';?>>Drama</option>
                                                                            <option value="Horror" <?=$row['category'] == 'Horror' ? ' selected="selected"' : '';?>>Horror</option>
                                                                        </select>
                                                                    </div>




                                                                </div>
                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                                                                    <div class="form-group res-mg-t-15">
                                                                        <textarea name="description" placeholder="Description" value="<?php echo $row['description']; ?>"><?php echo $row['description']; ?></textarea>
                                                                    </div>





                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <div class="payment-adress">
                                                                        <!-- <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>-->

                                                                        <input class="btn btn-primary waves-effect waves-light" type="submit" value="Submit" name="submit">
                                                                    </div>
                                                                </div>
                                                            </div>


                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>

                                </form>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php include_once('partialPage/footer.php'); ?>
        </div>

        <!-- jquery
		============================================ -->
        <script src="js/vendor/jquery-1.12.4.min.js"></script>
        <!-- bootstrap JS
		============================================ -->
        <script src="js/bootstrap.min.js"></script>
        <!-- wow JS
		============================================ -->
        <script src="js/wow.min.js"></script>
        <!-- price-slider JS
		============================================ -->
        <script src="js/jquery-price-slider.js"></script>
        <!-- meanmenu JS
		============================================ -->
        <script src="js/jquery.meanmenu.js"></script>
        <!-- owl.carousel JS
		============================================ -->
        <script src="js/owl.carousel.min.js"></script>
        <!-- sticky JS
		============================================ -->
        <script src="js/jquery.sticky.js"></script>
        <!-- scrollUp JS
		============================================ -->
        <script src="js/jquery.scrollUp.min.js"></script>
        <!-- mCustomScrollbar JS
		============================================ -->
        <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="js/scrollbar/mCustomScrollbar-active.js"></script>
        <!-- metisMenu JS
		============================================ -->
        <script src="js/metisMenu/metisMenu.min.js"></script>
        <script src="js/metisMenu/metisMenu-active.js"></script>
        <!-- morrisjs JS
		============================================ -->
        <script src="js/sparkline/jquery.sparkline.min.js"></script>
        <script src="js/sparkline/jquery.charts-sparkline.js"></script>
        <!-- calendar JS
		============================================ -->
        <script src="js/calendar/moment.min.js"></script>
        <script src="js/calendar/fullcalendar.min.js"></script>
        <script src="js/calendar/fullcalendar-active.js"></script>
        <!-- maskedinput JS
		============================================ -->
        <script src="js/jquery.maskedinput.min.js"></script>
        <script src="js/masking-active.js"></script>
        <!-- datepicker JS
		============================================ -->
        <script src="js/datepicker/jquery-ui.min.js"></script>
        <script src="js/datepicker/datepicker-active.js"></script>
        <!-- form validate JS
		============================================ -->
        <script src="js/form-validation/jquery.form.min.js"></script>
        <script src="js/form-validation/jquery.validate.min.js"></script>
        <script src="js/form-validation/form-active.js"></script>
        <!-- dropzone JS
		============================================ -->
        <script src="js/dropzone/dropzone.js"></script>
        <!-- tab JS
		============================================ -->
        <script src="js/tab.js"></script>
        <!-- plugins JS
		============================================ -->
        <script src="js/plugins.js"></script>
        <!-- main JS
		============================================ -->
        <script src="js/main.js"></script>
        <!-- tawk chat JS
		============================================ -->

    </body>

    </html>
<?php
} else {
    header("location:login.php");
}
?>