<?php
Session_start();  
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if($_SESSION["check"]!=intval($_POST["cikle"])){
        echo "不正确";
    }else{
        echo "正确";
    }
}