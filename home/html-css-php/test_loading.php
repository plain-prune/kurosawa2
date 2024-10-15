<head>
</head>
<?php
$jtid = json_decode($_POST["jtid"]);
session_start();
$_SESSION['jtid'] = $jtid;
$_SESSION['flag'] = 1;
require('dbconnect.php');
$data = dbroad(1);
db_js($data, 1);

print '<script>window.location = "progress_home.html"</script>';

?>