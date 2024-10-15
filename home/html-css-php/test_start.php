<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>自分メータ</title>
	<link rel="stylesheet" href="css_file/design2.css">
	<link href="progression.css" rel="stylesheet" type="text/css">
</head>

<body>
	<div id="center">
		<h1><ruby>注意画面<rt>ちゅういがめん</rt></ruby></h1>

<?php

session_start();
if(isset($_SESSION['grade'])==false)
{
	print'<ruby>学年<rt>がくねん</rt></ruby>と<ruby>性別<rt>せいべつ</rt></ruby>が<ruby>設定<rt>せってい</rt></ruby>されていません。<ruby>先<rt>さき</rt></ruby>に<ruby>設定<rt>せってい</rt></ruby>することをおすすめします。';
			if($_SESSION['kyoushiflag'] == 1){print '<input type="button" onclick=location.assign("postscript.html") value="設定する" class="btn-gradient-3d-simple2"> ';}
			if($_SESSION['kyoushiflag'] == 0){print '<input type="button" onclick=location.assign("postscript_student.html") value="設定する" class="btn-gradient-3d-simple2"> ';}
			print '<input type="button" onclick=location.assign("test_start_done.php") value="テストを行う" class="btn-gradient-3d-simple2"> ';
			print '<input type="button" onclick=location.assign("../home_teacher.php") value="戻る" class="btn-gradient-3d-simple2">';
	exit();
}

header('Location:test_start_done.php');
exit();

?>