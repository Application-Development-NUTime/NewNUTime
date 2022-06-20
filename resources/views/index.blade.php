

<style>
.header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  background-color: #f5f5f5;
}
.header .logo {
  font-size: 36px;
  font-family: "Times New Roman";
  color: #000;
  text-decoration: none;
  margin-left: 30px;
}

.nav-items {
  display: flex;
  justify-content: space-around;
  align-items: center;
  background-color: #f5f5f5;
  margin-right: 20px;
}

.nav-items a {
  text-decoration: none;
  color: #000;
  padding: 20px 20px;
}

.intro {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  width: 100%;
  height: 100%;
  background-image: url('assets/img/time.jpg');
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
}

.intro h1 {
  font-family: "helvetica";
  font-size: 60px;
  color:white;
  font-weight: bold;
  text-transform: uppercase;
  margin: 0;
}

.intro h2 {
  font-size: 40px;
  color: white;
  text-transform: uppercase;
  margin: 20px 0;
}

.footer {
    position: absolute;
    bottom: 0;
    right: 0;
    padding-top: 15px;
    padding-bottom: 10px;
}
.copyright {
    margin-bottom: 0;
    text-align: right;
    font-size: 24px;
}
    </style>

    <body>
            <header class="header">
            <a href="index" class="logo"><img src="assets/img/logo.png" width="135" height="50" alt="NU-Time Logo"></a>
            <nav class="nav-items">
            <a href="page-login">Login</a>
            </nav>
            </header>
            <main>
            <div class="intro">
            <h1>NU-Time: Time and Attendance</h1>
            <h2>Management System</h2>
            </div>

            <footer>
                    <div class="container-fluid">
                        <p class="copyright">&copy; 2022 NU-Time: Time and Attendance Management System. All Rights Reserved.</p>
                    </div>
            </footer>
</body>
