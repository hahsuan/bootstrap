<?php
//2017/11/08
$msgError = "預設密碼是0000";
if(isset($_POST["Enter"])){
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

</style>
<body bgcolor="#F0F0F0">



<div class="container">

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