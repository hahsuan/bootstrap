<?php
session_start(); 
if(!isset($_SESSION["authenticated"])|| (time() - $_SESSION['authenticated']) > 600 ) 
{
    $redir = "login.php";
    header("Location: $redir");
    exit;
}
?>
<html lang="lang="zh-Hant-TW"">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>畢業旅行投票</title>
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
<body background="http://orig11.deviantart.net/20eb/f/2015/030/6/f/_minflat__dark_material_design_wallpaper__4k__by_dakoder-d8fjqzu.jpg">

<!-- <p>畢業旅行投票</p> -->
<div class="login-page">
  <!-- <div class="form"> -->
<form method='post' action='confirm2.php'>

<h2 style="color:white;text-align:center">畢業旅行投票</h2>
<table border='3' width='100%' id='table1' style=";background:white">
    <tr>
        <td align='right' width='200'>學號</td>
        <td><input type='text' name='SID' size='10'>　</td>
    </tr>
    <tr>
        <td align='right' width='200'>姓名</td>
        <td><input type='text' name='SName' size='10'>　</td>
    </tr>
    <tr>
        <td align='right' width='200'>身份證末四碼</td>
        <td><input type='text' name='SCode' size='10'></td>
    </tr>
    <tr>
        <td align='right' width='200'>選擇地點</td>
        <td><input type='radio' value='澎湖' name='SLoc'>澎湖
            <input type='radio' value='花蓮' name='SLoc'>花蓮
            <input type='radio' value='泰國' name='SLoc'>泰國</td>
    </tr>
    <tr>
        <td align='right' width='200'>意見</td>
        <td><input type='text' name='SComment' size='50'>　</td>
    </tr>
    <tr>
        <td align='right' width='200'>　</td>
        <td><input type='submit' name='Submit' value='投票'>　</td>
    </tr>
</table>
</form>
</div>
<!-- </div> -->
</body>
</html>