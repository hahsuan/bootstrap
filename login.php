<?php
//2017/11/08
$msgError = "預設密碼是0000";
if(isset($_POST["SID"])){
    session_start();
    require_once 'db_func5.php';
    //    $GLOBALS['dbconfig'] = $dbconfig;
    $SID = $_POST["SID"];
    $SCode = $_POST["SCode"];
    $UserData = CheckUserTest($SID, $SCode);
    if($UserData != NULL)
    {
        $_SESSION['authenticated'] = time();
        $redir = 'vote2.php';
        header("Location: $redir");
        exit;
    }
    else
        $msgError = "帳號或密碼錯誤";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="zh-Hant-TW">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <!-- Bootstrap core CSS -->
 <link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
<title>登入系統</title>
</head>
<style type="text/css">
<!--
body {
margin:0;
padding:0;
font: bold 14px/1.5em Verdana;
}

h2 {
font: bold 18px Verdana, Arial, Helvetica, sans-serif;
color: #000;
margin: 0px;
padding: 0px 0px 0px 15px;
}
@import url('https://fonts.googleapis.com/css?family=Open+Sans');

.login-page {
  width: 360px;
  padding: 8% 0 0;
  margin: auto;
}
.form {
  position: relative;
  z-index: 1;
  background: #3d3d3d;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input {
  font-family: 'Open Sans', sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form button {
  font-family: 'Open Sans', sans-serif;
  font-size: 18px;
  text-transform: uppercase;
  outline: 0;
  background: #e84c3d;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

button span {
  font-family: 'Open Sans', sans-serif;
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

button:hover span {
  padding-right: 25px;
}

button:hover span:after {
  opacity: 1;
  right: 0;
}

.form .message {
  font-family: 'Open Sans', sans-serif;
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 12px;
}
.form .message a {
  font-family: 'Open Sans', sans-serif;
  color: #e84c3d;
  text-decoration: none;
}
.form .register-form {
  display: none;
}
.container {
  position: relative;
  z-index: 1;
  max-width: 300px;
  margin: 0 auto;
}
.container:before, .container:after {
  content: "";
  display: block;
  clear: both;
}
.container .info {
  margin: 50px auto;
  text-align: center;
}
.container .info h1 {
  margin: 0 0 15px;
  padding: 0;
  font-size: 36px;
  font-weight: 300;
  color: #1a1a1a;
}
.container .info span {
  color: #4d4d4d;
  font-size: 12px;
}
.container .info span a {
  color: #000000;
  text-decoration: none;
}
.container .info span .fa {
  color: #EF3B3A;
}
body {
  background-size: 100%
}
</style>
<body bgcolor="#F0F0F0">
<div style="text-align:center;">

<!-- <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">

<meta charset="utf-8"> -->
    <meta name="robots" content="noindex, nofollow">


<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="login.css">

	
</head>
<body background="http://orig11.deviantart.net/20eb/f/2015/030/6/f/_minflat__dark_material_design_wallpaper__4k__by_dakoder-d8fjqzu.jpg">
<div class="login-page">
  <div class="form">
  <label style="color:white;">畢業旅行投票</label>
    <form class="login-form" action="login.php" method="POST">
      <input type="text" name="SID" id="SID" placeholder="username"/>
      <input type="password" name="SCode" id="SCode" placeholder="password"/>
      <button><span>login</span></button>
      <p class="message">Not registered? <a href="#">Create an account</a></p>
    </form>
  </div>
</div>
</body>
</html>







<!--<div class="container">

      <form class="form-signin" method="POST" action="login.php">
        <h2 class="form-signin-heading">畢業旅行投票</h2>
        <label for="inputEmail" class="sr-only">學號</label>
        <input type="text" name="SID" id="SID" class="form-control" placeholder="學號" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="SCode" name="SCode" class="form-control" placeholder="Password" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>

    </div> <!-- /container -->



<!-- <div style="text-align:center;">
　<img src="clinic.jpg"/>
<h2> </h2>
</div>
<div style="text-align:center;">
<br/>
<div style="margin:0 auto;border: 2px solid blue; width:300px;">
<form method="POST" action="login.php">
學號<input type="text" name="SID" id="SID" /><br/>
<?php echo $msgError; ?>
<br/>
密碼<input type="password" name="SCode" id="SCode" /><br/>
<input type="submit" name="Enter" id="Enter" value="登入" />
</form></div>
</div> -->
</body>
</html>