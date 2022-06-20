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
                        <li><a href="index-teacher" class="active"><i class="lnr lnr-file-empty"></i> <span>Attendance Sheets</span></a></li>
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
                            <h3 class="panel-title">Student Attendance Sheet</h3>
                            <p>Application Development for BSIS 191A</p>
                            <p>Class Time: 8AM-10AM</p>
                        </div>
                        <div class="panel-body">

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="panel">


                                        <div class="panel-body no-padding">
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>Student Name</th>
                                                        <th>Attendance</th>
                                                        <th>Time In</th>
                                                        <th>Time Out</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Maria Mendoza</td>
                                                        <td>Absent</td>
                                                        <td>N/A</td>
                                                        <td>N/A</td>
                                                    </tr>
                                                    <tr>
                                                        <td>MJ Avelino</td>
                                                        <td>Present</td>
                                                        <td>8:00 AM</td>
                                                        <td>10:00 AM</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Maui Katigbak</td>
                                                        <td>Present</td>
                                                        <td>8:00 AM</td>
                                                        <td>10:00 AM</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Bowwi Katigbak</td>
                                                        <td>Late</td>
                                                        <td>8:30 AM</td>
                                                        <td>10:00 AM</td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                            <div class="panel-footer">
                                                <div class="row">
                                                    <div class="col-md-6"><span class="panel-note"></span></div>
                                                    <div class="col-md-6 text-right"><a href="#" class="btn btn-primary">Print</a>
                                                        <a href="#" class="btn btn-success">Download</a></div>
                                                    <!--will go to user accounts expanded version (report gen) -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="#" class="btn btn-success">Request Lock</a> &nbsp;&nbsp;
                            <a href="#" class="btn btn-primary">Request Unlock</a>&nbsp;&nbsp;
                            <a href="index-teacher" class="btn btn-danger">Return</a>
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
@endsection