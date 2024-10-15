<head>
    <script>
        sessionStorage.clear();
    </script>
</head>
<?php
session_start();

//教師なら名前を入力してデータ作成(教師はログインの時のみ判別するように変更)
//if($_SESSION['kyoushiflag'] == 1){
//    print'<script>window.location = "kyoushi_data.php"</script>';
//    print'<script>window.location = "../home_teacher.php"</script>';
//}

$_SESSION['flag']=1;
require('dbconnect.php');
$id=dbcreate(1);
$_SESSION['jtid']=$id;

$_SESSION['postscript_id_data']=$id;

print'<script>window.location = "progress_home.html"</script>';
?>
<head>
    <script>
        sessionStorage.clear();
    </script>
</head>
<?php
session_start();

//教師なら名前を入力してデータ作成(教師はログインの時のみ判別するように変更)
//if($_SESSION['kyoushiflag'] == 1){
//    print'<script>window.location = "kyoushi_data.php"</script>';
//    print'<script>window.location = "../home_teacher.php"</script>';
//}

$_SESSION['flag']=1;
require('dbconnect.php');
$id=dbcreate(1);
$_SESSION['jtid']=$id;

$_SESSION['postscript_id_data']=$id;

print'<script>window.location = "progress_home.html"</script>';
?>