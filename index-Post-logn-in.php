<!DOCTYPE HTML>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<style type="text/css">
    .dang-nhap {
        height: 250px;
        width: 250px;
        margin: 5% 50px 100px 35%;
        border: 100px #091acc solid;
        padding: 80px;
        border-radius: 50%;
        background-color: white;
    }

    .dang-nhap input {
        padding: 10px;
        margin: 5px;
        border-radius: 7px;
        background-color: lightblue;

    }

    .h {
        text-align: center;
        color: blue;
    }
    body{
        background-color: lightblue;
    }
</style>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username === "VUXUANDIEM" && $password === "123") {
        echo "<h2>Welcome <span style='color:#ff281e'>" . $username . "</span> to <span style='color: #091acc'>Facebook</span></h2>";
    } else {
        echo "<h2><span style='color:red'>Login Error</span></h2>";
    }
}
?>
<form method="post">
    <div class="dang-nhap">
        <div class="h">
            <h1>LOGIN</h1>
            <h2><u>Facebook</u></h2>
        </div>
        <input type="text" name="username" size="30" placeholder="Username">
        <input type="password" name="password" size="30" placeholder="Password">
        <input type="submit" value="Sign in" style="background-color: deepskyblue">
    </div>
</form>
</body>
</html>