@extends("layouts.master")


    @section("title")
	NU-Time
	@endsection

@section("content")
<style>
a:link {
  color: white;
  text-decoration: none;
}

/* visited link */
a:visited {
  color: white;
  text-decoration: none;
}
</style>
<div id="wrapper">
        <!-- NAVBAR -->
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="brand">
                <a href="index-teacher"><img src="assets/img/logo.png" width="135" height="30" alt="NU-Time Logo"></a>
            </div>
            <div class="container-fluid">
                <div class="navbar-btn">
                    <button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
                </div>

                <div id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right">

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span>Teacher User</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="teacher-myprofile"><i class="lnr lnr-user"></i> <span>My Profile</span></a></li>
                                <li><a href="teacher-changepass"><i class="lnr lnr-pencil"></i> <span>Change Password</span></a></li>
                                <li><a href="index"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div id="sidebar-nav" class="sidebar">
            <div class="sidebar-scroll">
                <nav>
                    <ul class="nav"><br>
                        <li><a href="index-teacher" class=""><i class="lnr lnr-file-empty"></i> <span>Attendance Sheets</span></a></li>
                        <li><a href="teacher-view-classsched" class=""><i class="lnr lnr-chart-bars"></i> <span>Class Schedule</span></a></li>

                    </ul>
                </nav>
            </div>
        </div>

        <!-- MAIN -->
        <div class="main">
            <!-- MAIN CONTENT -->
            <div class="main-content">
                <div class="container-fluid">
                    <!-- OVERVIEW -->
                    <div class="panel panel-headline">
                        <div class="panel-heading">
                            <h3 class="panel-title">Change Password</h3>

                        </div>
                        <div class="panel-body">
                            <form action="#" method="POST">
                                <div class="panel-body no-padding">
                                <div class="col-sm-4">
                                    <label for="">Old Password</label>
                                    <input type="password" name="old" class="form-control" placeholder="" required> <br>
                                    <label for="">New Password</label>
                                    <input type="password" name="new" class="form-control" placeholder="" required><br>
                                    <label for="">Confirm Password</label>
                                    <input type="password" name="confirm" class="form-control" placeholder="" required><br>

                                </div>
                                </div> <br>
                                <input type="submit" value="Submit" class="btn btn-primary">
                                <a href="index-teacher" class="btn btn-danger">Return </a>
                            </form>
                        </div>
                    </div>

                </div>
                <!-- END MAIN -->
                <div class="clearfix"></div>
                <footer>
                    <div class="container-fluid">
                        <p class="copyright">&copy; 2022 NU-Time: Time and Attendance Management System. All Rights Reserved.</p>
                    </div>
                </footer>
            </div>

</div>
            <!-- END WRAPPER -->
            <!-- Javascript -->
@endsection