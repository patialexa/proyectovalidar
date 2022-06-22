<?php
    $login = array("Luis","Miguel","Carmen","María");
    $password = array("111","222","333","444");
    
    $log = $_POST['txtLogin'];
    $pass = $_POST['txtPass'];
    $flag = false;
    
    for($i=0; $i<count($login); $i++) {
        if(strcasecmp($log,$login[$i])==0 && strcmp($pass,$password[$i])==0) {
            print "<p style='color: #0000FF;'>USUARIO CORRECTO</p>";
            $flag = true;
            break;
        }
    }
    if($flag == false) {
       print "<p style='color: #FF0000;'>USUARIO INCORRECTO</p>";  
    }
    
?>