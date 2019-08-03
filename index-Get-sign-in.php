<!DOCTYPE HTML>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<style type="text/css">
    .sign-in {
        height: 250px;
        width: 250px;
        margin: 5% 50px 100px 35%;
        border: 100px #091acc solid;
        padding: 100px;
        border-radius: 50%;
        background-color: white;
    }

    .sign-in input {
        padding: 10px;
        margin: 5px;
        border-radius: 7px;
        background-color: lightblue;
    }

    body {
        background-color: lightblue;
    }

    .h {
        color: #091acc;
        text-align: center;
    }


</style>
<body>
<form method="get" action="server-dang-ky-Get.php">
    <div class="sign-in">
        <div class="h">
            <h1>SIGN IN</h1>
            <h2><u>Facebook</u></h2>
        </div>
        <input type="text" name="username" size="30" placeholder="Username">
        <input type="password" name="password" size="30" placeholder="Password">
        <input type="password" name="passwordagain" size="30" placeholder="Password again">
        <input type="submit" value="Sign in" style="background-color: deepskyblue">
    </div>
</form>
</body>
</html>
