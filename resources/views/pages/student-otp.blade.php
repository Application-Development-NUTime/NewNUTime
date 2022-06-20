@extends("layouts.master")


    @section("title")
	NU-Time
	@endsection

@section("content")

    <!-- WRAPPER -->
    <div id="wrapper">
        <div class="vertical-align-wrap">
            <div class="vertical-align-middle">
                <div class="auth-box ">
                    <div class="left">
                        <div class="content">
                            <div class="header">
                                <div class="logo text-center"><img src="assets/img/logo.png" height="60" width="230" alt="NU-Time Logo"></div>
                                <p class="lead">Verify OTP</p>
                            </div>
                            <form class="form-auth-small" action="#">
                                <!-- notes by mendoza: update form action -->
                                <div class="form-group">
                                    <label for="signin-otp" class="control-label sr-only">One Time Password</label>
                                    <input type="text" class="form-control" id="signin-otp" placeholder="One Time Password">
                                </div>


                                <button type="submit" class="btn btn-primary btn-lg btn-block">VERIFY</button>
                                <div class="bottom">
                                    <span class="helper-text"><i class="fa fa-lock"></i> <a href="#">Didn't get OTP? Send again. </a></span>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="right">
                        <div class="overlay"></div>
                        <div class="content text">
                            <h1 class="heading">NU-Time</h1>
                            <p>Time and Attendance Management System</p>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- END WRAPPER -->
@endsection