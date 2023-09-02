<?php 
    if (isset($_POST['g-recaptcha-response'])) {
        $secreatkey = "6Lc62JEmAAAAAGedwFYTlAXw0LIw-zWWH_FqHG2q";
        $ip = $_SERVER['REMOTE_ADDR'];
        $response = $_POST['g-recaptcha-response'];
        $url = "https://www.google.com/recaptcha/api/siteverify?secreat=$secreatkey&response=$response&remoteip=$ip";
        $fire = file_get_contents($url);
        echo $fire;
    }
    else{
        echo "Recapcha Error";  
    }
?>