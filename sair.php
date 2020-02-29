
<?php
if(isset($_REQUEST["sair"])){
    session_destroy();
    session_unset(["emailwva"]);
    session_unset(["senhawva"]);
    header("Location: index.html");exit;
}
?>