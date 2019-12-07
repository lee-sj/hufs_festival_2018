<?php header('Location: /index.html'); 

    if (!(preg_match('/(iPhone|Android|Opera Mini|SymblanOS|Windows CE|BlackBerry|Nokia|SonyEricsson|Web OS|PalmOS)/i',$_SERVER['HTTP_USER_AGENT']))){
        include "sorry_pc.html"
    }

?>

