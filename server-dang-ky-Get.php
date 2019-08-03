<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $username = $_GET["username"];
    $password = $_GET["password"];
    $passwordAgain = $_GET["passwordagain"];
    $dataJson = file_get_contents("data.json");
    $arrayDataJson = json_decode($dataJson, true);
    if (!empty($password) && !empty($passwordAgain)) {

        if (!empty($username) && $password == $passwordAgain) {
            $arrayDataTow = array("username" => $username, "password" => $password);
            array_push($arrayDataJson, $arrayDataTow);
            $dataJson = json_encode($arrayDataJson);
            file_put_contents("data.json", $dataJson);

            echo "<h2><span style='color:red'>Dang ky thanh cong </span> Chao Mung <u style='color: red'>$username</u></div> den voi <span style='color: #091acc'>Facebook</span> cua chung toi !</h2>";
        } else {
            echo "<h2><span style='color:red'>Login Error</span></h2>";
        }
    } else {
        echo "<h2><span style='color:red'>Login Error</span></h2>";
    }
}
?>


