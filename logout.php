<?php

    session_start();    

    unset($_SESSION["userid"]); //세션 삭제
    unset($_SESSION["username"]);
    unset($_SESSION["userlevel"]);
    unset($_SESSION["userpoint"]);

    echo("
        <script>
        location.href='index.php';
        </script>
        ");

?>