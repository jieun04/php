<?
function dbconn(){
    $host = "localhost";
    $user = "jihosting";
    $pw = "jal6489!";
    $dbName = "jihosting";
    return new mysqli($host, $user, $pw, $dbName);
    }
?>
