<?
function dbconn(){
    $host = "localhost";
    $user = "jihosting";
    $pw = "jas6489!";
    $dbName = "jihosting";
    return new mysqli($host, $user, $pw, $dbName);
    }
?>
