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
                <a href="index-admin"><img src="assets/img/logo.png" width="135" height="30" alt="NU-Time Logo"></a>
            </div>
            <div class="container-fluid">
                <div class="navbar-btn">
                    <button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
                </div>

                <div id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right">

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span>Admin User</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="admin-changepass"><i class="lnr lnr-user"></i> <span>Change Password</span></a></li>
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
                        <li><a href="index-admin" class=""><i class="lnr lnr-home"></i> <span>User Accounts</span></a></li>
                        <li><a href="admin-lock-attendance" class="active"><i class="lnr lnr-file-empty"></i> <span>Attendance Sheets</span></a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- END LEFT SIDEBAR -->
        
        <!-- MAIN -->
        <div class="main">
            <!-- MAIN CONTENT -->
            <div class="main-content">
                <div class="container-fluid">
                    <!-- OVERVIEW -->
                    <div class="panel panel-headline">
                        <div class="panel-heading">
                            <h3 class="panel-title">Locking of Attendance Sheets</h3>

                        </div>
                        <div class="panel-body">


                            <div class="row">
                                <div class="col-md-12">
                                    <div class="panel">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">Attendance Sheets</h3>

                                        </div>

                                        <div class="panel-body no-padding">
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>Teacher</th>
                                                        <th>Class Section</th>
                                                        <th>Subject</th>
                                                        <th>Class Time</th>
                                                        <th>Request</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>MJ Avelino</td>
                                                        <td>BSIS 191A</td>
                                                        <td>Application Development</td>
                                                        <td>8AM-10AM</td>
                                                        <td>Lock</td>
                                                        <td><a href="#" class="btn btn-success">Unlock</a> <a href="#" class="btn btn-danger">Lock</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>MJ Avelino</td>
                                                        <td>BSIS 191C</td>
                                                        <td>Software Engineering</td>
                                                        <td>8AM-10AM</td>
                                                        <td>None</td>
                                                        <td><a href="#" class="btn btn-success">Unlock</a> <a href="#" class="btn btn-danger">Lock</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>MJ Avelino</td>
                                                        <td>BSIS 191B</td>
                                                        <td>Life & Works of Rizal</td>
                                                        <td>8AM-10AM</td>
                                                        <td>Lock</td>
                                                        <td><a href="#" class="btn btn-success">Unlock</a> <a href="#" class="btn btn-danger">Lock</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>MJ Avelino</td>
                                                        <td>BSIS 191A</td>
                                                        <td>Application Development</td>
                                                        <td>8AM-10AM</td>
                                                        <td>Unlock</td>
                                                        <td><a href="#" class="btn btn-success">Unlock</a> <a href="#" class="btn btn-danger">Lock</a></td>
                                                    </tr>

                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                </div>
                            </div>
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