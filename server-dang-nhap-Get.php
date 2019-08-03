<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $username = $_GET["username"];
    $password = $_GET["password"];
    $datajson = file_get_contents("data.json");
    $arrayDataJson = json_decode($datajson, true);
    $check = 0;

    foreach ($arrayDataJson as $value) {
        if ($username == $value["username"] & $password == $value["password"]) {
            echo "<h2>Welcome <span style='color:red'>" . $username . "</span> to <span style='color: #091acc'>Facebook</span></h2>";
            $check = 1;
            break;
        }
    }
    if ($check == 0) {
        echo "<h2><span style='color:red'>Login Error</span></h2>";
    }
}
?>

