<?
function dbconn(){
    $host = "localhost";
    $user = "jihosting";
    $pw = "minals59!";
    $dbName = "jihosting";
    return new mysqli($host, $user, $pw, $dbName);
    }
?>
