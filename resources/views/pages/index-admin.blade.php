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
                        <li><a href="index-admin" class="active"><i class="lnr lnr-home"></i> <span>User Accounts</span></a></li>
                        <li><a href="admin-lock-attendance" class=""><i class="lnr lnr-file-empty"></i> <span>Attendance Sheets</span></a></li>
                    </ul>
                </nav>
            </div>
        </div>
</div>
        <!-- MAIN -->
        <div id="wrapper">
        <div class="main">
            <!-- MAIN CONTENT -->
            <div class="main-content">
                <div class="container-fluid">
                    <!-- OVERVIEW -->
                    <div class="panel panel-headline">
                        <div class="panel-heading">
                            <h3 class="panel-title">Manage User Accounts</h3>

                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="metric">
                                        <span class="icon"><i class="fa fa-user"></i></span>
                                        <p>
                                            <span class="number">50</span>
                                            <span class="title">Student Accounts</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="metric">
                                        <span class="icon"><i class="fa fa-user"></i></span>
                                        <p>
                                            <span class="number">10</span>
                                            <span class="title">Teacher Accounts</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="metric">
                                        <span class="icon"><i class="fa fa-user"></i></span>
                                        <p>
                                            <span class="number">1</span>
                                            <span class="title">Admin Account</span>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="panel">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">User Accounts</h3>

                                        </div>

                                        <div class="panel-body no-padding">
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>Username</th>
                                                        <th>User Type</th>
                                                        <th>Date Created</th>                                                    
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>mendozama</td>
                                                        <td>Student</td>
                                                        <td>2022-05-24</td>                                                    
                                                        <td><a href="#" class="btn btn-success">Update</a> <a href="#" class="btn btn-danger">Delete</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>katigbakbo</td>
                                                        <td>Student</td>
                                                        <td>2022-05-24</td>                                                
                                                        <td><a href="#" class="btn btn-success">Update</a> <a href="#" class="btn btn-danger">Delete</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>katigbakma</td>
                                                        <td>Student</td>
                                                        <td>2022-05-23</td>                                               
                                                        <td><a href="#" class="btn btn-success">Update</a> <a href="#" class="btn btn-danger">Delete</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>ocampoch</td>
                                                        <td>Admin</td>
                                                        <td>2022-05-23</td>                                                      
                                                        <td><a href="#" class="btn btn-success">Update</a> <a href="#" class="btn btn-danger">Delete</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>avelinomj</td>
                                                        <td>Teacher</td>
                                                        <td>2022-05-23</td>                                                   
                                                        <td><a href="#" class="btn btn-success">Update</a> <a href="#" class="btn btn-danger">Delete</a></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div class="panel-footer">
                                                <div class="row">
                                                    <div class="col-md-6"><span class="panel-note"></span></div>
                                                    <div class="col-md-6 text-right"><a href="admin-createacc" class="btn btn-primary">Create Account</a></div>
                                                    <!--will go to user accounts expanded version (report gen) -->
                                                </div>
                                            </div>
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
</div>
            <!-- END WRAPPER -->
            <!-- Javascript -->
@endsection