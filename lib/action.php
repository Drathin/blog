<?php
Session_start();  
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if($_SESSION["check"]!=intval($_POST["cikle"])){
        echo "����ȷ";
    }else{
        echo "��ȷ";
    }
}